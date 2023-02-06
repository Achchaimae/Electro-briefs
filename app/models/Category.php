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

                $this->db->query("INSERT INTO categorie (name,description,image) VALUES (:name,:description,:image)");
                $this->db->bind(':name',$data['name']);
                $this->db->bind(':description',$data['description']);
                $this->db->bind(':image',$data['image']);


                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
            }
            public function update($data){
                $this->db->query("UPDATE categorie SET name = :name, description = :description, image=:image  WHERE id=:id");
                $this->db->bind(':id',$data['id']);
                $this->db->bind(':name',$data['name']);
                $this->db->bind(':description',$data['description']);
                $this->db->bind(':image',$data['image']);

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