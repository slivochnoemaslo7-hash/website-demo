<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <title>Условия брони</title>
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
            <h1 class="page-title">Условия бронирования</h1>
            
            <div class="terms-content">
                <section class="terms-section">
                    <h2>1. Общие положения</h2>
                    <p>Бронирование столиков в ресторане «Русский вкус» осуществляется бесплатно. Забронированный столик ожидает вас в течение 15 минут после указанного времени. В случае опоздания бронь может быть аннулирована.</p>
                </section>

                <section class="terms-section">
                    <h2>2. Отмена брони</h2>
                    <p>Вы можете отменить бронь не позднее чем за 2 часа до назначенного времени через форму «Мои бронирования» на сайте или по телефону. При неявке или опоздании более чем на 15 минут после брони столика, ресторан вправе самостоятельно отменить бронь.</p>
                </section>

                <section class="terms-section">
                    <h2>3. Предоплата</h2>
                    <p>Для компаний от 6 человек может потребоваться предоплата в размере 1000 рублей, которая будет вычтена из счёта. Для банкетов и мероприятий – индивидуальные условия.</p>
                </section>

                <section class="terms-section">
                    <h2>4. Дети</h2>
                    <p>Дети до 5 лет размещаются бесплатно без предоставления отдельного места. Для детей от 5 до 12 лет предусмотрено детское меню и скидка 20% на основные блюда.</p>
                </section>

                <section class="terms-section">
                    <h2>5. Домашние животные</h2>
                    <p>Посещение с домашними животными возможно только на летней веранде при наличии намордника и поводка. В основном зале животные не допускаются.</p>
                </section>

                <section class="terms-section">
                    <h2>6. Контактная информация</h2>
                    <p>По всем вопросам вы можете связаться с нами по телефону: <a href="tel:+71234567890">+7 (123) 456-78-90</a> или по email: <a href="mailto:info@rustaste.ru">info@rustaste.ru</a>.</p>
                </section>
            </div>
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