<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="comp/css/style.css">
</head>
<body>
    <input type="radio" name="auth" id="auth-login" class="hide-input" checked>
    <input type="radio" name="auth" id="auth-reg" class="hide-input">
    <input type="radio" name="auth" id="auth-prof" class="hide-input">

    <header><div class="header-inner"><a href="index.html" class="logo">☉ Меридиан Чая</a><nav><a href="tea.html">Чай</a><a href="promo.html">Акции</a><a href="about.html">О нас</a><a href="auth.html">Войти</a><a href="cart.html">Корзина</a></nav></div></header>

    <div class="main-content">
        <div class="auth-wrapper">
            <div class="auth-card">
                <h2 class="auth-title">Добро пожаловать</h2>
                <div class="auth-tabs">
                    <label for="auth-login" class="tab-login">Вход</label>
                    <label for="auth-reg" class="tab-reg">Регистрация</label>
                </div>
                <div class="auth-form form-login">
                    <div class="form-group"><label>Email</label><input type="email" placeholder="you@example.com"></div>
                    <div class="form-group"><label>Пароль</label><input type="password" placeholder="••••••••"></div>
                    <label for="auth-prof" class="form-btn">Войти</label>
                    <p class="form-link">Забыли пароль? <a href="#">Восстановить</a></p>
                </div>
                <div class="auth-form form-reg">
                    <div class="form-group"><label>Имя</label><input type="text" placeholder="Иван"></div>
                    <div class="form-group"><label>Email</label><input type="email" placeholder="you@example.com"></div>
                    <div class="form-group"><label>Пароль</label><input type="password" placeholder="Минимум 8 символов"></div>
                    <label for="auth-prof" class="form-btn">Создать аккаунт</label>
                    <p class="form-link">Регистрируясь, вы соглашаетесь с <a href="#">условиями</a></p>
                </div>
            </div>

            <div class="profile-view">
                <div class="profile-avatar">👤</div>
                <h3 class="profile-name">Иван Чайный</h3>
                <p style="color:var(--text-medium);margin-bottom:1rem;">ivan.chai@mail.ru</p>
                <div class="profile-stats">
                    <span>📦 Заказов: 3</span>
                    <span>❤️ Избранное: 5</span>
                    <span>💎 Бонусы: 450 ₽</span>
                </div>
                <label for="auth-login" class="btn-logout">Выйти из аккаунта</label>
            </div>
        </div>
    </div>

    <footer>© 2026 Меридиан Чая. Все права защищены.</footer>
    <script>
document.querySelector('.menu-toggle').addEventListener('click', function() {
    document.querySelector('nav').classList.toggle('active');
});
</script>
</body>
</html>