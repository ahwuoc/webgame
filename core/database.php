<?php
/**
 * Database Connection - File kết nối database chung
 * Sử dụng cho toàn bộ hệ thống
 */

// Cấu hình database
$db_config = [
    'host' => '36.50.135.62',
    'port' => '3306',
    'dbname' => 'nro_1',
    'username' => 'test',
    'password' => '123456',
    'charset' => 'utf8mb4'
];

// Tạo kết nối PDO chung
try {
    $dsn = "mysql:host={$db_config['host']};port={$db_config['port']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
    $conn = new PDO($dsn, $db_config['username'], $db_config['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    die("Lỗi kết nối database: " . $e->getMessage());
}

// Thiết lập timezone
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Export biến $conn để sử dụng global
$GLOBALS['conn'] = $conn;
?>
