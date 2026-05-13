<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

$config = require __DIR__ . '/config.php';
date_default_timezone_set($config['timezone'] ?? 'Europe/Moscow');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

try {
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        respond(false, 'Метод запроса не поддерживается.', 405);
    }

    if (($_POST['form_id'] ?? '') !== 'vkrugauto_lead') {
        respond(false, 'Форма не распознана. Обновите страницу и попробуйте еще раз.', 400);
    }

    if (trim((string)($_POST['website'] ?? '')) !== '') {
        respond(true, 'Заявка отправлена. Мы свяжемся с вами в ближайшее время.');
    }

    if (!rateLimitAllows($config)) {
        respond(false, 'Заявка уже отправлялась недавно. Попробуйте повторить через минуту или позвоните нам.', 429);
    }

    $allowedServices = [
        'бронепленка / зоны риска',
        'тонировка стекол',
        'затемнение или бронь фар',
        'полировка кузова',
        'шумоизоляция',
        'перетяжка потолка',
        'другое',
    ];

    $name = cleanText($_POST['name'] ?? '', 80);
    $phone = cleanText($_POST['phone'] ?? '', 40);
    $car = cleanText($_POST['car'] ?? '', 120);
    $service = cleanText($_POST['service'] ?? '', 80);
    $desiredDate = cleanText($_POST['desired_date'] ?? '', 20);
    $comment = cleanText($_POST['comment'] ?? '', 900, true);
    $sourcePage = cleanText($_POST['source_page'] ?? 'index', 80);

    if ($name === '' || utfLength($name) < 2) {
        respond(false, 'Укажите имя, чтобы мастер понимал, как к вам обращаться.', 422);
    }

    if (!validPhone($phone)) {
        respond(false, 'Укажите корректный телефон для связи.', 422);
    }

    if ($service === '' || !in_array($service, $allowedServices, true)) {
        respond(false, 'Выберите услугу из списка.', 422);
    }

    if (empty($_POST['personal_data_consent']) || (string)$_POST['personal_data_consent'] !== '1') {
        respond(false, 'Нужно дать согласие на обработку персональных данных.', 422);
    }

    if (empty($_POST['privacy_policy_accept']) || (string)$_POST['privacy_policy_accept'] !== '1') {
        respond(false, 'Нужно подтвердить ознакомление с политикой обработки персональных данных.', 422);
    }

    if ($desiredDate !== '' && !validFutureDate($desiredDate)) {
        respond(false, 'Проверьте желаемую дату записи.', 422);
    }

    if (looksLikeSpam([$name, $phone, $car, $service, $comment])) {
        respond(false, 'Форма содержит некорректные данные. Проверьте поля и попробуйте еще раз.', 422);
    }

    $lead = [
        'created_at' => date('Y-m-d H:i:s'),
        'ip' => getIp(),
        'name' => $name,
        'phone' => $phone,
        'car' => $car,
        'service' => $service,
        'desired_date' => $desiredDate,
        'comment' => $comment,
        'source_page' => $sourcePage,
        'consent_personal_data' => 'yes',
        'privacy_policy_accept' => 'yes',
        'user_agent' => cleanText($_SERVER['HTTP_USER_AGENT'] ?? '', 220),
    ];

    saveLeadToCsv($lead);
    markRateLimit($config);

    sendMailNotification($lead, $config);
    sendTelegramNotification($lead, $config);

    respond(true, 'Заявка отправлена. Мы свяжемся с вами в ближайшее время.');
} catch (Throwable $exception) {
    error_log('Lead form error: ' . $exception->getMessage());
    respond(false, 'Не удалось отправить заявку. Позвоните нам или попробуйте еще раз.', 500);
}

function respond(bool $success, string $message, int $status = 200): void
{
    http_response_code($status);
    echo json_encode([
        'success' => $success,
        'message' => $message,
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function cleanText(mixed $value, int $maxLength, bool $multiline = false): string
{
    $value = is_string($value) ? $value : '';
    $value = trim($value);
    $value = strip_tags($value);
    $value = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', ' ', $value) ?? '';

    if (!$multiline) {
        $value = preg_replace('/\s+/u', ' ', $value) ?? '';
    } else {
        $value = preg_replace("/[ \t]+/u", ' ', $value) ?? '';
        $value = preg_replace("/\n{3,}/u", "\n\n", $value) ?? '';
    }

    return utfSubstr(trim($value), 0, $maxLength);
}

function utfLength(string $value): int
{
    return function_exists('mb_strlen') ? mb_strlen($value, 'UTF-8') : strlen($value);
}

function utfSubstr(string $value, int $start, int $length): string
{
    return function_exists('mb_substr') ? mb_substr($value, $start, $length, 'UTF-8') : substr($value, $start, $length);
}

function validPhone(string $phone): bool
{
    if (!preg_match('/^\+?[0-9\s().-]{10,24}$/u', $phone)) {
        return false;
    }

    $digits = preg_replace('/\D+/', '', $phone) ?? '';
    return strlen($digits) >= 10 && strlen($digits) <= 15;
}

function validFutureDate(string $date): bool
{
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        return false;
    }

    $parsed = DateTimeImmutable::createFromFormat('!Y-m-d', $date);
    if (!$parsed || $parsed->format('Y-m-d') !== $date) {
        return false;
    }

    $today = new DateTimeImmutable('today');
    return $parsed >= $today;
}

function looksLikeSpam(array $values): bool
{
    $joined = trim(implode(' ', $values));

    if ($joined === '') {
        return true;
    }

    if (preg_match('/(.)\1{9,}/u', $joined)) {
        return true;
    }

    if (preg_match_all('/https?:\/\/|www\./iu', $joined, $matches) > 1) {
        return true;
    }

    if (preg_match('/\[url=|<a\s|<\/script/iu', $joined)) {
        return true;
    }

    return false;
}

function getIp(): string
{
    $keys = ['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'];
    foreach ($keys as $key) {
        $value = $_SERVER[$key] ?? '';
        if ($value === '') {
            continue;
        }

        $ip = trim(explode(',', (string)$value)[0]);
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            return $ip;
        }
    }

    return 'unknown';
}

function rateFilePath(): string
{
    $identity = getIp() . '|' . ($_SERVER['HTTP_USER_AGENT'] ?? '');
    return __DIR__ . '/../data/rate_' . hash('sha256', $identity) . '.txt';
}

function rateLimitAllows(array $config): bool
{
    $seconds = (int)($config['rate_limit_seconds'] ?? 60);
    $now = time();

    if (isset($_SESSION['last_lead_time']) && ($now - (int)$_SESSION['last_lead_time']) < $seconds) {
        return false;
    }

    $file = rateFilePath();
    if (is_file($file)) {
        $last = (int)trim((string)file_get_contents($file));
        if ($last > 0 && ($now - $last) < $seconds) {
            return false;
        }
    }

    return true;
}

function markRateLimit(array $config): void
{
    $_SESSION['last_lead_time'] = time();
    $file = rateFilePath();
    $dir = dirname($file);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    file_put_contents($file, (string)time(), LOCK_EX);
}

function saveLeadToCsv(array $lead): void
{
    $file = __DIR__ . '/../data/leads.csv';
    $dir = dirname($file);

    if (!is_dir($dir) && !mkdir($dir, 0755, true) && !is_dir($dir)) {
        throw new RuntimeException('Cannot create data directory.');
    }

    $isNewFile = !is_file($file) || filesize($file) === 0;
    $handle = fopen($file, 'ab');
    if (!$handle) {
        throw new RuntimeException('Cannot open CSV file.');
    }

    if (!flock($handle, LOCK_EX)) {
        fclose($handle);
        throw new RuntimeException('Cannot lock CSV file.');
    }

    if ($isNewFile) {
        fputcsv($handle, array_keys($lead), ';');
    }

    fputcsv($handle, array_values($lead), ';');
    fflush($handle);
    flock($handle, LOCK_UN);
    fclose($handle);
}

function sendMailNotification(array $lead, array $config): void
{
    if (empty($config['mail_enabled'])) {
        return;
    }

    $to = (string)($config['recipient_email'] ?? '');
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        error_log('Lead form: recipient email is not configured.');
        return;
    }

    $sender = (string)($config['sender_email'] ?? 'no-reply@example.ru');
    if (!filter_var($sender, FILTER_VALIDATE_EMAIL)) {
        $sender = 'no-reply@example.ru';
    }

    $subject = 'Новая заявка с сайта ' . ($config['site_name'] ?? 'Вкругавто');
    $message = leadMessage($lead);
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . encodeHeader((string)($config['site_name'] ?? 'Вкругавто')) . ' <' . $sender . '>',
        'Reply-To: ' . $sender,
        'X-Mailer: PHP/' . PHP_VERSION,
    ];

    $sent = @mail($to, encodeHeader($subject), $message, implode("\r\n", $headers));
    if (!$sent) {
        error_log('Lead form: mail() returned false.');
    }
}

function encodeHeader(string $value): string
{
    return '=?UTF-8?B?' . base64_encode($value) . '?=';
}

function leadMessage(array $lead): string
{
    return implode(PHP_EOL, [
        'Новая заявка с сайта Вкругавто',
        '',
        'Дата: ' . $lead['created_at'],
        'Имя: ' . $lead['name'],
        'Телефон: ' . $lead['phone'],
        'Автомобиль: ' . ($lead['car'] ?: 'не указан'),
        'Услуга: ' . $lead['service'],
        'Желаемая дата: ' . ($lead['desired_date'] ?: 'не указана'),
        'Комментарий: ' . ($lead['comment'] ?: 'нет'),
        '',
        'IP: ' . $lead['ip'],
        'Источник: ' . $lead['source_page'],
    ]);
}

function sendTelegramNotification(array $lead, array $config): void
{
    $telegram = $config['telegram'] ?? [];
    if (empty($telegram['enabled'])) {
        return;
    }

    $token = (string)($telegram['bot_token'] ?? '');
    $chatId = (string)($telegram['chat_id'] ?? '');

    if ($token === '' || $chatId === '' || str_contains($token, 'PLACEHOLDER') || str_contains($chatId, 'PLACEHOLDER')) {
        error_log('Lead form: Telegram is enabled, but token or chat id is not configured.');
        return;
    }

    $text = implode("\n", [
        '<b>Новая заявка Вкругавто</b>',
        'Имя: ' . telegramEscape($lead['name']),
        'Телефон: ' . telegramEscape($lead['phone']),
        'Авто: ' . telegramEscape($lead['car'] ?: 'не указан'),
        'Услуга: ' . telegramEscape($lead['service']),
        'Дата: ' . telegramEscape($lead['desired_date'] ?: 'не указана'),
        'Комментарий: ' . telegramEscape($lead['comment'] ?: 'нет'),
    ]);

    $url = 'https://api.telegram.org/bot' . rawurlencode($token) . '/sendMessage';
    $payload = http_build_query([
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => 'HTML',
        'disable_web_page_preview' => 'true',
    ]);

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => $payload,
            'timeout' => 5,
        ],
    ]);

    $result = @file_get_contents($url, false, $context);
    if ($result === false) {
        error_log('Lead form: Telegram request failed.');
    }
}

function telegramEscape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
