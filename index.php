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
    ['title' => 'Бронепленка и зоны риска', 'text' => 'Полиуретановая защита фар, капота, бампера, зеркал, порогов и погрузочных зон от сколов и притертостей.', 'icon' => 'shield'],
    ['title' => 'Тонировка стекол', 'text' => 'Задняя полусфера, передние стекла, полоса на лобовое и консультация по допустимым требованиям перед работой.', 'icon' => 'glass'],
    ['title' => 'Затемнение и бронь фар', 'text' => 'Защитная или тонировочная пленка для оптики: визуальное затемнение, броня поверхности и аккуратная кромка.', 'icon' => 'light'],
    ['title' => 'Полировка кузова', 'text' => 'Локальная, экспресс, восстановительная и абразивная полировка после осмотра ЛКП и подбора безопасного сценария.', 'icon' => 'polish'],
    ['title' => 'Шумоизоляция салона', 'text' => 'Двери, потолок, арки, багажник или комплексная шумоизоляция с подбором материалов под задачу и бюджет.', 'icon' => 'sound'],
    ['title' => 'Перетяжка потолков', 'text' => 'Обновление потолка, стоек и козырьков тканью, экокожей или алькантарой после консультации по материалу.', 'icon' => 'roof'],
];

$priceGroups = [
    [
        'title' => 'Бронепленка',
        'note' => 'Полиуретановая пленка, зоны риска и локальная защита.',
        'items' => [
            ['name' => 'Фары или ПТФ', 'price' => 'от 6 500 ₽'],
            ['name' => 'Капот / крупная деталь', 'price' => 'от 20 000 ₽'],
            ['name' => 'Передний комплекс зон риска', 'price' => 'от 35 000 ₽'],
            ['name' => 'Полный кузов', 'price' => 'от 180 000 ₽'],
        ],
    ],
    [
        'title' => 'Тонировка',
        'note' => 'Зоны стекол и пленка подбираются после консультации.',
        'items' => [
            ['name' => 'Передние стекла', 'price' => 'от 1 500 ₽'],
            ['name' => 'Задняя полусфера', 'price' => 'от 5 000 ₽'],
            ['name' => 'Лобовое / полоса', 'price' => 'от 2 000 ₽'],
        ],
    ],
    [
        'title' => 'Фары',
        'note' => 'Защита, затемнение и визуальное обновление оптики.',
        'items' => [
            ['name' => 'Бронирование фар', 'price' => 'от 6 500 ₽'],
            ['name' => 'Затемнение фар пленкой', 'price' => 'от 4 900 ₽'],
            ['name' => 'Полировка фар', 'price' => 'от 1 000 ₽'],
        ],
    ],
    [
        'title' => 'Полировка',
        'note' => 'Финальный сценарий зависит от состояния лака.',
        'items' => [
            ['name' => 'Локальная деталь', 'price' => 'от 2 500 ₽'],
            ['name' => 'Экспресс-полировка кузова', 'price' => 'от 5 000 ₽'],
            ['name' => 'Восстановительная полировка', 'price' => 'от 9 000 ₽'],
            ['name' => 'Абразивная полировка', 'price' => 'от 12 000 ₽'],
        ],
    ],
    [
        'title' => 'Шумоизоляция',
        'note' => 'Частичные зоны или комплекс по классу автомобиля.',
        'items' => [
            ['name' => 'Двери', 'price' => 'от 4 900 ₽'],
            ['name' => 'Потолок', 'price' => 'от 5 900 ₽'],
            ['name' => 'Комплекс салона', 'price' => 'от 24 000 ₽'],
        ],
    ],
    [
        'title' => 'Потолки',
        'note' => 'Демонтаж, материал и сложность формы влияют на срок.',
        'items' => [
            ['name' => 'Перетяжка потолка тканью', 'price' => 'от 10 000 ₽'],
            ['name' => 'Потолок + стойки / козырьки', 'price' => 'от 18 000 ₽'],
            ['name' => 'Алькантара / сложный материал', 'price' => 'по оценке'],
        ],
    ],
];

$reviews = [
    'Оклеили зоны риска и затонировали авто: клиенты отмечают результат без пыли и заломов.',
    'Срочно нужно было оклеить бампер: приняли при свободном окне и сделали в день обращения.',
    'В отзывах часто выделяют хорошее отношение, гарантию и отсутствие лишних накруток.',
    'Автомобиль оклеили аккуратно, с вниманием к краям, стыкам и подворотам.',
    'Клиенты отмечают, что мастера принимают быстро и работают без затягивания сроков.',
    'Можно подождать на месте: есть Wi-Fi, чай, кофе, приставка и комфортная зона ожидания.',
];

$works = [
    [
        'file' => 'work-01.jpg',
        'title' => 'Шумоизоляция потолка',
        'text' => 'Проклейка потолочной зоны перед сборкой салона.',
        'alt' => 'Красный материал шумоизоляции на потолке автомобиля в процессе работы',
        'width' => 1350,
        'height' => 1800,
    ],
    [
        'file' => 'work-02.jpg',
        'title' => 'Черный потолок салона',
        'text' => 'Темная фактура потолка после аккуратной работы с интерьером.',
        'alt' => 'Черный потолок автомобиля в салоне после работы с интерьером',
        'width' => 1350,
        'height' => 1800,
    ],
    [
        'file' => 'work-03.jpg',
        'title' => 'Звездная подсветка',
        'text' => 'Интерьер с декоративной потолочной подсветкой.',
        'alt' => 'Автомобильный салон со звездной потолочной подсветкой',
        'width' => 1350,
        'height' => 1800,
    ],
    [
        'file' => 'work-04.jpg',
        'title' => 'Детали потолка и стоек',
        'text' => 'Подготовленные элементы интерьера перед установкой.',
        'alt' => 'Черные элементы потолка и стоек автомобиля перед установкой',
        'width' => 1350,
        'height' => 1800,
    ],
    [
        'file' => 'work-05.jpg',
        'title' => 'Панорамный потолок',
        'text' => 'Салон с панорамной зоной и аккуратной световой графикой.',
        'alt' => 'Салон автомобиля с панорамным потолком и световой графикой',
        'width' => 806,
        'height' => 1800,
    ],
    [
        'file' => 'work-06.jpg',
        'title' => 'Потолочная панель',
        'text' => 'Черная потолочная панель со звездной подсветкой.',
        'alt' => 'Черная потолочная панель автомобиля со звездной подсветкой',
        'width' => 1350,
        'height' => 1800,
    ],
];

$faq = [
    ['q' => 'Можно ли рассчитать стоимость по телефону?', 'a' => 'Да, для предварительной оценки нужно указать автомобиль, услугу, зоны работ и желаемый материал. Точную стоимость мастер согласует после фото или осмотра.'],
    ['q' => 'Сколько занимает бронепленка или тонировка?', 'a' => 'Небольшие зоны могут занимать меньше времени, комплексная защита или перетяжка потолка требуют больше подготовки. Срок зависит от объема, материала и необходимости демонтажа.'],
    ['q' => 'Передние стекла и лобовое можно тонировать?', 'a' => 'Такие работы обсуждаются отдельно и выполняются только после консультации по допустимым требованиям. Мастер подскажет безопасный вариант под вашу задачу.'],
    ['q' => 'Можно ли приехать без записи?', 'a' => 'Лучше записаться заранее, но при наличии свободного окна мастера могут принять срочно. Перед приездом стоит позвонить или написать.'],
    ['q' => 'Есть ли гарантия?', 'a' => 'В отзывах клиенты отмечают гарантию на работы и материал. Конкретные условия зависят от услуги и материала, их лучше уточнить у мастера при записи.'],
    ['q' => 'Можно ли оплатить картой?', 'a' => 'Да, доступны карта, наличные, QR-код и банковский перевод.'],
    ['q' => 'Делаете шумоизоляцию и перетяжку потолка?', 'a' => 'Да, можно обсудить шумоизоляцию дверей, потолка, арок, багажника, а также перетяжку потолка и отдельных элементов салона.'],
];

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    '@id' => $canonicalUrl . '#business',
    'additionalType' => 'https://schema.org/AutomotiveBusiness',
    'name' => 'Вкругавто',
    'url' => $canonicalUrl,
    'image' => $siteUrl . '/assets/img/works/work-05.jpg',
    'telephone' => '+79855560320',
    'description' => 'Бронепленка, тонировка, затемнение фар, полировка, шумоизоляция и перетяжка потолков в Москве.',
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
        'name' => 'Детейлинг, защита и интерьерные работы',
        'itemListElement' => [
            ['@type' => 'Offer', 'name' => 'Бронирование фар пленкой', 'price' => '6500', 'priceCurrency' => 'RUB'],
            ['@type' => 'Offer', 'name' => 'Тонировка задней полусферы', 'price' => '5000', 'priceCurrency' => 'RUB'],
            ['@type' => 'Offer', 'name' => 'Восстановительная полировка кузова', 'price' => '9000', 'priceCurrency' => 'RUB'],
            ['@type' => 'Offer', 'name' => 'Шумоизоляция потолка', 'price' => '5900', 'priceCurrency' => 'RUB'],
        ],
    ],
];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вкругавто — бронепленка, тонировка, полировка и шумоизоляция авто в Москве</title>
    <meta name="description" content="Бронепленка, тонировка, затемнение фар, полировка кузова, шумоизоляция и перетяжка потолков в Москве. Вкругавто: рейтинг 4,7, запись, оплата картой, Салтыковская ул., 51.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="Вкругавто — бронепленка, тонировка и детейлинг авто в Москве">
    <meta property="og:description" content="Бронепленка, тонировка, затемнение фар, полировка, шумоизоляция и перетяжка потолков. Рейтинг 4,7 на Яндекс Картах.">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?= htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>/assets/img/works/work-05.jpg">
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
                    <small>броня, тон, интерьер</small>
                </span>
            </a>

            <nav class="desktop-nav" aria-label="Основная навигация">
                <a href="#services">Услуги</a>
                <a href="#works">Работы</a>
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
            <a href="#works">Работы</a>
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
                    <h1>Бронепленка, тонировка, полировка и шумоизоляция авто в Москве</h1>
                    <p class="hero-text">Вкругавто — защитная бронепленка, тонировка, затемнение фар, полировка кузова, шумоизоляция и перетяжка потолков. Работаем по записи, согласуем стоимость до начала работ и подбираем материал под задачу, а не “по шаблону”.</p>

                    <div class="hero-actions" aria-label="Основные действия">
                        <a class="btn btn-primary" href="#lead">Рассчитать стоимость</a>
                        <a class="btn btn-secondary" href="#works">Смотреть работы</a>
                        <a class="btn btn-ghost" href="<?= $phoneHref; ?>">Позвонить</a>
                    </div>

                    <div class="trust-row" aria-label="Данные доверия">
                        <span><b>4,7</b> рейтинг на Яндекс Картах</span>
                        <span><b>25</b> оценок</span>
                        <span><b>18</b> отзывов</span>
                        <span>Открыто до <b>23:00</b></span>
                    </div>
                </div>

                <aside class="hero-stage reveal" aria-label="Визуальный блок работ Вкругавто">
                    <div class="stage-frame">
                        <img class="hero-art" src="/assets/img/works/work-05.jpg" width="806" height="1800" alt="Салон автомобиля с панорамным потолком и световой графикой после интерьерной работы" fetchpriority="high">
                        <div class="stage-badge stage-badge-rating">
                            <span>фокус</span>
                            <strong>PPF</strong>
                        </div>
                        <div class="stage-badge stage-badge-time">
                            <span>интерьер</span>
                            <strong>потолки</strong>
                        </div>
                    </div>

                    <div class="hero-proof">
                        <div class="proof-line">
                            <span>Защита</span>
                            <strong>бронепленка, зоны риска, фары</strong>
                        </div>
                        <div class="proof-line">
                            <span>Внешний вид</span>
                            <strong>тонировка, затемнение фар, полировка</strong>
                        </div>
                        <div class="proof-line">
                            <span>Комфорт</span>
                            <strong>шумоизоляция и перетяжка потолков</strong>
                        </div>
                        <div class="proof-line">
                            <span>Расчет</span>
                            <strong>цена и срок согласуются до начала работ</strong>
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
                    <h2>Защита кузова, стекла, оптика и интерьер в одном сценарии</h2>
                    <p>Основные направления: бронепленка Москва, тонировка авто Москва, затемнение фар пленкой, полировка кузова, шумоизоляция авто и перетяжка потолка автомобиля.</p>
                </div>

                <div class="studio-note reveal">
                    <span>Студийный подход</span>
                    <p>Сначала осмотр, материал и зона работ, потом аккуратная подготовка поверхности, демонтаж при необходимости и приемка результата. Без обещаний “самого дешевого”, зато с понятной логикой цены.</p>
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

        <section class="section works-section" id="works">
            <div class="container works-layout">
                <div class="section-head works-head reveal">
                    <p class="eyebrow">Примеры работ</p>
                    <h2>Реальные фотографии деталей и интерьера</h2>
                    <p>Добавили только предоставленные фотографии: шумоизоляция, элементы потолка, черная отделка и декоративная потолочная подсветка. Фото можно открыть крупнее и рассмотреть детали.</p>
                </div>

                <div class="works-grid" aria-label="Галерея примеров работ">
                    <?php foreach ($works as $index => $work): ?>
                        <?php $imagePath = '/assets/img/works/' . $work['file']; ?>
                        <button
                            class="work-card reveal"
                            type="button"
                            data-lightbox-index="<?= $index; ?>"
                            data-lightbox-src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8'); ?>"
                            data-lightbox-title="<?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8'); ?>"
                            data-lightbox-alt="<?= htmlspecialchars($work['alt'], ENT_QUOTES, 'UTF-8'); ?>">
                            <img
                                src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8'); ?>"
                                width="<?= (int) $work['width']; ?>"
                                height="<?= (int) $work['height']; ?>"
                                alt="<?= htmlspecialchars($work['alt'], ENT_QUOTES, 'UTF-8'); ?>"
                                loading="lazy">
                            <span class="work-card-meta">
                                <strong><?= htmlspecialchars($work['title'], ENT_QUOTES, 'UTF-8'); ?></strong>
                                <small><?= htmlspecialchars($work['text'], ENT_QUOTES, 'UTF-8'); ?></small>
                            </span>
                            <span class="work-card-action" aria-hidden="true">Открыть крупнее</span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section price-section" id="prices">
            <div class="container price-layout">
                <div class="section-head reveal">
                    <p class="eyebrow">Пакеты и цены</p>
                    <h2>Стартовые цены по новым направлениям</h2>
                    <p>Это ориентиры по рынку и типовым сегментам. Итог зависит от класса автомобиля, состояния поверхности, выбранной пленки или материала, демонтажа и объема работ.</p>
                    <a class="btn btn-primary" href="#lead">Уточнить стоимость под мой автомобиль</a>
                </div>

                <div class="price-board reveal" aria-label="Ориентировочные цены по услугам">
                    <?php foreach ($priceGroups as $group): ?>
                        <article class="price-pack">
                            <div class="price-pack-head">
                                <h3><?= htmlspecialchars($group['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p><?= htmlspecialchars($group['note'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                            <ul>
                                <?php foreach ($group['items'] as $item): ?>
                                    <li>
                                        <span><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                                        <strong><?= htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8'); ?></strong>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section" id="benefits">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Почему выбирают</p>
                    <h2>Не просто наклеить пленку, а подобрать правильный объем</h2>
                </div>
                <div class="benefit-grid">
                    <article class="benefit-card reveal"><span>диагностика</span><h3>Сначала осмотр и задача</h3><p>Для бронепленки, полировки и интерьера важно понять состояние поверхности, материал и реальный объем демонтажа.</p></article>
                    <article class="benefit-card reveal"><span>аккуратность</span><h3>Работа с кромками и чистотой</h3><p>Клиенты отмечают аккуратную оклейку без пыли, заломов и видимых дефектов на пленке.</p></article>
                    <article class="benefit-card reveal"><span>цена</span><h3>Стоимость до старта</h3><p>Цену, сроки и материалы согласуют заранее: без внезапной допродажи в момент выдачи автомобиля.</p></article>
                    <article class="benefit-card reveal"><span>материал</span><h3>Подбор под сценарий</h3><p>Для фар, стекол, кузова, потолка и шумоизоляции используются разные материалы — мастер объясняет разницу до работы.</p></article>
                    <article class="benefit-card reveal"><span>комфорт</span><h3>Можно подождать на месте</h3><p>Есть Wi-Fi, чай, кофе, приставка и место, где можно провести время, пока автомобиль в работе.</p></article>
                </div>
            </div>
        </section>

        <section class="section process-section" id="process">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Как проходит работа</p>
                    <h2>Пять шагов без лишней неопределенности</h2>
                </div>
                <ol class="process-list">
                    <li class="reveal"><span>01</span><h3>Заявка или звонок</h3><p>Вы выбираете услугу: бронепленка, тонировка, фары, полировка, шумоизоляция или потолок.</p></li>
                    <li class="reveal"><span>02</span><h3>Фото или осмотр</h3><p>Мастер уточняет модель, состояние, зоны работ, желаемый материал и срочность.</p></li>
                    <li class="reveal"><span>03</span><h3>Расчет объема</h3><p>До начала работ согласуются ориентир по цене, сроку и список деталей.</p></li>
                    <li class="reveal"><span>04</span><h3>Подготовка и работа</h3><p>Поверхность очищается, при необходимости выполняется демонтаж, затем идет монтаж пленки, полировка или интерьерная работа.</p></li>
                    <li class="reveal"><span>05</span><h3>Приемка результата</h3><p>Вы проверяете внешний вид, края, стыки, свет, салон и качество выполнения.</p></li>
                </ol>
            </div>
        </section>

        <section class="section" id="segments">
            <div class="container segment-grid">
                <article class="segment-card reveal">
                    <span class="segment-number">01</span>
                    <h2>Новые и свежие авто</h2>
                    <p>Бронепленка на зоны риска, фары, капот, бампер, пороги и погрузочные зоны, чтобы сохранить внешний вид с первых месяцев.</p>
                </article>
                <article class="segment-card reveal">
                    <span class="segment-number">02</span>
                    <h2>Тем, кто хочет обновить вид</h2>
                    <p>Тонировка авто, затемнение фар, полировка кузова и аккуратное восстановление блеска без агрессивных обещаний.</p>
                </article>
                <article class="segment-card reveal">
                    <span class="segment-number">03</span>
                    <h2>Для комфорта в салоне</h2>
                    <p>Шумоизоляция дверей, потолка, арок, багажника и перетяжка потолка для более тихого и собранного интерьера.</p>
                </article>
            </div>
        </section>

        <section class="section review-section" id="reviews">
            <div class="container">
                <div class="section-head reveal">
                    <p class="eyebrow">Отзывы</p>
                    <h2>Что клиенты отмечают на Яндекс Картах</h2>
                    <p>Короткие смысловые выжимки без длинных цитат: рейтинг 4,7, 25 оценок и 18 отзывов. Главные мотивы — аккуратность, скорость, отношение и понятная цена.</p>
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
                    <h2>Рассчитать стоимость под ваш автомобиль</h2>
                    <p>Оставьте заявку — мастер уточнит задачу, материал, зоны работ и сориентирует по цене. Подходит для защиты кузова, тонировки, фар, полировки и интерьерных задач.</p>
                    <ul class="check-list">
                        <li>Согласуем стоимость до начала работ</li>
                        <li>Подберем услугу под задачу и автомобиль</li>
                        <li>Можно отправить фото для предварительной оценки</li>
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
                            <option>бронепленка / зоны риска</option>
                            <option>тонировка стекол</option>
                            <option>затемнение или бронь фар</option>
                            <option>полировка кузова</option>
                            <option>шумоизоляция</option>
                            <option>перетяжка потолка</option>
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

    <div class="lightbox" data-lightbox aria-hidden="true" role="dialog" aria-modal="true" aria-label="Увеличенный просмотр фотографии">
        <button class="lightbox-backdrop" type="button" data-lightbox-close aria-label="Закрыть просмотр"></button>
        <div class="lightbox-panel" role="document">
            <button class="lightbox-close" type="button" data-lightbox-close aria-label="Закрыть просмотр">
                <span aria-hidden="true"></span>
            </button>
            <button class="lightbox-nav lightbox-prev" type="button" data-lightbox-prev aria-label="Предыдущее фото">
                <svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path d="m15 5-7 7 7 7" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <figure>
                <img src="" alt="" data-lightbox-image>
                <figcaption data-lightbox-caption></figcaption>
            </figure>
            <button class="lightbox-nav lightbox-next" type="button" data-lightbox-next aria-label="Следующее фото">
                <svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path d="m9 5 7 7-7 7" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </div>
    </div>

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
        'polish' => '<svg viewBox="0 0 24 24"><path d="M7 16c3 3 7 3 10 0"/><path d="M8 6h8l2 5H6L8 6Z"/><path d="M4 20c4-2 12-2 16 0"/><path d="M12 3v2"/></svg>',
        'sound' => '<svg viewBox="0 0 24 24"><path d="M5 10v4h4l5 4V6l-5 4H5Z"/><path d="M17 9c1 1 1 5 0 6"/><path d="M20 7c2 3 2 7 0 10"/></svg>',
        'roof' => '<svg viewBox="0 0 24 24"><path d="M4 15c4-6 12-6 16 0"/><path d="M6 16h12"/><path d="M8 18h8"/><path d="M10 6h4l2 4H8l2-4Z"/></svg>',
        'clock' => '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M12 8v5l3 2"/></svg>',
    ];

    return $icons[$name] ?? $icons['wrap'];
}
?>
