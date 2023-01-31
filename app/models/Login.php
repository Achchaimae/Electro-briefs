<?php
    class Login {
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function checkAdmin($data){
            $this->db->query("SELECT * FROM admin WHERE email = :email AND password = :password");
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            $row = $this->db->single();
            
            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }
        
    }