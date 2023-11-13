<?php
class Lp_model{
    private $table='user';
    private $db;
    public function __construct() {
        $this->db=new Database;
    }

    public function getAllUser() {
        $this->db->query('SELECT * FROM ' .$this->table);
        // $this->db->bind('role','user');
        return $this->db->resultSet();
    }
    public function getUserById($id) {
        $this->db->query('SELECT * FROM ' .$this->table . ' WHERE ID_user=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function hapusDataUser($id) {
        $query="DELETE FROM user WHERE ID_user= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}