<?php
// Include database connection chung
require_once __DIR__ . '/database.php';

// Các biến cấu hình để tương thích với code cũ
$ip_sv = '36.50.135.62';
$port = '3306';
$dbname_sv = 'nro_1';
$user_sv = 'test';
$pass_sv = '123456';

// Thiết lập timezone
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>