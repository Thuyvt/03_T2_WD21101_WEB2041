<?php
class ProductController 
{
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index () {
        $view = 'product/index';
        $title = 'Danh sách sản phẩm';
        $data = $this->productModel->getAll();
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function delete() {
        // validate 
        try{
            if(!isset($_GET["id"])) {
                throw new Exception("Thiếu tham số id");
            }
            $id = $_GET["id"];
            // kiểm tra id có tồn tại không
            $pro = $this->productModel->find($id);
            if($pro) {
                // thực hiện xóa pro
                $this->productModel->delete($id);  
            } else {
                throw new Exception("Không có id = $id tồn tại!");
            }
            // chuyển trang nếu xóa thành công
            header('Location:' .BASE_URL_ADMIN. '&action=index-product');
            exit();
        } catch(Exception $ex) {
            throw new Exception("Thao tác không thành công");
        }
    }
}
?>