<?php
    class categories extends Controller{
        public $categorymodels;
        public function __construct(){
            $this->categorymodels=$this->model('category');
        }
        public function dashboard(){
            $categories = $this->categorymodels->List();
            $data = [
                'categories' => $categories
            ];
            $this->view('pages/admin/categories',$data);
        }
        public function list(){
            $categories = $this->categorymodels->List();
            $data = [
                'categories' => $categories
            ];
            $this->view('pages/admin/list',$data);
        }
        public function add(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                $data=[

                    'nom' => $_POST['nom'],
                    'description' => $_POST['description'],
                    'photo' => $_FILES['photo'],
                ];
                $test=$this->categorymodels->add($data);
                if($test){
                    redirect('pages/dashboard');
                }
                else{
                    die('Something went wrong');
                }
            }
            else  {
            $data=[
                'nom' => '',
                'description' => '',
                'photo' => '',

            ];
            // $this->view('pages/addcategory',$data);
        }
    }
}