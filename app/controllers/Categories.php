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

                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'image' => $imgName,
                ];
                $test=$this->categorymodels->add($data);
                if($test){
                    redirect('categories/dashboard');
                }
                else{
                    die('Something went wrong');
                }
            }
            else  {
            $data=[
                'name' => '',
                'description' => '',
                'image' => '',

            ];
            $this->view('pages/admin/add/addcategory',$data);
            }
        }
        public function edit($id){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                $data=[

                    'id' => $id,
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'image' => $imgName,
                ];
                $test=$this->categorymodels->update($data);
                if($test){
                    redirect('pages/dashboard');
                }
                else{
                    die('Something went wrong');
                }
            }
            else  {
                $category = $this->categorymodels->get($id);
                $data=[
                    'id' => $id,
                    'name' => $category->name,
                    'description' => $category->description,
                    'image' => $category->image,
                ];
                $this->view('pages/admin/edit/editcategory',$data);
            }
        }
             public function delete($id){
            if($_SERVER['REQUEST_METHOD']=='GET'){
               
                if($this->categorymodels->Delete($id)){
                    redirect('categories/dashboard');
                }
                else{
                    die('Something went wrong');
                }
            }
            else{
                redirect('categories/dashboard');
            }
        }

    }