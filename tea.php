<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="comp/css/style.css">
</head>
<body>
    <input type="radio" name="filter" id="f-all" class="hide-input" checked>
    <input type="radio" name="filter" id="f-jp" class="hide-input">
    <input type="radio" name="filter" id="f-cn" class="hide-input">
    <input type="radio" name="filter" id="f-wd" class="hide-input">

    <header><div class="header-inner"><a href="index.html" class="logo">☉ Меридиан Чая</a><nav><a href="tea.html">Чай</a><a href="promo.html">Акции</a><a href="about.html">О нас</a><a href="auth.html">Войти</a><a href="cart.html">Корзина</a></nav></div></header>

    <section class="page-hero">
        <div class="section-header"><p class="section-label">Коллекция</p><h1 class="section-title">Чай по регионам</h1><div class="section-divider"></div></div>
        <div class="filter-controls">
            <label for="f-all" class="filter-label lbl-all">Все</label>
            <label for="f-jp" class="filter-label lbl-jp">Япония</label>
            <label for="f-cn" class="filter-label lbl-cn">Китай</label>
            <label for="f-wd" class="filter-label lbl-wd">Мир</label>
        </div>
    </section>

    <div class="products-grid">
        <a href="product.html#sencha" class="product jp">
            <div class="product-card">
                <div class="product-img"><img src="comp/img/sencha.png" alt="Сенча"></div>
                <div class="product-info"><p class="product-tag">Япония · Сенча</p><h3 class="product-name">Сенча «Сакурадзима»</h3><p class="product-desc">Свежий травяной вкус с нотами шпината.</p><div class="product-footer"><span class="product-price">1 800 ₽</span><span class="btn-buy">Купить</span></div></div>
            </div>
        </a>
        <a href="product.html#longjing" class="product cn">
            <div class="product-card">
                <div class="product-img"><img src="comp/img/longjing.png" alt="Лунцзин"></div>
                <div class="product-info"><p class="product-tag">Китай · Лунцзин</p><h3 class="product-name">Лунцзин «Колодец Дракона»</h3><p class="product-desc">Орехово-карамельный профиль, весенний сбор.</p><div class="product-footer"><span class="product-price">3 400 ₽</span><span class="btn-buy">Купить</span></div></div>
            </div>
        </a>
        <a href="product.html#matcha" class="product jp">
            <div class="product-card">
                <div class="product-img"><img src="comp/img/matcha.png" alt="Матча"></div>
                <div class="product-info"><p class="product-tag">Япония · Матча</p><h3 class="product-name">Матча «Церемониальная»</h3><p class="product-desc">Каменный помол, яркий изумрудный цвет.</p><div class="product-footer"><span class="product-price">2 900 ₽</span><span class="btn-buy">Купить</span></div></div>
            </div>
        </a>
        <a href="product.html#oolong" class="product wd">
            <div class="product-card">
                <div class="product-img"><img src="comp/img/oolong.png" alt="Улун"></div>
                <div class="product-info"><p class="product-tag">Непал · Улун</p><h3 class="product-name">Канченджанга Oolong</h3><p class="product-desc">Высокогорный улун с цветочным ароматом.</p><div class="product-footer"><span class="product-price">2 600 ₽</span><span class="btn-buy">Купить</span></div></div>
            </div>
        </a>
    </div>

    <footer>
        <div class="footer-inner">
            <div class="footer-col"><h4>Меридиан Чая</h4><p>Красота в каждом глотке.</p></div>
            <div class="footer-col"><h4>Каталог</h4><a href="tea.html">Все сорта</a><a href="promo.html">Акции</a><a href="about.html">О нас</a></div>
            <div class="footer-col"><h4>Аккаунт</h4><a href="auth.html">Вход</a><a href="cart.html">Корзина</a></div>
            <div class="footer-col"><h4>Контакты</h4><a href="#">info@meridiantea.ru</a><a href="#">+7 (495) 123-45-67</a></div>
        </div>
        <div class="footer-bottom">© 2026 Меридиан Чая.</div>
    </footer>
</body>
</html>