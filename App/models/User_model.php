<?php
class User_model{
    private $nama='wiznu';
    private $db;
    private $table = 'user';

    public function __construct(){
        $this->db = new Database;
    }

    public function getUser() {
        return $this->nama;
    }

    public function cobaLogin($data){
        $username = $data['username'];
        $query = 'SELECT * FROM ' . $this->table . ' WHERE username = :username';
        $this->db->query($query);
        $this->db->bind('username', $username);
        $user = $this->db->single();
        $count = $this->db->rowCount();
        
        if ($count == 0) {
            return -1;
        }
    
        $passPost = $data['password'];
        $passUser = $user['password']; // Kolom 'password' pada tabel
            
        if (password_verify($passPost, $passUser)) {
            $_SESSION['login'] = true;
            $_SESSION['role'] = $user['role']; // Set user role in the session
            return 1; // Login berhasil
        } else {
            // Kata sandi tidak cocok
            return -1;
        }
    }
    
    

    
    public function register($data){
        $query = 'INSERT INTO ' . $this->table . ' (Email, Username, Password) VALUES(:Email, :Username, :Password)';
        $haspassword = password_hash($data['Password'], PASSWORD_DEFAULT);
        $this->db->query($query);
        $this->db->bind('Email', $data['Email']);
        $this->db->bind('Username', $data['Username']);
        $this->db->bind('Password', $haspassword);
        $this->db->execute();
        return $this->db->rowCount();
        exit;   
    }

    public function logout(){
        session_destroy();
        header('Location:' . BASEURL . '/login');
        exit;
    }

    public function cariDataItm()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM produk WHERE Nama_Barang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }


}