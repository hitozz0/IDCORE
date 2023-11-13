<?php
class Item_detail extends Controller{
    public function index(){
        $data['judul'] ='item-detail'; 
        $data['itm']=$this->model('Item_model')->getItemById($id); 
        $this->view('templates/header', $data);
        $this->view('Item_detail/index', $data);
        $this->view('templates/footer'); 
    }
}