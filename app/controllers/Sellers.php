<?php
    class Sellers extends Controller{

        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->sellerModel=$this->model('Seller');
        }

        public function advertisements(){
            //Get advertisements
            $advertisements=$this->sellerModel->getadvertisements();



            $data = [
                'advertisements' => $advertisements
              ];
             
              $this->view('sellers/advertisements', $data);
        }

        //Add product
        public function advertise(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Sanitize POST array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'user_email' => $_SESSION['user_email'],
                    'title' => trim($_POST['title']),
                    'description' => trim($_POST['description']),
                    'price' => trim($_POST['price']),
                    'condition' => trim($_POST['condition']),
                    // 'image1' => trim($_POST['image1']),
                    // 'image2' => trim($_POST['image2']),
                    // 'image3' => trim($_POST['image3']),
                    'brand' => trim($_POST['brand']),
                    'model' => trim($_POST['model']),
                    'type'=> 'fixed_price',
                    'category' =>trim($_POST['category']),
                    'title_err' => '',
                    'description_err' => '',
                    'price_err' => '',
                    'condition_err' => '',
                    'image1_err' => '',
                    'image2_err' => '',
                    'image3_err' => '',
                    'brand_err' => '',
                    'model_err' => '',
                    'category_err' => ''
                ];

                //Validate data
                if(empty($data['title'])){
                    $data['title_err'] = 'Please enter title';
                }
                if(empty($data['description'])){
                    $data['description_err'] = 'Please enter description';
                }
                if(empty($data['price'])){
                    $data['price_err'] = 'Please enter price';
                }
                if(empty($data['category'])){
                    $data['category_err'] = 'Please enter category';
                }
                if(empty($data['condition'])){
                    $data['condition_err'] = 'Please enter condition';
                }
                // if(empty($data['image1'])){
                //     $data['image1_err'] = 'Please enter image1';
                // }
                // if(empty($data['image2'])){
                //     $data['image2_err'] = 'Please enter image2';
                // }
                // if(empty($data['image3'])){
                //     $data['image3_err'] = 'Please enter image3';
                // }
                if(empty($data['brand'])){
                    $data['brand_err'] = 'Please enter brand';
                }
                if(empty($data['model'])){
                    $data['model_err'] = 'Please enter model';
                }


                //Make sure no errors
                if(empty($data['title_err']) && empty($data['description_err']) && empty($data['price_err'])  && empty($data['condition_err']) && empty($data['image1_err']) && empty($data['image2_err']) && empty($data['image3_err']) && empty($data['brand_err']) && empty($data['model_err'])){
                    //Validated
                    if($this->sellerModel->advertise($data)){
                        flash('product_message', 'Product Added');
                        redirect('sellers/advertisements');
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    //Load view with errors
                    $this->view('sellers/advertise', $data);
                }

            } else {
                $data = [
                    'user_email' => '',
                    'title' => '',
                    'description' => '',
                    'price' => '',
                    'condition' => '',
                    'image1' => '',
                    'image2' => '',
                    'image3' => '',
                    'brand' => '',
                    'model' => '',
                    'category' =>'',
                    'title_err' => '',
                    'description_err' => '',
                    'price_err' => '',
                    'condition_err' => '',
                    'image1_err' => '',
                    'image2_err' => '',
                    'image3_err' => '',
                    'brand_err' => '',
                    'model_err' => '',
                    'category_err' => ''
                ];
                

                $this->view('sellers/advertise', $data);
            }

            $data = [
                'title' => '',
                'body'=>''
              ];
             
              $this->view('sellers/advertise', $data);
        }
        
    }