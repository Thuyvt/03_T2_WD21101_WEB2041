<?php
    class Category extends BaseModel {
        protected $table = 'categories';

        public function getAll() {
            $sql = "SELECT * from categories";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        
    }
?>