<?php
class Item_model{
    private $table='produk';
    private $db;
    public function __construct() {
        $this->db=new Database;
    }

    public function getAllItem() {
        $this->db->query('SELECT * FROM ' .$this->table);
        return $this->db->resultSet();
    }
    public function getItemById($id) {
        $this->db->query('SELECT * FROM ' .$this->table . ' WHERE Kode_Barang=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    // public function getItemByName(){
    //     $this->db->query('SELECT * FROM ' .$this->table . ' WHERE Nama_Barang=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }
    public function tambahDataItem($data, $file) {
        $nama_gambar = $file["img"]["name"];
        $tmp_name = $file["img"]["tmp_name"];

        $tipe_gambar = explode(".", $nama_gambar);
        $tipe_gambar = end($tipe_gambar);

        $nama_gambar = uniqid();
        $nama_gambar .= ".";
        $nama_gambar .= $tipe_gambar;

        move_uploaded_file($tmp_name, "../public/img/KomponenKeyboard/" . $nama_gambar);

        $query="INSERT INTO produk (Kode_Barang, Nama_Barang, Kategori, Stok, Harga, desk, img) VALUES 
                (:Kode_Barang, :Nama_Barang, :Kategori, :Stok, :Harga, :desk, :img)";
        $this->db->query($query);
        $this->db->bind('Kode_Barang', $data['Kode_Barang']);
        $this->db->bind('Nama_Barang', $data['Nama_Barang']);
        $this->db->bind('Kategori', $data['Kategori']);
        $this->db->bind('Stok', $data['Stok']);
        $this->db->bind('Harga', $data['Harga']);
        $this->db->bind('desk', $data['desk']);
        $this->db->bind('img', $nama_gambar);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataItem($id) {
        $query="DELETE FROM produk WHERE Kode_Barang= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataItem($data, $file) {
        if ($file["img"]["error"] !=4) {
            $nama_gambar = $file["img"]["name"];
            $tmp_name = $file["img"]["tmp_name"];
    
            $tipe_gambar = explode(".", $nama_gambar);
            $tipe_gambar = end($tipe_gambar);
    
            $nama_gambar = uniqid();
            $nama_gambar .= ".";
            $nama_gambar .= $tipe_gambar;
    
            move_uploaded_file($tmp_name, "../public/img/KomponenKeyboard/" . $nama_gambar);
    
            $query="UPDATE produk SET Kode_Barang=:Kode_Barang, Nama_Barang=:Nama_Barang, Kategori=:Kategori, Stok=:Stok, Harga=:Harga, desk=:desk, img=:img WHERE Kode_Barang=:Kode_Barang";
            $this->db->query($query);
            $this->db->bind('Kode_Barang', $data['Kode_Barang']);
            $this->db->bind('Nama_Barang', $data['Nama_Barang']);
            $this->db->bind('Kategori', $data['Kategori']);
            $this->db->bind('Stok', $data['Stok']);
            $this->db->bind('Harga', $data['Harga']);
            $this->db->bind('desk', $data['desk']);
            $this->db->bind('img', $nama_gambar);
            $this->db->execute();
            return $this->db->rowCount();   
        }
        $query="UPDATE produk SET Kode_Barang=:Kode_Barang, Nama_Barang=:Nama_Barang, Kategori=:Kategori, Stok=:Stok, Harga=:Harga, desk=:desk WHERE Kode_Barang=:Kode_Barang";
            $this->db->query($query);
            $this->db->bind('Kode_Barang', $data['Kode_Barang']);
            $this->db->bind('Nama_Barang', $data['Nama_Barang']);
            $this->db->bind('Kategori', $data['Kategori']);
            $this->db->bind('Stok', $data['Stok']);
            $this->db->bind('Harga', $data['Harga']);
            $this->db->bind('desk', $data['desk']);
            $this->db->execute();
            return $this->db->rowCount();
    }
    public function pesanItem($data) {
        $query="SELECT Stok-:Stok FROM produk WHERE Kode_Barang=:Kode_Barang";
        $this->db->query($query);
        $this->db->bind('Stok', $data['Stok']);
        $this->db->bind('Kode_Barang', $data['Kode_Barang']);
        $this->db->execute();
        return $this->db->rowCount();
    }   
}