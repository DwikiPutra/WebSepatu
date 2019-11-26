<?php

class Product_model extends CI_Model{

    public function getLatestProduct(){
        $query = $this->db->query('SELECT * FROM products WHERE deskripsi = "Latest Product" LIMIT 8');
        return $query;
    }

    public function getComingProduct(){
        $query = $this->db->query('SELECT * FROM products WHERE deskripsi = "Coming Product" LIMIT 8');
        return $query;
    }
}