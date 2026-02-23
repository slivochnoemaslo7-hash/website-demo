<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <title>Галерея</title>
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
            <h1 class="page-title">Галерея</h1>

            <!-- Секция 1: Ресторан (здание) -->
            <section class="gallery-section">
                <h2 class="section-title">Наш ресторан</h2>
                <div class="slider" id="slider-building">
                    <div class="slider-container">
                        <img src="/images/фасад.jpg" alt="Ресторан снаружи" class="slider-img" data-index="0">
                        <p class="slider-caption">Фасад ресторана</p>
                    </div>
                    <button class="slider-btn prev">❮</button>
                    <button class="slider-btn next">❯</button>
                    <div class="slider-dots"></div>
                </div>
            </section>

            <!-- Секция 2: Интерьер -->
            <section class="gallery-section">
                <h2 class="section-title">Интерьер</h2>
                <div class="slider" id="slider-interior">
                    <div class="slider-container">
                        <img src="/images/интерьер.jpg" alt="Зал" class="slider-img" data-index="0">
                        <p class="slider-caption">Основной зал</p>
                    </div>
                    <button class="slider-btn prev">❮</button>
                    <button class="slider-btn next">❯</button>
                    <div class="slider-dots"></div>
                </div>
            </section>

            <!-- Секция 3: Сотрудники -->
            <section class="gallery-section">
                <h2 class="section-title">Наша команда</h2>
                <div class="slider" id="slider-staff">
                    <div class="slider-container">
                        <img src="/images/шеф.jpg" alt="Шеф-повар" class="slider-img" data-index="0">
                        <p class="slider-caption">Зайцев Кирилл, шеф-повар</p>
                    </div>
                    <button class="slider-btn prev">❮</button>
                    <button class="slider-btn next">❯</button>
                    <div class="slider-dots"></div>
                </div>
            </section>

            <!-- Секция 4: Блюда -->
            <section class="gallery-section">
                <h2 class="section-title">Наши блюда</h2>
                <div class="slider" id="slider-food">
                    <div class="slider-container">
                        <img src="/images/Пельмени сбирские.png" alt="Пельмени" class="slider-img" data-index="0">
                        <p class="slider-caption">Пельмени сибирские</p>
                    </div>
                    <button class="slider-btn prev">❮</button>
                    <button class="slider-btn next">❯</button>
                    <div class="slider-dots"></div>
                </div>
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
     <script src="/js/script.js"></script>
</body>
</html>