<?php

class Login_model extends CI_Model {

    public function inputData($data){
        $this->db->insert('users',$data);
    }
}