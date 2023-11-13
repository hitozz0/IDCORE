<?php
class User extends Controller{
    public function index() {
        $data['judul'] ='User';
        $data['itm']=$this->model('Item_model')->getAllItem();  
        $this->view('user/index', $data);
    }

    public function produck($id) {
        $data['judul'] ='produck';
        $data['itm']=$this->model('Item_model')->getItemById($id); 
        $this->view('user/produck', $data);
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Produk';
        $data['itm'] = $this->model('User_model')->cariDataItm();
        $this->view('user/index', $data);
    }
}