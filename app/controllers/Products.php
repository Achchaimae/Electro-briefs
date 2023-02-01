<?php
    class Products extends Controller{
        public $productmodels;
        public function __construct(){
            $this->productmodels=$this->model('Product');
        }
        public function dashboard(){
            $products = $this->productmodels->List();
            $data = [
                'products' => $products
            ];
            $this->view('pages/admin/dashboard',$data);
        }

        public function add(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imgTmp, 'img/upload/' . $imgName);

// date_envoi
// date_livraison
// client_id
// prix_unitaire
// quantite
// prix_total_produit
// date_creation
// prix_total_commande
                $data= [
                     
                        'date_envoi' => $_POST['date_envoi'],
                        'date_livraison' => $_POST['date_livraison'],
                        ' client_id' => $_POST[' client_id'],
                        'prix_unitaire' => $_POST['prix_unitaire'],
                        'prix_final' => $_POST['prix_final'],
                        'prix_offre' => $_POST['prix_offre'],
                        'quantite' => $_POST['quantite'],
                        'description' => $_POST['description'],
                        'photo' => $_FILES['photo'],
                        'categorie_id' => $_POST['categorie_id'],
                       
                ];
                $test=$this->productmodels->add($data);
                if($test){
                    redirect('pages/dashboard');
                }
                else{
                    die('Something went wrong');
                }

            }
            else  {
            $data=[
                'ref' => '',
                'libelle' => '',
                'code_barre' => '',
                'prix_achat' => '',
                'prix_final' => '',
                'prix_offre' => '',
                'quantite' => '',
                'description' => '',
                'photo' => '',
                'categorie_id' => '',
            ];
            // $this->view('pages/addproduct',$data);
        }
        }
    }
