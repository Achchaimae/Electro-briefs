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
            $this->view('pages/admin/products',$data);
        }
        public function user(){
            $products = $this->productmodels->List();
            $categories = $this->productmodels->category();
            $data = [
                'products' => $products,
                'categories' => $categories
            ];
            $this->view('pages/product',$data);
        }
        public function cart($id){
            $products = $this->productmodels->get($id);
            $data = [
                'libelle' => $products->libelle,
                'price' => $products->prix_final,
                'image' => $products->image,
                'description' => $products->description,
                'id' => $products->id,
                'ref' => $products->ref,
                'code_barre' => $products->code_barre,
                'prix_achat' => $products->prix_achat,
                'prix_offre' => $products->prix_offre,
                'quantite' => $products->quantite,
            ];
            $this->view('pages/user/cart',$data);
        }
        public function listascend(){
            $products = $this->productmodels->listascend();
            $categories = $this->productmodels->category();
            $data = [
                'products' => $products,
                'categories' => $categories
            ];
            $this->view('pages/product',$data);
        }
        public function aboutProduct($id){
            $products = $this->productmodels->get($id);
            $data = [
                'name' => $products->libelle,
                'price' => $products->prix_final,
                'image' => $products->image,
                'description' => $products->description,
                'id' => $products->id,
                'ref' => $products->ref,
                'code_barre' => $products->code_barre,
                'prix_achat' => $products->prix_achat,
                'prix_offre' => $products->prix_offre,
                'quantite' => $products->quantite,
            ];
      
            $this->view('pages/aboutProduct', $data);
          }
        public function listdescend(){
            $products = $this->productmodels->listdescend();
            $categories = $this->productmodels->category();
            $data = [
                'products' => $products,
                'categories' => $categories
            ];

            $this->view('pages/product',$data);
        }
        public function listbycategory($id){
            $products = $this->productmodels->listbycategory($id);
            $data = [
                'products' => $products,
            ];
            $this->view('products/user',$data);
        }
        public function addproduct(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
            
                $imgName = $_FILES['img']['name'];
                $imgTmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($imgTmp, 'img/upload/' . $imgName);

                $getCategoryByName = $this->productmodels->getCategoryByName($_POST['category']);


                $data= [
                    //  ref	libelle	code_barre	prix_achat	prix_final	prix_offre	quantite	description	image	categorie_id	

                    'ref' => $_POST['ref'],
                    'libelle' => $_POST['libelle'],
                    'code_barre' => $_POST['code_barre'],
                    'prix_achat' => $_POST['prix_achat'],
                    'prix_final' => $_POST['prix_final'],
                    'prix_offre' => $_POST['prix_offre'],
                    'quantite' => $_POST['quantite'],
                    'description' => $_POST['description'],
                    'image' => $imgName,
                    'categorie' => $getCategoryByName->id,
                       
                ];

                $test=$this->productmodels->addproduct($data);
                if($test){
                    redirect('products/dashboard');
                }
                else{
                    die('Something went wrong');
                }

            }
            else  {
                
                $categories = $this->productmodels->category();
                $data=[
                    'ref' => '',
                    'libelle' => '',
                    'code_barre' => '',
                    'prix_achat' => '',
                    'prix_final' => '',
                    'prix_offre' => '',
                    'quantite' => '',
                    'description' => '',
                    'image' => '',
                    'categorie' => '',
                    'categories' => $categories,
                ];
                
                $this->view('pages/admin/add/addproduct',$data);
            }
        }
        public function update(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imgTmp, 'img/upload/' . $imgName);
                $data= [
                    'id' => $_POST['id'],
                    'ref' => $_POST['ref'],
                    'libelle' => $_POST['libelle'],
                    'code_barre' => $_POST['code_barre'],
                    'prix_achat' => $_POST['prix_achat'],
                    'prix_final' => $_POST['prix_final'],
                    'prix_offre' => $_POST['prix_offre'],
                    'quantite' => $_POST['quantite'],
                    'description' => $_POST['description'],
                    'image' => $_FILES['image'],
                    'categorie_id' => $_POST['categorie_id'],
                ];
                $test=$this->productmodels->update($data);
                if($test){
                    redirect('pages/dashboard');
                }
                else{
                    die('Something went wrong');
                }

            }
            else  {
                $data=[
                    'id' => '',
                    'ref' => '',
                    'libelle' => '',
                    'code_barre' => '',
                    'prix_achat' => '',
                    'prix_final' => '',
                    'prix_offre' => '',
                    'quantite' => '',
                    'description' => '',
                    'image' => '',
                    'categorie_id' => '',
                ];
                $this->view('pages/updateproduct',$data);
        }
        }
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            if ($this->productmodels->Delete($id)) {
                redirect('Products/dashboard');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('Products/dashboard');
        }
    }
    }
