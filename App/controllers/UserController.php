<?php

class UserController extends Controller {
    // private $model_contact;

    // public function __construct() {
    // // $this->model_contact = $this->model('contact_Model');
    // }
    
    public function index() {
        $this->view("users/home");
    }

    public function product(){
        $this->view("users/product");
    }
    public function about(){
        $this->view("users/about");
    }
    public function detail(){
        $this->view("users/detail");
    }
    public function contact(){
        $this->view("users/contact");
    }

    // public function contact_form(){

    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    //             header('Content-Type: application/json');

    //             $name = $_POST['name'];
    //             $email = $_POST['email'];
    //             $message = $_POST['message'];

    //             $data = $this->model_contact->insert($name, $email, $message);

    //             if ($data) {

    //                 $response = [
    //                     'status' => true
    //                 ];
    //                 echo json_encode($response);
    //             }else{
    //                 echo json_encode(['status' => false]);
    //             }
    //         }
    //     }
    // }
    
}