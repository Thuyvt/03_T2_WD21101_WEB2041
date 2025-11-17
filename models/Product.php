<?php
    class Product extends BaseModel {
        protected $table = 'products';

        public function getAll() {
            $sql = "SELECT * FROM products ORDER BY id DESC;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
?>