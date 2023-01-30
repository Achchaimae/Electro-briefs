<?php
class Autho extends Controller{
    public $loginmodels;
    public function __construct(){
        $this->loginmodels=$this->model('Login');
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $check = $this->loginmodels->checkadmin();
            $data=[
                'email' => $_POST['email'],
                'password' => md5($_POST['password'])   ,
                'email_err' => '',
            ];
            if($check->email == $data['email'] && $check->password == $data['password']){
                $this->createSession($check);
            }
            else{
                $data['email_err']='Invalid email or password';
                $this->view('pages/login',$data);
            }
            
        }
        else {
            // Load form (page page before the submit)
            $data=[
                'name' => '',
                'email' => '',
                'password' => '',
                'email_err' => ''
            ];
            $this->view('pages/login',$data);
        }
    }
    
    public function createSession($adm){
        $_SESSION['admin'] = $adm->name;
        $_SESSION['profile'] = $adm->image;
        // redirect('products/dashboard');
    }
    
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        // redirect('pages/home');
    }
}