<?php
class Contact_Model {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    // public function get(){
    //     $this->db->query("SELECT * FROM contact ORDER BY create_at DESC");
    //     return $this->db->resultSet();
    // }

    // public function insert($name, $email, $message){
    //     $this->db->query("INSERT INTO contact (name, email, message) VALUE (:name, :email, :message)");
    //     $this->db->bind(':name', $name);
    //     $this->db->bind(':email', $email);
    //     $this->db->bind(':message', $message);
    //     return $this->db->execute();
    // }

    // public function delete($id){
    //     $this->db->query("DELETE FROM contact WHERE id_contact = :id");
    //     $this->db->bind(':id', $id);
    //     return $this->db->execute();
    // }
}