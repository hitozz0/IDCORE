<?php
class regist extends Controller{
    public function index(){
        $data['judul'] = "Regist";

        $this->view('regist/index', $data);
    }

    public function regist(){
        $this->model('User_model')->register($_POST);
        header('Location:' . BASEURL . '/login');
        exit;
    }

}