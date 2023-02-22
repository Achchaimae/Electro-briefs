<?php
    class Command extends Controller{
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
        
        public function sendCommande() {
            // print_r($_POST);
            // exit;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $products = $_POST['products'];
                $quantity = $_POST['quantity'];
                // $total = $this->commandeModel->totalPrice();
                $data = [
                    'id_client' => $_SESSION['user_id'],
                    'creation_date' => date('d-m-y'),
                    // 'total_price' => $total->price
                ];
                $idCommande = $this->productmodels->createCommande($data);
                if ($idCommande) {
                    for ($i = 0; $i < count($products); $i++) {
                        $data = [
                            'id_product' => $products[$i],
                            'id_commande' => $idCommande,
                            'quantite' => $quantity[$i],
                        ];
                        $this->productmodels->addProductCommande($data);
                    }
                    if ($this->productmodels->finishCommande()) {
                        $this->productmodels->clearCart();
                        redirect('Products/cart');
                    } else {
                        die('SOMETHING WRONG ???');
                    }
                }
            }
        }

    }