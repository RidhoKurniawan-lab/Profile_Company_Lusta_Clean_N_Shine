<?php

class AdminController extends Controller
{
    private $model_user;
    private $model_contact;

    public function __construct() {
    $this->model_user = $this->model('User_Model');
    $this->model_contact = $this->model('Contact_Model');
    }
    public function index()
    {
        $this->view("admin/login");
    }

    public function contact(){

        $this->view('admin/contact_form');
    }
    public function product(){

        $this->view('admin/product');
    }

    public function get_contact(){
        $data = $this->model_contact->get();
        echo json_encode($data);
    }

    public function delete_contact(){
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            header('Content-Type: application/json');
            $get = json_decode(file_get_contents('php://input'), true);

            $id = (int) $get['id'] ?? null;

            if($id === null) return;

            $status = false;

            $data = $this->model_contact->delete($id);

            if($data) $status = true;

            $response = [
                'success' => $status,
            ];

            echo json_encode($response);
        }
    }

    public function login(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['username']) && isset($_POST['password'])) {

                    header('Content-Type: application/json');
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $data = $this->model_user->select($username);

                    $username_axist = $data ? true : false ;

                    if ($username_axist) {
                        $verify = password_verify($password, $data['password']);
                    }else{
                        $verify = false;
                    }
                    $password_axist = $verify ? true : false ;

                    $response = [
                    'username' => $username_axist,
                    'password' => $password_axist
                    ];

                    echo json_encode($response);
                }
            }

    }

}

// logout 
    // session_start();
    // session_unset();
    // session_destroy();
    // header("Location: /login");
    // exit;