<?php
// config.php
define('DB_HOST', 'MySQL-8.2');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'restaurant');

function getDB() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Ошибка подключения к БД: " . $conn->connect_error);
    }
    return $conn;
}