<?php 
    class Commandes extends Controller{
        public $commandemodels;
        public function __construct(){
            $this->commandemodels=$this->model('Commande');
        }
        public function dashboard(){
            $commandes = $this->commandemodels->List();
            $data = [
                'commandes' => $commandes
            ];
            $this->view('pages/admin/dashboard',$data);
        }
        public function list(){
            $commandes = $this->commandemodels->List();
            $data = [
                'commandes' => $commandes
            ];
            $this->view('pages/admin/list',$data);
        }
        public function accept($id){
            $test=$this->commandemodels->Accept($id);
            if($test){
                redirect('pages/dashboard');
            }
            else{
                die('Something went wrong');
            }
        }
        public function refuse($id){
            $test=$this->commandemodels->Refuse($id);
            if($test){
                redirect('pages/dashboard');
            }
            else{
                die('Something went wrong');
            }
        }
    }