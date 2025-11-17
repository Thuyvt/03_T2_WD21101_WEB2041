<?php
class ProductController 
{
    private $productModel;

    public function __construct() {
        $productModel = new Product();
    }

    public function index () {
        $view = 'product/index';
        $title = 'Danh sách sản phẩm';
        $data = $this->productModel->getAll();
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}
?>