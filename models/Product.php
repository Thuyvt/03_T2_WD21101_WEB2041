<?php
    class Product extends BaseModel {
        protected $table = 'products';

        public function getAll() {
            $sql = "SELECT p.*, cat.name as cat_name FROM `products` as p
             JOIN categories as cat 
             ON p.category_id = cat.id ORDER BY p.id DESC;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>