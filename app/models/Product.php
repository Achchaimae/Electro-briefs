
<?php
// Path: app\models\Product.php
 class Product {
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function List(){
        $this->db->query("SELECT p.*, c.name FROM product p INNER JOIN categorie c ON p.categorie_id = c.id");
        $results = $this->db->resultSet();
        return $results;
    }
    public function listascend(){
        //order by prix_final asc
        $this->db->query("SELECT * FROM `product` ORDER BY prix_achat ASC");
        $results = $this->db->resultSet();
        return $results;
    }
    public function listdescend(){
        //order by prix_final desc
        $this->db->query("SELECT * FROM `product` ORDER BY prix_achat DESC");
        $results = $this->db->resultSet();
        return $results;
    }
    public function listbycategory($id){
        $this->db->query("SELECT * FROM product WHERE categorie_id=:id");
        $this->db->bind(':id',$id);
        $results = $this->db->resultSet();
        return $results;
    }
    public function Get($id){
        $this->db->query("SELECT * FROM product WHERE id=:id");
        $this->db->bind(':id',$id);
        $row = $this->db->single();
        return $row;
    }
    public function category() {
        $this->db->query("SELECT * FROM categorie");
        $results = $this->db->resultSet();
        return $results;
    }
    public function getCategoryByName($name) {
        $this->db->query("SELECT * FROM categorie WHERE name=:name");
        $this->db->bind(':name',$name);
        $row = $this->db->single();
        return $row;
    }
    // crud
    public function addproduct($data){
        // ref	libelle	code_barre	prix_achat	prix_final	prix_offre	quantite	description	image	categorie_id	
        $this->db->query("INSERT INTO product (ref,libelle,code_barre,prix_achat,prix_final,prix_offre,quantite,description,image,categorie_id) VALUES (:ref,:libelle,:code_barre,:prix_achat,:prix_final,:prix_offre,:quantite,:description,:image,:categorie_id)");
        $this->db->bind(':ref',$data['ref']);
        $this->db->bind(':libelle',$data['libelle']);
        $this->db->bind(':code_barre',$data['code_barre']);
        $this->db->bind(':prix_achat',$data['prix_achat']);
        $this->db->bind(':prix_final',$data['prix_final']);
        $this->db->bind(':prix_offre',$data['prix_offre']);
        $this->db->bind(':quantite',$data['quantite']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':image',$data['image']);
        $this->db->bind(':categorie_id',$data['categorie']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    public function Update($data){
        $this->db->query("UPDATE product SET ref=:ref, libelle=:libelle, code_barre=:code_barre, prix_achat=:prix_achat, prix_final=:prix_final, prix_offre=:prix_offre, quantite=:quantite, description=:description, image=:image, categorie_id=:categorie_id WHERE id = :id");
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':ref',$data['ref']);
        $this->db->bind(':libelle',$data['libelle']);
        $this->db->bind(':code_barre',$data['code_barre']);
        $this->db->bind(':prix_achat',$data['prix_achat']);
        $this->db->bind(':prix_final',$data['prix_final']);
        $this->db->bind(':prix_offre',$data['prix_offre']);
        $this->db->bind(':quantite',$data['quantite']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':image',$data['image']);
        $this->db->bind(':categorie_id',$data['categorie_id']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    public function Delete($id){
        $this->db->query("DELETE FROM product WHERE id=:id");
        $this->db->bind(':id',$id);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function getProductByCategory($id){
        $this->db->query("SELECT * FROM product WHERE product.categorie_id = :id");
        $this->db->bind(':id',$id);
        $results = $this->db->resultSet();
        return $results;
    }

    public function setToCart($data) {
        $this->db->query("INSERT INTO cart (id_product, id_client, quantite_c) VALUES (:id_p, :id_c, :quantity)");
        $this->db->bind(':id_p', $data['id_product']);
        $this->db->bind(':id_c', $data['id_client']);
        $this->db->bind(':quantity', $data['quantite']);
        if ($this->db->execute()) {
            return 'set';
        } else {
            return false;
        }
    }
    public function getCart($id) {
        $this->db->query("SELECT * FROM cart INNER JOIN product on cart.id_product = :id");
        $this->db->bind(':id', $id);
        $results = $this->db->single();
        return $results;
    }
    public function getProductCart() {
        $this->db->query("SELECT * FROM cart INNER JOIN product ON cart.id_product = product.id");
        $row = $this->db->resultSet();
        return $row;
    }
    public function updateCart($data) {
        $this->db->query("UPDATE cart SET quantite_c = :quantity WHERE id_product = :id_p");
        $this->db->bind(':id_p', $data['id_product']);
        $this->db->bind(':quantity', $data['quantite']);
        if ($this->db->execute()) {
            return 'updated';
        } else {
            return false;
        }
    }
    public function totalPrice() {
        $this->db->query("SELECT SUM(quantite_c * prix_final) AS total FROM cart INNER JOIN product ON cart.id_product = product.id;");
        $row = $this->db->single();
        return $row;
    }
 }






















 