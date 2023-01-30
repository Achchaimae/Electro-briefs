<?php
    class Login {
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function checkAdmin(){
            $this->db->query("SELECT * FROM admin");

            $row = $this->db->single();
            
            return $row;
        }
        
    }