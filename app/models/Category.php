    <?php 
        class Category {
            private $db;
            public function __construct(){
                $this->db = new Database;
            }
            public function List(){
                $this->db->query("SELECT * FROM categorie");
                $results = $this->db->resultSet();
                return $results;
            }
            public function Get($id){
                $this->db->query("SELECT * FROM categorie WHERE id=:id");
                $this->db->bind(':id',$id);
                $row = $this->db->single();
                return $row;
            }
            // crud

            public function Add($data){

                $this->db->query("INSERT INTO categorie (nom,description,photo) VALUES (:nom,:description,:photo)");
                $this->db->bind(':nom',$data['nom']);
                $this->db->bind(':description',$data['description']);
                $this->db->bind(':photo',$data['photo']);


                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
            }
            public function Update($data){
                $this->db->query("UPDATE category SET nom=:nom WHERE id=:id");
                $this->db->bind(':id',$data['id']);
                $this->db->bind(':nom',$data['nom']);
                $this->db->bind(':description',$data['description']);
                $this->db->bind(':photo',$data['photo']);

                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
            }
            public function Delete($id){
                $this->db->query("DELETE FROM categorie WHERE id=:id");
                $this->db->bind(':id',$id);
                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
            }

        }