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
    }