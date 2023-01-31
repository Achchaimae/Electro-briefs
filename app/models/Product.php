
<?php
// Path: app\models\Product.php
 class Product {
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function List(){
        $this->db->query("SELECT * FROM product");
        $results = $this->db->resultSet();
        return $results;
    }
    public function Get($id){
        $this->db->query("SELECT * FROM product WHERE id=:id");
        $this->db->bind(':id',$id);
        $row = $this->db->single();
        return $row;
    }
    // crud
    public function Add($data){
        $this->db->query("INSERT INTO product (name,image,price,quantity,description) VALUES (:name,:image,:price,:quantity,:description)");
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':image',$data['image']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':quantity',$data['quantity']);
        $this->db->bind(':description',$data['description']);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    public function Update($data){
        $this->db->query("UPDATE product SET name=:name,image=:image,price=:price,quantity=:quantity,description=:description WHERE id=:id");
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':image',$data['image']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':quantity',$data['quantity']);
        $this->db->bind(':description',$data['description']);
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
    // search function
    // public function Search($name){
    //     $this->db->query("SELECT * FROM product WHERE name LIKE :name");
    //     $this->db->bind(':name','%'.$name.'%');
    //     $results = $this->db->resultSet();
    //     return $results;
    // }

 }






















 