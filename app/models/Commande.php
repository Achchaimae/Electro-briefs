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

        public function createCommande($data) {
            $this->db->beginTransaction();
            $this->db->query("INSERT INTO commande(client_id , date_creation, prix_total_commande ) VALUES (:id_c, :date, :total_price)");
            $this->db->bind(':id_c', $data['id_client']);
            $this->db->bind(':date', $data['creation_date']);
            $this->db->bind(':total_price', $data['total_price']);
            $this->db->execute();
            return $this->db->lastInserId();
        }

        public function addProductCommande($data) {
            $this->db->query("INSERT INTO product_commande(id_product, id_commande, qte) VALUES (:id_p, :id_c, :quantite)");
            $this->db->bind(':id_p', $data['id_product']);
            $this->db->bind(':id_c', $data['id_commande']);
            $this->db->bind(':quantite', $data['quantite']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function finishCommande() {
            return $this->db->commit();
        }

        public function updateTotalPrice($total, $idCommande) {
            $this->db->query("UPDATE commande SET prix_total_commande = :total_price WHERE id = :id");
            $this->db->bind(':id', $idCommande);
            $this->db->bind(':total_price', $total);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function totalPrice($id) {
            $this->db->query("SELECT SUM(p.prix_achat * pc.qte) as total_price FROM product_commande pc JOIN product p ON p.id = pc.id_product JOIN commande c ON c.id = pc.id_commande WHERE c.id = :id GROUP BY id_commande");
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
        }

        public function clearCart() {
            $this->db->query("DELETE FROM cart");
            $this->db->execute();
        }

        //minus the quantity of product after the commande
        public function minusQuantity($id, $qte) {
            $this->db->query("UPDATE product SET quantity = quantity - :qte WHERE id_p = :id");
            $this->db->bind(':id', $id);
            $this->db->bind(':qte', $qte);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        //list user data
        public function getUserData($id){
            $this->db->query("SELECT * FROM admin INNER JOIN client ON admin.password = client.password;");
            $this->db->bind(':id',$id);
            $row = $this->db->single();
            return $row;
        }
    }