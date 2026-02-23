<?php
// booking.php
session_start();
$errors = $_SESSION['booking_errors'] ?? [];
unset($_SESSION['booking_errors']);
$pageTitle = "Бронирование столика";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Бронирование</title>
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
            <h1 class="page-title">Забронировать столик</h1>

            <?php if (!empty($errors)): ?>
                <div class="error-list">
                    <?php foreach ($errors as $error): ?>
                        <p class="error"><?php echo htmlspecialchars($error); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form action="process_booking.php" method="POST" class="booking-form">
                <div class="form-group">
                    <label for="name">Ваше имя *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Телефон *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="date">Дата *</label>
                        <input type="date" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="time">Время *</label>
                        <select id="time" name="time" required>
                            <?php
                            for ($h = 12; $h <= 23; $h++) {
                                for ($m = 0; $m < 60; $m += 30) {
                                    $time = sprintf("%02d:%02d", $h, $m);
                                    echo "<option value=\"$time\">$time</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="guests">Количество гостей *</label>
                    <select id="guests" name="guests" required>
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment">Особые пожелания</label>
                    <textarea id="comment" name="comment" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn--primary">Забронировать</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__nav">
                <a href="index.html">Главная</a>
                <a href="/menu/menu.html">Меню</a>
                <a href="/booking.html">Бронирование</a>
                <a href="/about.html">О нас</a>
                <a href="/gallery.html">Галерея</a>
                <a href="/contacts.html">Контакты</a>
                <a href="/booking-terms.html">Условия брони</a>
                <a href="/my-bookings.html">Мои бронирования</a>
            </div>
            <p class="footer__copyright">© 2026 Ресторан «Русский вкус». Все права защищены.</p>
        </div>
    </footer>
</body>
</html>