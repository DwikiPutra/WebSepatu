<?php

class User_model extends CI_Model {

    public function inputData($data){
        $this->db->insert('users',$data);
    }

    public function cekData($name, $pass){
        $query = $this->db->get_where('users', array('name' => $name, 'password' => $pass));
        return $query->num_rows();
    }

    public function getUserId($name){
        $query = $this->db->get_where('users', array('name' => $name));
        $id = $query->row();
        return $id->users_id;
    }
}