<?php
    class Clients extends Controller{
        public $clientmodels;
        public function __construct(){
            $this->clientmodels=$this->model('Client');
        }
        public function dashboard(){
            $clients = $this->clientmodels->List();
            $data = [
                'clients' => $clients
            ];
            $this->view('pages/admin/Clients',$data);
        }
        public function list(){
            $clients = $this->clientmodels->List();
            $data = [
                'clients' => $clients
            ];
            $this->view('pages/admin/list',$data);
        }
       

}