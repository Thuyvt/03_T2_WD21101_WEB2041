<?php

$action = $_GET['action'] ?? '/';
// Kiểm tra tài khoản đăng nhập có phải admin không


match ($action) {
    '/'         => (new DashboardController)->index(),
    
    // CRUD PRODUCT
    'index-product' => (new ProductController)->index(), // Hiển thị danh sách
    'show-product' => '', // Hiển thị chi tiết
    'delete-product' => (new ProductController)->delete(), // Xóa
    'create-product' => '', // Hiển thị form tạo mới
    'store-product' => '', // Lưu dữ liệu trên form vào CSDL
    'edit-product' => '', // Hiển thị form
    'update-product' => '', // Lưu dữ liệu cần cập nhật vào CSDL
};

?>