<?php
$siteUrl = 'https://example.ru';
$canonicalUrl = $siteUrl . '/';
$phoneDisplay = '+7 (985) 556-03-20';
$phoneHref = 'tel:+79855560320';
$whatsappUrl = 'https://wa.me/79855560320?text=' . rawurlencode('Здравствуйте! Хочу рассчитать стоимость оклейки автомобиля во Вкругавто.');
$mapsUrl = 'https://yandex.ru/maps/-/CPgRqVns';
$mapEmbedUrl = 'https://yandex.ru/map-widget/v1/?ll=37.881443%2C55.744971&z=17&pt=37.881443,55.744971,pm2rdm';
$year = date('Y');

$services = [
    ['title' => 'Оклейка такси под ГОСТ', 'text' => 'Белый, желтый, брендирование под Яндекс, ГОСТ Турция и ГОСТ Германия для подготовки автомобиля к работе.', 'icon' => 'taxi'],
    ['title' => 'Антигравийная пленка', 'text' => 'Защита зон риска: бампер, фары, капот, зеркала, пороги и другие уязвимые участки кузова.', 'icon' => 'shield'],
    ['title' => 'Автовинил', 'text' => 'Частичная или полная оклейка для обновления внешнего вида автомобиля без лишнего визуального шума.', 'icon' => 'wrap'],
    ['title' => 'Тонировка', 'text' => 'Задняя полусфера, лобовое стекло и пленка хамелеон после консультации и с учетом допустимых требований.', 'icon' => 'glass'],
    ['title' => 'Оклейка фар пленкой', 'text' => 'Темная бронь, защита поверхности и аккуратное визуальное обновление оптики.', 'icon' => 'light'],
    ['title' => 'Срочные работы', 'text' => 'При наличии свободного окна можем принять срочно и выполнить задачу в день обращения.', 'icon' => 'clock'],
];

$prices = [
    ['name' => 'Полная оклейка в белый + ГОСТ', 'price' => '18 900 ₽'],
    ['name' => 'Желтый', 'price' => '18 900 ₽'],
    ['name' => 'Яндекс БРЕНД', 'price' => '3 900 ₽'],
    ['name' => 'ГОСТ Турция', 'price' => '4 900 ₽'],
    ['name' => 'ГОСТ Германия', 'price' => '8 900 ₽'],
];

$reviews = [
    'Оклеили зоны риска и затонировали авто: клиенты отмечают результат без пыли и заломов.',
    'Срочно нужно было оклеить бампер: приняли при свободном окне и сделали в день обращения.',
    'В отзывах часто выделяют хорошее отношение, гарантию и отсутствие лишних накруток.',
    'Автомобиль оклеили аккуратно, с вниманием к краям, стыкам и подворотам.',
    'Клиенты отмечают, что мастера принимают быстро и работают без затягивания сроков.',
    'Можно подождать на месте: есть Wi-Fi, чай, кофе, приставка и комфортная зона ожидания.',
];

$faq = [
    ['q' => 'Можно ли приехать без записи?', 'a' => 'Лучше записаться заранее, но при наличии свободного окна мастера могут принять срочно. Перед приездом стоит позвонить или написать.'],
    ['q' => 'Сколько занимает оклейка?', 'a' => 'Срок зависит от объема: небольшие зоны могут выполняться быстрее, полная оклейка требует больше времени. Точный срок скажет мастер после уточнения задачи.'],
    ['q' => 'Можно ли рассчитать стоимость по телефону?', 'a' => 'Да, для предварительной оценки нужно указать автомобиль, услугу и желаемый материал. Итоговая стоимость согласуется до начала работ.'],
    ['q' => 'Есть ли гарантия?', 'a' => 'В отзывах клиенты отмечают гарантию на работы и материал. Конкретные условия лучше уточнить у мастера при записи.'],
    ['q' => 'Можно ли оплатить картой?', 'a' => 'Да, доступны карта, наличные, QR-код и банковский перевод.'],
    ['q' => 'Делаете оклейку такси под ГОСТ и Яндекс?', 'a' => 'Да, в карточке указаны услуги по оклейке такси, ГОСТ и Яндекс БРЕНД.'],
];

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    '@id' => $canonicalUrl . '#business',
    'additionalType' => 'https://schema.org/AutomotiveBusiness',
    'name' => 'Вкругавто',
    'url' => $canonicalUrl,
    'image' => $siteUrl . '/assets/img/yandex-taxi-hero.jpg',
    'telephone' => '+79855560320',
    'description' => 'Оклейка авто, такси под ГОСТ, Яндекс БРЕНД, антигравийная пленка, автовинил и тонировка в Москве.',
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Москва',
        'streetAddress' => 'Салтыковская ул., 51, этаж 4',
        'addressCountry' => 'RU',
    ],
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.7',
        'ratingCount' => '25',
        'reviewCount' => '18',
        'bestRating' => '5',
    ],
    'openingHours' => 'Открыто до 23:00, точное время начала работы уточняйте при записи',
    'paymentAccepted' => 'Cash, Bank Card, QR code, Bank transfer',
    'areaServed' => 'Москва',
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Услуги по оклейке автомобилей',
        'itemListElement' => [
            ['@type' => 'Offer', 'name' => 'Полная оклейка в белый + ГОСТ', 'price' => '18900', 'priceCurrency' => 'RUB'],
            ['@type' => 'Offer', 'name' => 'Яндекс БРЕНД', 'price' => '3900', 'priceCurrency' => 'RUB'],
            ['@type' => 'Offer', 'name' => 'ГОСТ Турция', 'price' => '4900', 'priceCurrency' => 'RUB'],
        ],
    ],
];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вкругавто — оклейка авто, антигравийная плёнка и брендирование такси в Москве</title>
    <meta name="description" content="Оклейка авто, такси под ГОСТ, Яндекс БРЕНД, антигравийная плёнка, автовинил и тонировка в Москве. Вкругавто: рейтинг 4,7, предварительная запись, оплата картой, Салтыковская ул., 51.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="Вкругавто — оклейка авто и брендирование такси в Москве">
    <meta property="og:description" content="Оклейка такси под ГОСТ, Яндекс БРЕНД, антигравийная пленка, автовинил и тонировка. Рейтинг 4,7 на Яндекс Картах.">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?= htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>/assets/img/yandex-taxi-hero.jpg">
    <meta name="theme-color" content="#0f172a">
    <link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
    <link rel="preload" href="/assets/css/style.css" as="style">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?></script>
</head>
<body>
    <a class="skip-link" href="#main">Перейти к содержимому</a>

    <header class="site-header" data-header>
        <div class="container header-inner">
            <a class="brand" href="#top" aria-label="Вкругавто, на начало страницы">
                <span class="brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 32 32" width="32" height="32" role="img" aria-label="Логотип Вкругавто">
                        <path d="M6 21.5 10.2 9h11.6L26 21.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M8.5 21.5h15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M11 23.5h2.8M18.2 23.5H21" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
                <span>
                    <strong>Вкругавто</strong>
                    <small>оклейка и защита авто</small>
                </span>
            </a>

            <nav class="desktop-nav" aria-label="Основная навигация">
                <a href="#services">Услуги</a>
                <a href="#prices">Цены</a>
                <a href="#process">Процесс</a>
                <a href="#reviews">Отзывы</a>
                <a href="#contacts">Контакты</a>
            </nav>

            <div class="header-actions">
                <a class="header-phone" href="<?= $phoneHref; ?>"><?= $phoneDisplay; ?></a>
                <button class="menu-button" type="button" aria-label="Открыть меню" aria-expanded="false" data-menu-toggle>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <nav class="mobile-nav" aria-label="Мобильная навигация" data-mobile-nav>
            <a href="#services">Услуги</a>
            <a href="#prices">Цены</a>
            <a href="#lead">Заявка</a>
            <a href="#contacts">Контакты</a>
        </nav>
    </header>

    <main id="main">
        <section class="hero section" id="top">
            <div class="hero-sheen" aria-hidden="true"></div>
            <div class="container hero-inner">
                <div class="hero-copy reveal">
                    <p class="eyebrow">Москва, Салтыковская ул., 51, этаж 4</p>
                    <h1>Оклейка авто, такси под ГОСТ и антигравийная защита в Москве</h1>
                    <p class="hero-text">Вкругавто — оклейка плёнкой, автовинил, тонировка и брендирование такси. Работаем по записи, согласуем стоимость до начала работ и аккуратно сдаём результат без пыли, заломов и лишних накруток.</p>

                    <div class="hero-actions" aria-label="Основные действия">
                        <a class="btn btn-primary" href="#lead">Рассчитать стоимость</a>
                        <a class="btn btn-secondary" href="#lead">Записаться</a>
                        <a class="btn btn-ghost" href="<?= $phoneHref; ?>">Позвонить</a>
                    </div>

                    <div class="trust-row" aria-label="Данные доверия">
                        <span><b>4,7</b> рейтинг на Яндекс Картах</span>
                        <span><b>25</b> оценок</span>
                        <span><b>18</b> отзывов</span>
                        <span>Открыто до <b>23:00</b></span>
                    </div>
                </div>

                <aside class="hero-stage reveal" aria-label="Визуальный блок студии Вкругавто">
                    <div class="stage-frame">
                        <img class="hero-art" src="/assets/img/yandex-taxi-hero.jpg" width="1672" height="941" alt="Киношная фотография такси с желтой графикой в чистой студии оклейки" fetchpriority="high">
                        <div class="stage-badge stage-badge-rating">
                            <span>Яндекс</span>
                            <strong>4,7</strong>
                        </div>
                        <div class="stage-badge stage-badge-time">
                            <span>окно</span>
                            <strong>до 23:00</strong>
                        </div>
                    </div>

                    <div class="hero-proof">
                        <div class="proof-line">
                            <span>Оплата</span>
                            <strong>карта, наличные, QR, перевод</strong>
                        </div>
                        <div class="proof-line">
                            <span>Фокус</span>
                            <strong>такси, антигравийная пленка, автовинил</strong>
                        </div>
                        <div class="proof-line">
                            <span>Запись</span>
                            <strong>заранее или свободное окно на сегодня</strong>
                        </div>
                        <div class="proof-line">
                            <span>Дополнительно</span>
                            <strong>подарочный сертификат, акции и спецпредложения уточняйте при записи</strong>
                        </div>
                    </div>
                    <a class="map-mini" href="<?= htmlspecialchars($mapsUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Открыть карточку на Яндекс Картах</a>
                </aside>
            </div>
        </section>

        <section class="section section-tight" id="services">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Что можно сделать</p>
                    <h2>Услуги Вкругавто без лишней сервисной мишуры</h2>
                    <p>Задачи клиентов: оклейка авто Москва, брендирование такси Москва, антигравийная пленка Москва и точечная защита кузова — в одном месте и с понятным согласованием до старта.</p>
                </div>

                <div class="studio-note reveal">
                    <span>Студийный подход</span>
                    <p>Сначала задача и материал, потом аккуратная работа с краями, стыками и чистотой поверхности. Без обещаний “магии”, только понятный процесс.</p>
                </div>

                <div class="service-grid">
                    <?php foreach ($services as $index => $service): ?>
                        <article class="service-card reveal">
                            <span class="card-index"><?= sprintf('%02d', $index + 1); ?></span>
                            <span class="icon-shell" aria-hidden="true"><?= getIcon($service['icon']); ?></span>
                            <h3><?= htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p><?= htmlspecialchars($service['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section price-section" id="prices">
            <div class="container price-layout">
                <div class="section-head reveal">
                    <p class="eyebrow">Пакеты и цены</p>
                    <h2>Понятные цены на популярные услуги</h2>
                    <p>Итоговая стоимость зависит от задачи, состояния автомобиля и выбранного материала. Перед началом работ мастер согласует объём, цену и сроки.</p>
                    <a class="btn btn-primary" href="#lead">Уточнить стоимость под мой автомобиль</a>
                </div>

                <div class="price-list reveal" aria-label="Ориентировочные цены">
                    <?php foreach ($prices as $item): ?>
                        <div class="price-item">
                            <span><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <strong><?= htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8'); ?></strong>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section" id="benefits">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Почему выбирают</p>
                    <h2>Аккуратность, скорость и цена без сюрпризов</h2>
                </div>
                <div class="benefit-grid">
                    <article class="benefit-card reveal"><span>скорость</span><h3>Быстро принимают в работу</h3><p>Клиенты отмечают, что мастера могут принять без очереди и выполнить срочные задачи при наличии окна.</p></article>
                    <article class="benefit-card reveal"><span>чистота</span><h3>Аккуратная оклейка</h3><p>В отзывах часто хвалят качество пленки: без пыли, заломов и видимых дефектов.</p></article>
                    <article class="benefit-card reveal"><span>цена</span><h3>Без лишних накруток</h3><p>Стоимость обсуждается заранее, клиенты отмечают адекватные цены.</p></article>
                    <article class="benefit-card reveal"><span>контроль</span><h3>Гарантия и контроль</h3><p>Клиенты упоминают гарантию на работы и материал; в отзывах встречается и контрольный осмотр после выполнения.</p></article>
                    <article class="benefit-card reveal"><span>ожидание</span><h3>Комфортное ожидание</h3><p>Есть Wi-Fi, чай, кофе, приставка и место, где можно провести время, пока автомобиль в работе.</p></article>
                </div>
            </div>
        </section>

        <section class="section process-section" id="process">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Как проходит работа</p>
                    <h2>Пять шагов от заявки до приемки результата</h2>
                </div>
                <ol class="process-list">
                    <li class="reveal"><span>01</span><h3>Заявка или звонок</h3><p>Вы оставляете номер, выбираете услугу и удобное время.</p></li>
                    <li class="reveal"><span>02</span><h3>Быстрая консультация</h3><p>Мастер уточняет автомобиль, задачу, материал и желаемый срок.</p></li>
                    <li class="reveal"><span>03</span><h3>Согласование цены</h3><p>До начала работ понятны примерная стоимость и объем.</p></li>
                    <li class="reveal"><span>04</span><h3>Оклейка или тонировка</h3><p>Работа выполняется в чистом освещенном помещении.</p></li>
                    <li class="reveal"><span>05</span><h3>Приемка результата</h3><p>Вы проверяете внешний вид, края, стыки и качество выполнения.</p></li>
                </ol>
            </div>
        </section>

        <section class="section" id="segments">
            <div class="container segment-grid">
                <article class="segment-card reveal">
                    <span class="segment-number">01</span>
                    <h2>Владельцам такси</h2>
                    <p>Подготовка автомобиля под требования агрегатора, оклейка такси под ГОСТ и Яндекс БРЕНД оклейка.</p>
                </article>
                <article class="segment-card reveal">
                    <span class="segment-number">02</span>
                    <h2>Владельцам новых авто</h2>
                    <p>Основной запрос: оклейка зон риска сразу после покупки — капот, бампер, фары, зеркала и другие уязвимые места.</p>
                </article>
                <article class="segment-card reveal">
                    <span class="segment-number">03</span>
                    <h2>Для обновления внешнего вида</h2>
                    <p>Услуги: автовинил Москва, тонировка авто Москва, оклейка фар пленкой, частичная или полная оклейка.</p>
                </article>
            </div>
        </section>

        <section class="section review-section" id="reviews">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Отзывы</p>
                    <h2>Что клиенты отмечают на Яндекс Картах</h2>
                    <p>Короткие смысловые выжимки без длинных цитат: рейтинг 4,7, 25 оценок и 18 отзывов.</p>
                </div>
                <div class="review-grid">
                    <?php foreach ($reviews as $review): ?>
                        <article class="review-card reveal">
                            <div class="review-top">
                                <div class="stars" aria-label="Положительный отзыв">★★★★★</div>
                                <span class="review-score">4,7</span>
                            </div>
                            <p><?= htmlspecialchars($review, ENT_QUOTES, 'UTF-8'); ?></p>
                            <span>Отзыв клиента на Яндекс Картах</span>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section faq-section" id="faq">
            <div class="container faq-layout">
                <div class="section-head reveal">
                    <p class="eyebrow">FAQ</p>
                    <h2>Частые вопросы перед записью</h2>
                </div>
                <div class="faq-list reveal">
                    <?php foreach ($faq as $index => $item): ?>
                        <details class="faq-item" <?= $index === 0 ? 'open' : ''; ?>>
                            <summary><?= htmlspecialchars($item['q'], ENT_QUOTES, 'UTF-8'); ?></summary>
                            <p><?= htmlspecialchars($item['a'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section lead-section" id="lead">
            <div class="container lead-layout">
                <div class="lead-copy reveal">
                    <p class="eyebrow">Заявка</p>
                    <h2>Рассчитать стоимость оклейки под ваш автомобиль</h2>
                    <p>Оставьте заявку — мастер уточнит задачу, сориентирует по цене и подберет свободное время. Подходит для такси, новых автомобилей и частичной защиты кузова.</p>
                    <ul class="check-list">
                        <li>Согласуем стоимость до начала работ</li>
                        <li>Подберем услугу под задачу и автомобиль</li>
                        <li>Можно уточнить свободное окно на сегодня</li>
                    </ul>
                </div>

                <form class="lead-form reveal" id="leadForm" action="/api/lead.php" method="post" novalidate>
                    <input type="hidden" name="form_id" value="vkrugauto_lead">
                    <input type="hidden" name="source_page" value="index">
                    <div class="hp-field" aria-hidden="true">
                        <label for="website">Сайт</label>
                        <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="field-grid">
                        <label>Имя <span>*</span><input name="name" type="text" autocomplete="name" required maxlength="80" placeholder="Как к вам обращаться"></label>
                        <label>Телефон <span>*</span><input name="phone" type="tel" autocomplete="tel" required inputmode="tel" placeholder="+7 (___) ___-__-__"></label>
                    </div>
                    <label>Марка и модель автомобиля<input name="car" type="text" maxlength="120" placeholder="Например: Kia Rio, Toyota Camry"></label>
                    <label>Какая услуга нужна <span>*</span>
                        <select name="service" required>
                            <option value="">Выберите услугу</option>
                            <option>оклейка такси под ГОСТ</option>
                            <option>Яндекс БРЕНД</option>
                            <option>антигравийная пленка</option>
                            <option>автовинил</option>
                            <option>тонировка</option>
                            <option>оклейка фар</option>
                            <option>другое</option>
                        </select>
                    </label>
                    <label>Желаемая дата<input name="desired_date" type="date"></label>
                    <label>Комментарий<textarea name="comment" rows="4" maxlength="900" placeholder="Опишите задачу, цвет, материал или срочность"></textarea></label>

                    <label class="checkbox-line">
                        <input type="checkbox" name="personal_data_consent" value="1" required>
                        <span><a href="/consent.html" target="_blank">Даю согласие на обработку персональных данных</a> для обработки моей заявки и обратной связи.</span>
                    </label>
                    <label class="checkbox-line">
                        <input type="checkbox" name="privacy_policy_accept" value="1" required>
                        <span>Подтверждаю, что ознакомлен(а) с <a href="/privacy.html" target="_blank">Политикой обработки персональных данных</a>.</span>
                    </label>

                    <div class="form-status" id="formStatus" aria-live="polite"></div>
                    <button class="btn btn-primary btn-wide" type="submit">Отправить заявку</button>
                    <p class="form-note">Без двух согласий форма не отправится. Данные нужны только для связи по вашей заявке.</p>
                </form>
            </div>
        </section>

        <section class="section contacts-section" id="contacts" itemscope itemtype="https://schema.org/LocalBusiness">
            <div class="container contacts-layout">
                <div class="contacts-card reveal">
                    <p class="eyebrow">Контакты</p>
                    <h2 itemprop="name">Вкругавто</h2>
                    <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <span itemprop="addressLocality">Москва</span>,
                        <span itemprop="streetAddress">Салтыковская ул., 51, этаж 4</span>
                    </p>
                    <p><a itemprop="telephone" href="<?= $phoneHref; ?>"><?= $phoneDisplay; ?></a></p>
                    <p><meta itemprop="openingHours" content="Открыто до 23:00">Открыто до 23:00</p>
                    <div class="contact-actions">
                        <a class="btn btn-primary" href="<?= $phoneHref; ?>">Позвонить</a>
                        <a class="btn btn-secondary" href="<?= htmlspecialchars($mapsUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Построить маршрут</a>
                        <a class="btn btn-ghost" href="<?= htmlspecialchars($whatsappUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Написать в WhatsApp</a>
                        <a class="btn btn-ghost" href="#lead">Оставить заявку</a>
                    </div>
                </div>

                <div class="map-card reveal">
                    <iframe
                        src="<?= htmlspecialchars($mapEmbedUrl, ENT_QUOTES, 'UTF-8'); ?>"
                        title="Яндекс Карта: Вкругавто, Москва, Салтыковская улица, 51, этаж 4"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        allowfullscreen></iframe>
                    <noscript><a href="<?= htmlspecialchars($mapsUrl, ENT_QUOTES, 'UTF-8'); ?>">Открыть адрес на Яндекс Картах</a></noscript>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <p>© <?= $year; ?> Вкругавто. Направление: оклейка авто Салтыковская улица, Москва.</p>
            <div>
                <a href="/privacy.html">Политика обработки персональных данных</a>
                <a href="/consent.html">Согласие на обработку персональных данных</a>
            </div>
        </div>
    </footer>

    <div class="mobile-cta" aria-label="Быстрые действия">
        <a href="<?= $phoneHref; ?>">Позвонить</a>
        <a href="#lead">Заявка</a>
    </div>

    <script src="/assets/js/main.js" defer></script>
</body>
</html>
<?php
function getIcon(string $name): string
{
    $icons = [
        'taxi' => '<svg viewBox="0 0 24 24"><path d="M5 16h14l-1.5-5.5A2 2 0 0 0 15.6 9H8.4a2 2 0 0 0-1.9 1.5L5 16Z"/><path d="M7 16v2M17 16v2M9 7h6M10 5h4"/></svg>',
        'shield' => '<svg viewBox="0 0 24 24"><path d="M12 3 19 6v5c0 4.7-2.8 8.2-7 10-4.2-1.8-7-5.3-7-10V6l7-3Z"/><path d="M9 12l2 2 4-5"/></svg>',
        'wrap' => '<svg viewBox="0 0 24 24"><path d="M4 17c5-8 11-10 16-9"/><path d="M5 20c4-5 9-7 15-6"/><path d="M4 13h4M16 8h4"/></svg>',
        'glass' => '<svg viewBox="0 0 24 24"><path d="M4 6h16l-2 12H6L4 6Z"/><path d="M7 9h10M8 13h8"/></svg>',
        'light' => '<svg viewBox="0 0 24 24"><path d="M4 12c3-5 8-6 16-5v10c-8 1-13 0-16-5Z"/><path d="M16 9v6M20 10h2M20 14h2"/></svg>',
        'clock' => '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M12 8v5l3 2"/></svg>',
    ];

    return $icons[$name] ?? $icons['wrap'];
}
?>
