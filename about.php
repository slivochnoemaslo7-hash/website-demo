<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <title>О нас</title>
</head>
<body>
    <header class="header">
        <div class="container header__container">
            <a href="index.html" class="logo">Русский вкус</a>
            
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
            <h1 class="page-title">О ресторане «Русский вкус»</h1>
            
            <!-- История и фото -->
            <section class="about-history">
                <div class="about-text">
                    <h2>Добро пожаловать!</h2>
                    <p>Ресторан «Русский вкус» открыл свои двери в 2026 году. Мы объединили традиционные рецепты русской кухни с современным подходом к сервису. Наша цель – чтобы каждый гость почувствовал тепло домашнего очага и насладился настоящими вкусами: от наваристых щей до сибирских пельменей.</p>
                    <p>Мы используем только свежие фермерские продукты, многие блюда готовятся по старинным семейным рецептам, которые передаются из поколения в поколение. У нас уютно, как в гостях у бабушки, но с изысканной подачей.</p>
                </div>
                <div class="about-image">
                    <img src="/images/интерьер 2.jpg" alt="Интерьер ресторана">
                </div>
            </section>

            <!-- Наши преимущества -->
            <section class="about-features">
                <h2>Почему выбирают нас</h2>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">🌾</div>
                        <h3>Натуральные продукты</h3>
                        <p>Работаем напрямую с поставщиками яблок</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">👨‍🍳</div>
                        <h3>Шеф-повар с опытом</h3>
                        <p>Зайцев Кирилл с опытом работы 3 дня</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🎶</div>
                        <h3>Живая музыка</h3>
                        <p>Каждую пятницу и субботу – выступление кого-нибудь.</p>
                    </div>
                </div>
            </section>

            <!-- Наша команда -->
            <section class="about-team">
                <h2>Наша команда</h2>
                <div class="team-grid">
                    <div class="team-card">
                        <img src="/images/шеф.jpg" alt="Шеф-повар">
                        <h3>Зайцев Кирилл</h3>
                        <p>Шеф-повар</p>
                        <p class="team-bio">В жизни варил только пельмени.</p>
                    </div>
                    <div class="team-card">
                        <img src="/images/шеф.jpg" alt="Управляющий">
                        <h3>Зайцев Кирилл</h3>
                        <p>Управляющий</p>
                        <p class="team-bio">Обеспечивает идеальный сервис и уютную атмосферу.</p>
                    </div>
                    <div class="team-card">
                        <img src="/images/шеф.jpg" alt="Сомелье">
                        <h3>Зайцев Кирилл</h3>
                        <p>Сомелье</p>
                        <p class="team-bio">Поможет выбрать идеальное вино к вашему ужину.(которого нету)</p>
                    </div>
                </div>
            </section>

            <!-- Отзывы -->
            <section class="about-testimonials">
                <h2>Что говорят гости</h2>
                <div class="testimonials-grid">
                    <div class="testimonial">
                        <p>«Заказывали столик, один человек работает за всех, впечатляет»</p>
                        <cite>— Кирилл</cite>
                    </div>
                    <div class="testimonial">
                        <p>«Сайт очень понравился как и сам ресторан»</p>
                        <cite>— Саня</cite>
                    </div>
                    <div class="testimonial">
                        <p>«Напитки реально очень вкусные, рекомендую попробовать облепиховый чай.»</p>
                        <cite>— Данил</cite>
                    </div>
                </div>
            </section>

            <!-- Часы работы и карта -->
            <section class="about-info">
                <h2>Как нас найти</h2>
                <div class="info-grid">
                    <div class="info-hours">
                        <h3>Часы работы</h3>
                        <p>Пн–Чт: 12:00 – 23:00</p>
                        <p>Пт–Сб: 12:00 – 02:00</p>
                        <p>Вс: 14:00 – 23:00</p>
                    </div>
                    <div class="info-map">
                        <h3>Схема проезда</h3>
                        <!-- Здесь можно вставить iframe карты (Яндекс или Google) -->
                        <div style="background: #ddd; height: 200px; display: flex; align-items: center; justify-content: center;">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac3f3dcc6dc26ab518827372c2ab762fb3f87d33a603f4f16614a6c1cf6449317&amp;source=constructor" width="732" height="400" frameborder="0"></iframe>
                        </div>
                    </div>
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
</body>
</html>