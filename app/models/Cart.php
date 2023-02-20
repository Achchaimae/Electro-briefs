<?php
    class cart {
        // DB stuff
        private $conn;
        private $table = 'cart';
        // Post Properties
        public $id;
        public $user_id;
        public $product_id;
        public $quantite_c;
        public $prix_final;
        // Constructor with DB
        public function __construct($db) {
            $this->conn = $db;
        }
        // Get Posts
        

    }
?>