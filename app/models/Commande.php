<?php
    class Commande {
        private $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function List(){
            $this->db->query("SELECT * FROM commande");
            $results = $this->db->resultSet();
            return $results;
        }
        
        // crud
        public function Accept($id){
            $this->db->query("UPDATE commande SET status='accepted' WHERE id=:id");
            $this->db->bind(':id',$id);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
        public function Refuse($id){
            $this->db->query("UPDATE commande SET status='refused' WHERE id=:id");
            $this->db->bind(':id',$id);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }