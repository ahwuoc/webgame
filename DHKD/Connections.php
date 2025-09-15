<?php
#Duong Huynh Khanh Dang

// Include database connection chung
require_once __DIR__ . '/../core/database.php';

// Các biến cấu hình để tương thích với code cũ
$databaseConfig = [
    'ip' => "36.50.135.62",
    'dbname' => "nro_1",
    'user' => "test",
    'pass' => "123456"
];

// Set time zone
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Function to establish a database connection (giữ lại để tương thích)
function getDatabaseConnection($connConfig)
{
    try {
        $dsn = "mysql:host={$connConfig['ip']};dbname={$connConfig['dbname']};charset=utf8mb4";
        $conn = new PDO($dsn, $connConfig['user'], $connConfig['pass']);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Sử dụng connection chung
$conn = $GLOBALS['conn'];
?>