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

        public function delete($id) {
            $sql = "DELETE from products WHERE id = $id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        }

        public function find($id) {
            $sql = "SELECT * FROM products WHERE id = $id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function insert($data){
            $sql = "INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `image`) 
            VALUES (NULL, '".$data["category_id"]."', '".$data["name"]."', '".$data["description"]."', 
            '".$data["price"]."', '".$data["quantity"]."', ".$data["image"].");";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        }
    }
?>