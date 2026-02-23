<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <title>Контакты</title>
</head>
<body>
    <header class="header">
        <div class="container header__container">
            <a href="/" class="logo">Русский вкус</a>
            
            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.html" class="nav__link">Главная</a></li>
                    
                    <li class="nav__item nav__item--dropdown">
                        <a href="/menu/menu.html" class="nav__link">Меню</a>
                        <ul class="dropdown-menu">
                            <li><a href="/menu/main.html" class="dropdown-menu__link">Основные блюда</a></li>
                            <li><a href="/menu/appetizers.html" class="dropdown-menu__link">Закуски</a></li>
                            <li><a href="/menu/desserts.html" class="dropdown-menu__link">Десерты</a></li>
                            <li><a href="/menu/drinks.html" class="dropdown-menu__link">Напитки</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav__item nav__item--dropdown">
                        <a href="/booking.php" class="nav__link">Бронирование</a>
                        <ul class="dropdown-menu">
                            <li><a href="/booking.php" class="dropdown-menu__link">Забронировать столик</a></li>
                            <li><a href="/my-bookings.php" class="dropdown-menu__link">Мои бронирования</a></li>
                            <li><a href="/booking-terms.php" class="dropdown-menu__link">Условия брони</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav__item"><a href="/about.php" class="nav__link">О нас</a></li>
                    <li class="nav__item"><a href="/gallery.php" class="nav__link">Галерея</a></li>
                    <li class="nav__item"><a href="/contacts.php" class="nav__link">Контакты</a></li>
                </ul>
            </nav>

            <a href="/booking.php" class="btn btn--primary">ЗАБРОНИРОВАТЬ</a>
            
            <button class="burger" id="burgerBtn" aria-label="Меню">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="page-title">Контакты</h1>

            <!-- Контактная информация в две колонки -->
            <section class="contacts-info">
                <div class="contacts-details">
                    <h2>Как с нами связаться</h2>
                    <p><strong>Адрес:</strong> Кировская область, г. Яранск, улицм Мира д. 14</p>
                    <p><strong>Телефон:</strong> <a href="tel:+71234567890">+7 (123) 456-78-90</a></p>
                    <p><strong>Email:</strong> <a href="mailto:info@rustaste.ru">info@rustaste.ru</a></p>
                    <h3>Часы работы</h3>
                    <p>Пн–Чт: 12:00 – 23:00</p>
                    <p>Пт–Сб: 12:00 – 02:00</p>
                    <p>Вс: 14:00 – 23:00</p>
                </div>
                <div class="contacts-map">
                    <h2>Схема проезда</h2>
                    <!-- Здесь будет iframe карты -->
                    <div class="map-container">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac3f3dcc6dc26ab518827372c2ab762fb3f87d33a603f4f16614a6c1cf6449317&amp;source=constructor" width="732" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </section>

            <!-- Форма обратной связи (простая) -->
            <section class="contacts-form">
                <h2>Напишите нам</h2>
                <form action="send_message.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn--primary">Отправить</button>
                </form>
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__nav">
                <a href="index.html">Главная</a>
                <a href="/menu/menu.html">Меню</a>
                <a href="/booking.php">Бронирование</a>
                <a href="/about.php">О нас</a>
                <a href="/gallery.php">Галерея</a>
                <a href="/contacts.php">Контакты</a>
                <a href="/booking-terms.phpl">Условия брони</a>
                <a href="/my-bookings.php">Мои бронирования</a>
            </div>
            <p class="footer__copyright">© 2026 Ресторан «Русский вкус». Все права защищены.</p>
        </div>
    </footer>
</body>
</html>