<?php

return [
    'site_name' => 'Вкругавто',
    'site_url' => 'https://example.ru',
    'timezone' => 'Europe/Moscow',

    // Замените на рабочий email перед публикацией.
    'recipient_email' => 'leads@example.ru',
    'sender_email' => 'no-reply@example.ru',
    'mail_enabled' => true,

    // Ограничение повторной отправки с одного IP/браузера.
    'rate_limit_seconds' => 60,

    // Telegram отключен по умолчанию. Не храните реальные секреты в публичном репозитории.
    'telegram' => [
        'enabled' => false,
        'bot_token' => 'TELEGRAM_BOT_TOKEN_PLACEHOLDER',
        'chat_id' => 'TELEGRAM_CHAT_ID_PLACEHOLDER',
    ],
];
