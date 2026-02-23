<?php
require_once 'config.php';

$searchResult = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = trim($_POST['code'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if (empty($code) || empty($email)) {
        $error = 'Заполните оба поля';
    } else {
        $conn = getDB();
        $stmt = $conn->prepare("SELECT * FROM bookings WHERE booking_code = ? AND customer_email = ?");
        $stmt->bind_param("ss", $code, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $searchResult = $result->fetch_assoc();
        if (!$searchResult) {
            $error = 'Бронь с таким номером и email не найдена';
        }
    }
}

$pageTitle = "Мои бронирования";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/images/favicon.png" type="image/png">
    <title>Моя бронь</title>
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
        <h1 class="page-title">Мои бронирования</h1>

        <?php if ($searchResult): ?>
            <!-- Если бронь найдена, показываем детали и кнопки -->
            <div class="booking-details">
                <h2>Детали брони</h2>
                <p><strong>Номер:</strong> <?php echo htmlspecialchars($searchResult['booking_code']); ?></p>
                <p><strong>Имя:</strong> <?php echo htmlspecialchars($searchResult['customer_name']); ?></p>
                <p><strong>Телефон:</strong> <?php echo htmlspecialchars($searchResult['customer_phone']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($searchResult['customer_email']); ?></p>
                <p><strong>Дата:</strong> <?php echo date('d.m.Y', strtotime($searchResult['booking_date'])); ?></p>
                <p><strong>Время:</strong> <?php echo $searchResult['booking_time']; ?></p>
                <p><strong>Гостей:</strong> <?php echo $searchResult['guests_count']; ?></p>
                <?php if (!empty($searchResult['comment'])): ?>
                    <p><strong>Комментарий:</strong> <?php echo nl2br(htmlspecialchars($searchResult['comment'])); ?></p>
                <?php endif; ?>
                <p><strong>Статус:</strong> <span class="status status-<?php echo $searchResult['status']; ?>"><?php echo $searchResult['status']; ?></span></p>

                <div class="action-buttons">
                    <a href="/" class="btn">На главную</a>
                    <a href="my-bookings.php" class="btn btn--secondary">Новый поиск</a>
                </div>
            </div>
        <?php else: ?>
            <!-- Форма поиска (если нет результата) -->
            <form method="POST" class="search-form">
                <div class="form-group">
                    <label for="code">Номер брони</label>
                    <input type="text" id="code" name="code" required>
                </div>
                <div class="form-group">
                    <label for="email">Email, указанный при бронировании</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn--primary">Найти</button>
            </form>

            <?php if ($error): ?>
                <p class="error"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
        <?php endif; ?>
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