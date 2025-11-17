<?php

$action = $_GET['action'] ?? '/';
// Kiểm tra tài khoản đăng nhập có phải admin không


match ($action) {
    '/'         => (new DashboardController)->index(),
};

?>