<?php
class Login extends Controller{
    public function __construct(){
        if (isset($_SESSION['login'])){
            header("Location: " . BASEURL . "/home");
        }
    }

    public function index(){
        $data['judul'] = "Login";

        $this->view('login/index', $data);
    }   

    public function prosesLogin(){
        $userModel = $this->model('User_model');
        $loginResult = $userModel->cobaLogin($_POST);
        
        if ($loginResult === 1) {
            if ($_SESSION['role'] == 'admin') {
                header('Location:' . BASEURL . '/home');
            } else if($_SESSION['role'] == 'user') {
                header('Location:' . BASEURL . '/user');
            } 
        } else {
            // Login gagal, arahkan kembali ke halaman login
            header('Location: ' . BASEURL . '/login');
        }
        
        
    }
    
    
    

    public function logout(){
        $this->model('User_model')->logout();
    }
}