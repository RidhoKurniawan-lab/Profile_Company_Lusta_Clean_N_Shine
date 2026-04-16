<?php
class User_Model {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    // public function select($username){
    //     $this->db->query("SELECT * FROM account WHERE username = :username");
    //     $this->db->bind(':username', $username);
    //     return $this->db->single();
    // }
}