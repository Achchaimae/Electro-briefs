<?php
    class Commande extends Controller{
        public $productmodels;
        public function __construct(){
            $this->productmodels=$this->model('Commande');
        }
        public function dashboard(){
            $commande = $this->productmodels->List();
            $data = [
                'Commande' => $commande
            ];
            $this->view('pages/admin/dashboard',$data);
        }
        
            // date_creation
            // date_envoi
            // date_livraison
            // client_id
            // prix_unitaire
            // quantite
            // prix_total_produit
            // prix_total_commande
        // public function list(){
        //     $commande = $this->productmodels->List();
        //     $data = [
        //         'Commande' => $commande
        //     ];
        //     $this->view('pages/admin/list',$data);
        // }
        public function add(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imgTmp, 'img/upload/' . $imgName);
                $data= [
                   'ref' => $_POST['ref'],
                     'libelle' => $_POST['libelle'],
                        'code_barre' => $_POST['code_barre'],
                        'prix_achat' => $_POST['prix_achat'],
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