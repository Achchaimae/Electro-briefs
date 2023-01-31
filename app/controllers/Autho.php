<?php

class Autho extends Controller{
    public $loginmodels;
    public function __construct(){
        $this->loginmodels=$this->model('Login');
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $data=[
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_err' => '',
            ];
            
            $check = $this->loginmodels->checkadmin($data);

            if($check){
                $this->createSession($check);
                
            }
            else{
                // $data['email_err']='Invalid email or password';
                // $this->view('pages/login',$data);
                die('not ok');
            }
            
        }
        else {
            // Load form (page page before the submit)
            $data=[
                'email' => '',
                'password' => '',
                'email_err' => ''
            ];
            $this->view('pages/login',$data);
        }
    }
    
    public function createSession($adm){
        $role=$adm->role;
         if($role=='admin'){
            $_SESSION['admin'] = $adm->email;
            redirect('pages/dashboard');
        }
        else{
            $_SESSION['user'] = $adm->email;
            redirect('pages/index');
        }
    }
    
    public function logout(){
        
        unset($_SESSION['admin']);
    
        session_destroy();
        redirect('pages/index');
    }
}