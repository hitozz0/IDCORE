<?php
class Order extends Controller{
    public function index() {
        $data['judul'] ='order'; 
        // $this->view('templates/header', $data);
        $this->view('order/index', $data);
        // $this->view('templates/footer'); 
    }
    public function beli() {
        if ($this->model('Item_model')->pesanItem($_POST) > 0) {
            Flasher::setFlash('berhasil', 'dipesan', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else{
            Flasher::setFlash('gagal', 'dipesan', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;
        }
    }
}