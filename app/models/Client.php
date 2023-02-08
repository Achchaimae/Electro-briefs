<?php
    class Client{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function List(){
            $this->db->query("SELECT * FROM client");
            $results = $this->db->resultSet();
            return $results;
        }
        public function getClient($id){
            $this->db->query("SELECT * FROM client WHERE id = :id");
            $this->db->bind(':id',$id);
            $row = $this->db->single();
            return $row;
        }
    }