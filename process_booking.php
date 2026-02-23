<?php
require_once 'config.php';
session_start();

// Получаем и очищаем данные
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
$guests = (int)($_POST['guests'] ?? 0);
$comment = trim($_POST['comment'] ?? '');

// Валидация
$errors = [];
if (empty($name)) $errors[] = 'Укажите имя';
if (empty($phone)) $errors[] = 'Укажите телефон';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Укажите корректный email';
if (empty($date) || strtotime($date) < strtotime(date('Y-m-d'))) $errors[] = 'Дата не может быть в прошлом';
if (empty($time)) $errors[] = 'Укажите время';
if ($guests < 1 || $guests > 12) $errors[] = 'Количество гостей должно быть от 1 до 12';

if (!empty($errors)) {
    $_SESSION['booking_errors'] = $errors;
    header('Location: booking.php');
    exit;
}

// Генерация уникального кода брони
$code = 'RST-' . date('Ymd') . '-' . rand(1000, 9999);

// Сохранение в БД
$conn = getDB();
$stmt = $conn->prepare("INSERT INTO bookings (booking_code, customer_name, customer_phone, customer_email, booking_date, booking_time, guests_count, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssis", $code, $name, $phone, $email, $date, $time, $guests, $comment);

if ($stmt->execute()) {
    header("Location: booking-success.php?code=" . urlencode($code));
    exit;
} else {
    $_SESSION['booking_errors'] = ['Ошибка при сохранении. Попробуйте позже.'];
    header('Location: booking.php');
    exit;
}