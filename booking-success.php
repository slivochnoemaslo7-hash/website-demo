<?php
require_once 'config.php';

$code = $_GET['code'] ?? '';
if (empty($code)) {
    header('Location: booking.php');
    exit;
}

$conn = getDB();
$stmt = $conn->prepare("SELECT * FROM bookings WHERE booking_code = ?");
$stmt->bind_param("s", $code);
$stmt->execute();
$result = $stmt->get_result();
$booking = $result->fetch_assoc();

if (!$booking) {
    header('Location: booking.php');
    exit;
}

$pageTitle = "Бронь подтверждена";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <title>Успешная бронь</title>
</head>
<body>
<header class="header">
        <div class="container header__container">
            <a href="/" class="logo">Русский вкус</a>
            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/" class="nav__link">Главная</a></li>
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
                        <a href="/booking.html" class="nav__link">Бронирование</a>
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
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>
<main>
    <div class="container">
        <div class="success-message">
            <h1 class="page-title">Спасибо, <?php echo htmlspecialchars($booking['customer_name']); ?>!</h1>
            <p>Ваша заявка на бронирование принята.</p>
            <p><strong>Номер брони:</strong> <?php echo htmlspecialchars($booking['booking_code']); ?></p>
            <p><strong>Дата:</strong> <?php echo date('d.m.Y', strtotime($booking['booking_date'])); ?></p>
            <p><strong>Время:</strong> <?php echo $booking['booking_time']; ?></p>
            <p><strong>Гостей:</strong> <?php echo $booking['guests_count']; ?></p>
            <?php if (!empty($booking['comment'])): ?>
                <p><strong>Комментарий:</strong> <?php echo nl2br(htmlspecialchars($booking['comment'])); ?></p>
            <?php endif; ?>
            <p>Статус: <span class="status status-<?php echo $booking['status']; ?>"><?php echo $booking['status']; ?></span></p>
            <p>Если у вас возникнут вопросы, позвоните нам по телефону +7 (123) 456-78-90.</p>
            <a href="/" class="btn">На главную</a>
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