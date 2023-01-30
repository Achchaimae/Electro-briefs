<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'electro-briefs',
      ];
     
      $this->view('pages/index', $data);
    }

    public function product(){
      $data = [
        'title' => 'Product',
      ];

      $this->view('pages/product', $data);
    }
    public function dashboard(){
      $data = [
        'title' => 'Dashboard',
      ];

      $this->view('pages/admin/dashboard', $data);
    }
    
  }