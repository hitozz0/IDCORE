<?php
class Lp extends Controller{
    public function index() {
        $data['judul'] ='L-P'; 
        $data['usr']=$this->model('Lp_model')->getAllUser(); 
        $this->view('templates/header', $data);
        $this->view('lp/index', $data);
        $this->view('templates/footer'); 
    }
    public function detail($id) {
        $data['judul']='Detail';
        $data['usr']=$this->model('Lp_model')->getUserById($id);        
        $this->view('templates/header', $data);
        $this->view('lp/detail', $data);
        $this->view('templates/footer');
    }
    public function hapus($id) {
        if ($this->model('Lp_model')->hapusDataUser($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/lp');
            exit;
        } else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/lp');
            exit;
        }
    }
}