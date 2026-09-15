<?php
date_default_timezone_set('Asia/Yekaterinburg');
$hour = (int) date('H');
$theme = ($hour >= 8 && $hour < 20) ? 'light' : 'dark';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меридиан Чая</title>
    <link rel="stylesheet" href="comp/css/style.css">
</head>
<body class="theme-<?= $theme ?>">
    <header>
        <div class="header-inner">
            <a href="index.html" class="logo">☉ Меридиан Чая</a>
            <nav>
                <a href="tea.html">Чай</a>
                <a href="promo.html">Акции</a>
                <a href="about.html">О нас</a>
                <a href="auth.html">Войти</a>
                <a href="cart.html">Корзина</a>
            </nav>
        </div>
    </header>
    <section class="hero">
        <p class="hero-slogan">Красота в каждом глотке</p>
        <h1 class="hero-question">Откуда начнётся ваше утро?</h1>
        <div class="hero-buttons">
            <a href="tea.html" class="coord-btn japan"><span class="coord-icon">🇯</span><span class="coord-name">Япония</span><span class="coord-sub">35.6762° N, 139.6503° E</span></a>
            <a href="tea.html" class="coord-btn china"><span class="coord-icon">🇨</span><span class="coord-name">Китай</span><span class="coord-sub">30.5728° N, 104.0668° E</span></a>
            <a href="tea.html" class="coord-btn world"><span class="coord-icon">🌍</span><span class="coord-name">Мир</span><span class="coord-sub">27.7172° N, 85.3240° E</span></a>
        </div>
    </section>
        <!-- PROMO BANNER -->
    <section class="promo-banner-section">
        <a href="promo.html" class="promo-banner promo-highlight">
            <div class="promo-banner-image">
                <img src="comp/img/tchaenok.png" alt="Весенняя распродажа">
                <div class="promo-badge pulse-badge">-15%</div>
            </div>
            <div class="promo-banner-content">
                <span class="promo-tag">🔥 Только до конца мая</span>
                <h3 class="promo-banner-title">Весенняя распродажа 2026</h3>
                <p class="promo-banner-desc">Скидка 15% на весь ассортимент чая. Успейте обновить свою коллекцию!</p>
                <div class="coupon-box">
                    <span class="coupon-text">Ваш промокод:</span>
                    <span class="coupon-code">TEA2026</span>
                </div>
                
                <span class="promo-banner-link">Получить скидку →</span>
            </div>
        </a>
    </section>
    <section id="geography">
        <div class="section-header"><p class="section-label">Навигация по странам</p><h2 class="section-title">География Свежести</h2><div class="section-divider"></div></div>
        <div class="map-regions">
            <div class="map-region region-japan">
                <div class="region-flag">🇯</div><h3 class="region-name">Япония</h3><p class="region-accent">Акцент на Умами</p>
                <p class="region-desc">Эстетика строгости и чистоты. Точность в каждой детали: от тени над кустами до звука венчика в чаше.</p>
                <div class="region-teas"><span class="tea-tag">Сенча</span><span class="tea-tag">Матча</span><span class="tea-tag">Гёкуро</span></div>
            </div>
            <div class="map-region region-china">
                <div class="region-flag">🇨</div><h3 class="region-name">Китай</h3><p class="region-accent">Многообразие форм и оттенков</p>
                <p class="region-desc">Эстетика традиций и глубины. Каждый лист хранит историю, от нежных почек до обжарки в воке.</p>
                <div class="region-teas"><span class="tea-tag">Лунцзин</span><span class="tea-tag">Билочунь</span><span class="tea-tag">Те Гуань Инь</span></div>
            </div>
            <div class="map-region region-world">
                <div class="region-flag">🌍</div><h3 class="region-name">Мир</h3><p class="region-accent">Эстетика открытий</p>
                <p class="region-desc">Редкие сорта высокогорий Непала, Грузии и Тайваня. Путешествие туда, где облака касаются плантаций.</p>
                <div class="region-teas"><span class="tea-tag">Непал</span><span class="tea-tag">Грузия</span><span class="tea-tag">Тайвань</span></div>
            </div>
        </div>
    </section>
    <section id="rituals">
        <div class="section-header"><p class="section-label">Обучение и Посуда</p><h2 class="section-title">Зал Ритуалов</h2><div class="section-divider"></div></div>
        <div class="rituals-grid">
            <div class="ritual-card ritual-pinch">
                <div class="ritual-header">🫖</div>
                <div class="ritual-content"><p class="ritual-origin">Китай · 中国</p><h3 class="ritual-title">Ритуал Пин Ча</h3><p class="ritual-desc">Многократные проливы раскрывают чай слой за слоем. Маленькие пиалы и гайвани для тех, кто превращает чаепитие в диалог.</p><div class="ritual-for"><strong>Для тех, кто любит</strong> процесс и беседу</div></div>
            </div>
            <div class="ritual-card ritual-matcha">
                <div class="ritual-header">🍵</div>
                <div class="ritual-content"><p class="ritual-origin">Япония · 日本</p><h3 class="ritual-title">Путь Матча</h3><p class="ritual-desc">Медитация в каждом взмахе венчика. Тишина говорит громче слов, а изумрудная пена — отражение гармонии.</p><div class="ritual-for"><strong>Для медитации</strong> и бодрости</div></div>
            </div>
            <div class="ritual-card ritual-cold">
                <div class="ritual-header">🧊</div>
                <div class="ritual-content"><p class="ritual-origin">Cold Brew · コールドブリュー</p><h3 class="ritual-title">Холодное настаивание</h3><p class="ritual-desc">Прохладная вода бережно извлекает сладость. Стильный способ наслаждаться чаем в ритме города.</p><div class="ritual-for"><strong>Для современного ритма</strong> и свежести</div></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-inner">
            <div class="footer-col"><h4>Меридиан Чая</h4><p>Красота в каждом глотке. Мост между высокогорными плантациями и вашим утренним столом.</p></div>
            <div class="footer-col"><h4>Каталог</h4><a href="tea.html">Все сорта</a><a href="promo.html">Акции</a><a href="about.html">О нас</a></div>
            <div class="footer-col"><h4>Аккаунт</h4><a href="auth.html">Вход / Регистрация</a><a href="cart.html">Корзина</a><a href="#">Заказы</a></div>
            <div class="footer-col"><h4>Контакты</h4><a href="#">info@meridiantea.ru</a><a href="#">+7 (495) 123-45-67</a><a href="#">Москва, Чайная ул., 12</a></div>
        </div>
        <div class="footer-bottom">© 2026 Меридиан Чая. Все права защищены.</div>
    </footer>
</body>
</html>