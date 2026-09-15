<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="comp/css/style.css">
</head>
<body>
    <!-- Якоря для товаров -->
    <div id="add-sencha"></div><div id="add-longjing"></div><div id="add-matcha"></div><div id="add-oolong"></div>
    
    <!-- Состояния корзины и промокодов -->
    <input type="checkbox" id="remove-item" class="hide-input">
    <input type="radio" name="promo" id="promo-none" class="hide-input" checked>
    <input type="radio" name="promo" id="promo-tea2026" class="hide-input">
    
    <input type="radio" name="cart-step" id="s-cart" class="hide-input" checked>
    <input type="radio" name="cart-step" id="s-checkout" class="hide-input">
    <input type="radio" name="cart-step" id="s-success" class="hide-input">

    <header><div class="header-inner"><a href="index.html" class="logo">☉ Меридиан Чая</a><nav><a href="tea.html">Чай</a><a href="promo.html">Акции</a><a href="about.html">О нас</a><a href="auth.html">Войти</a><a href="cart.html">Корзина</a></nav></div></header>

    <div class="success-banner">✅ Чай добавлен в корзину! <a href="cart.html">Открыть →</a></div>

    <div class="main-content">
        <div class="view-cart view">
            <div class="content-wrapper">
                <h1 class="page-title">Ваша корзина</h1>
                <div class="cart-layout">
                    <div class="cart-items">
                        <div class="cart-item item-sencha active">
                            <div class="cart-img"><img src="comp/img/sencha.png" alt="Сенча"></div>
                            <div class="cart-info">
                                <div class="cart-name">Сенча «Сакурадзима»</div>
                                <div class="cart-meta">Япония · 50 г</div>
                                <div class="cart-bottom">
                                    <div class="cart-qty"><label>Кол-во:</label><input type="number" value="1" min="1"></div>
                                    <div class="cart-price">1 800 ₽</div>
                                </div>
                                <div class="cart-bottom"><label for="remove-item" class="remove-label">✕ Удалить</label></div>
                            </div>
                        </div>
                    </div>

                    <div class="summary">
                        <div class="s-row"><span>Товары</span><span>1 800 ₽</span></div>

                        <!-- ПРОМО СЕКЦИЯ -->
                        <div class="promo-section">
                            <label class="promo-label">Промокод</label>
                            <div class="promo-input-group">
                                <input type="text" class="promo-display" value="TEA2026" readonly>
                                <label for="promo-tea2026" class="btn-apply">Применить</label>
                                <label for="promo-none" class="btn-apply btn-reset">Сброс</label>
                            </div>
                            <div class="promo-message">
                                <span class="msg-default">Введите код для скидки</span>
                                <span class="msg-success">✅ TEA2026 применён! (-15%)</span>
                            </div>
                        </div>

                        <div class="s-row discount-row default"><span>Скидка</span><span>0 ₽</span></div>
                        <div class="s-row discount-row active"><span>Скидка (-15%)</span><span>-270 ₽</span></div>

                        <div class="s-row"><span>Доставка</span><span>Бесплатно</span></div>

                        <div class="s-total total-default"><span>Итого</span><span>1 800 ₽</span></div>
                        <div class="s-total total-active"><span>Итого</span><span>1 530 ₽</span></div>

                        <label for="s-checkout" class="btn">Оформить заказ →</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-checkout view">
            <div class="content-wrapper">
                <h1 class="page-title">Оформление</h1>
                <div class="checkout-form">
                    <div class="form-group"><input type="text" placeholder="Имя и Фамилия"></div>
                    <div class="form-group"><input type="email" placeholder="Email для чека"></div>
                    <div class="form-group"><input type="tel" placeholder="Телефон"></div>
                    <div class="form-group"><input type="text" placeholder="Адрес доставки"></div>
                    <div class="form-group"><select><option>Картой онлайн</option><option>СБП</option><option>При получении</option></select></div>
                    <div style="display:flex;gap:1rem;margin-top:2rem">
                        <label for="s-cart" class="btn btn-back" style="margin-top:0">← Назад</label>
                        <label for="s-success" class="btn" style="margin-top:0">Подтвердить</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-success view">
            <div class="content-wrapper">
                <div class="success-box">
                    <div class="success-icon">🍵</div>
                    <h2>Заказ оформлен!</h2>
                    <div class="order-num">Номер: #MC-2026-8841</div>
                    <p style="color:var(--text-medium);line-height:1.7;margin-bottom:1.5rem">Мы отправили чек на почту. Менеджер свяжется с вами в течение 15 минут.</p>
                    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
                        <a href="tea.html" class="btn">Продолжить покупки</a>
                        <a href="index.html" class="btn btn-back" style="margin-top:0">На главную</a>
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