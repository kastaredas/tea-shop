<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чай</title>
    <link rel="stylesheet" href="comp/css/style.css">
</head>
<body>
    <div id="sencha"></div>
    <div id="longjing"></div>
    <div id="matcha"></div>
    
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

    <div class="main-content">
        <div class="product-wrapper">
            <div class="default-msg">
                <h2>Выберите чай из каталога</h2>
                <p>Нажмите на карточку товара, чтобы узнать детали, параметры заваривания и оформить покупку.</p>
                <a href="tea.html" class="btn-back">← Вернуться в каталог</a>
            </div>
            <div class="view-sencha view-product">
                <div class="product-layout">
                    <div class="product-hero"><img src="comp/img/sencha.png" alt="Сенча"></div>
                    <div class="product-info">
                        <p class="product-tag">Япония · Сенча</p>
                        <h1>Сенча «Сакурадзима»</h1>
                        <div class="product-price">1 800 ₽ <span style="font-size:0.9rem;font-weight:400;color:var(--text-light)">/ 50 г</span></div>
                        <p class="product-desc">Классический японский зелёный чай с ярким травяным ароматом, нотами шпината и сладким послевкусием.</p>
                        <ul class="specs">
                            <li><span>Тип листа</span><span>Цельный, средний</span></li>
                            <li><span>Урожай</span><span>Итибанча</span></li>
                            <li><span>Обработка</span><span>Пропаривание</span></li>
                            <li><span>Вкус</span><span>Умами, травяной</span></li>
                        </ul>
                        <div class="brewing">
                            <h3>Как заваривать</h3>
                            <div class="brew-steps">
                                <div class="brew-step"><strong>70°C</strong><span>Температура</span></div>
                                <div class="brew-step"><strong>3 г</strong><span>На 150 мл</span></div>
                                <div class="brew-step"><strong>45 сек</strong><span>Первый пролив</span></div>
                            </div>
                        </div>
                        <div class="buy-actions">
                            <a href="cart.html#add-sencha" class="btn btn-buy">Добавить в корзину</a>
                            <a href="tea.html" class="btn-back">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-longjing view-product">
                <div class="product-layout">
                    <div class="product-hero"><img src="comp/img/longjing.png" alt="Лунцзин"></div>
                    <div class="product-info">
                        <p class="product-tag">Китай · Лунцзин</p>
                        <h1>Лунцзин «Колодец Дракона»</h1>
                        <div class="product-price">3 400 ₽ <span style="font-size:0.9rem;font-weight:400;color:var(--text-light)">/ 30 г</span></div>
                        <p class="product-desc">Элитный зелёный чай из Ханчжоу. Плоский лист, орехово-карамельный профиль.</p>
                        <ul class="specs">
                            <li><span>Тип листа</span><span>Плоский</span></li>
                            <li><span>Урожай</span><span>Цинмин</span></li>
                            <li><span>Обработка</span><span>Обжарка в воке</span></li>
                            <li><span>Вкус</span><span>Ореховый, глубокий</span></li>
                        </ul>
                        <div class="brewing">
                            <h3>Как заваривать</h3>
                            <div class="brew-steps">
                                <div class="brew-step"><strong>80°C</strong><span>Температура</span></div>
                                <div class="brew-step"><strong>4 г</strong><span>На 120 мл</span></div>
                                <div class="brew-step"><strong>30 сек</strong><span>Проливы (до 5)</span></div>
                            </div>
                        </div>
                        <div class="buy-actions">
                            <a href="cart.html#add-longjing" class="btn btn-buy">Добавить в корзину</a>
                            <a href="tea.html" class="btn-back">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-matcha view-product">
                <div class="product-layout">
                    <div class="product-hero"><img src="comp/img/matcha.png" alt="Матча"></div>
                    <div class="product-info">
                        <p class="product-tag">Япония · Матча</p>
                        <h1>Матча «Церемониальная Удзи»</h1>
                        <div class="product-price">2 900 ₽ <span style="font-size:0.9rem;font-weight:400;color:var(--text-light)">/ 30 г</span></div>
                        <p class="product-desc">Каменный помол тенча. Яркий изумрудный цвет, насыщенный умами.</p>
                        <ul class="specs">
                            <li><span>Тип листа</span><span>Порошок</span></li>
                            <li><span>Урожай</span><span>Тэнмацу</span></li>
                            <li><span>Обработка</span><span>Каменный помол</span></li>
                            <li><span>Вкус</span><span>Умами, кремовый</span></li>
                        </ul>
                        <div class="brewing">
                            <h3>Как заваривать</h3>
                            <div class="brew-steps">
                                <div class="brew-step"><strong>80°C</strong><span>Температура</span></div>
                                <div class="brew-step"><strong>2 г</strong><span>На 70 мл</span></div>
                                <div class="brew-step"><strong>Взбивать</strong><span>До пены (тясэн)</span></div>
                            </div>
                        </div>
                        <div class="buy-actions">
                            <a href="cart.html#add-matcha" class="btn btn-buy">Добавить в корзину</a>
                            <a href="tea.html" class="btn-back">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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