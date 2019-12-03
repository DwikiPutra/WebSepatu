<?php

class Cart_model extends CI_Model{

    public function insertCart($data)
    {
        $this->db->insert('carts',$data);
    }

    public function getCartUser($id){
        $this->db->select('
          products.*, carts.*
      ');
      $this->db->join('products', 'products.product_id = carts.product_id');
      $this->db->from('carts');
      $query = $this->db->get();
      return $query->result();
    }

    public function updateQuantity($id,$qty)
    {
        $this->db->set('quantity', $qty, FALSE);
        $this->db->where('cart_id', $id);
        $this->db->update('carts');
    }

    public function deleteById($id)
    {
        $this->db->where('cart_id', $id);
        $this->db->delete('carts');
    }
}