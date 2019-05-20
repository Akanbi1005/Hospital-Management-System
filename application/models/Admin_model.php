<?php
class Admin_model extends CI_Model {

    public function userData($user_id){
        $query = $this->db->query("
            SELECT p.*, s.* FROM signup s
            LEFT JOIN patient p ON s.Email = p.email
            WHERE s.id = $user_id
        ");
        
        return $result = $query->row_array();
    }
    public function userinfo($email){
        $query = $this->db->query("
            SELECT * from complains WHERE email = '$email'
        ");
        
        return $result = $query->row_array();
    }
    
    public function joininfo($idcard){
        $query = $this->db->query("
            SELECT s.*, p.* FROM doc p
            LEFT JOIN patient s ON s.idcard = p.idcard
            WHERE s.idcard = '$idcard'
        ");
        
        return $result = $query->row_array();
    }
    
}