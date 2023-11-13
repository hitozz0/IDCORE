<?php
class Home extends Controller{

    public function __construct(){
        if(!$_SESSION['login']){
            header("Location:" . BASEURL . "/login");
        }
        if ($_SESSION['role'] == 'user') {
            header('Location: ' . BASEURL . '/user');
        }
    }


    public function index(){
        $data['judul'] ='Home'; 
        $data['itm']=$this->model('Item_model')->getAllItem();  
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer'); 
    }
    public function detail($id) {
        $data['judul']='Detail';
        $data['itm']=$this->model('Item_model')->getItemById($id);        
        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah() {
        if ($this->model('Item_model')->tambahDataItem($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }
    public function hapus($id) {
        if ($this->model('Item_model')->hapusDataItem($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Item_model')->getItemById($_POST['id']));
    }
    public function ubah() {
        if ($this->model('Item_model')->ubahDataItem($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }
    public function cari()
    {
        $data['judul'] = 'Daftar Produk';
        $data['itm'] = $this->model('User_model')->cariDataItm();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
 }