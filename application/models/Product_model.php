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

    public function page(){
        $this->load->library('pagination');

        $query = "SELECT * FROM products WHERE deskripsi = 'Latest Product'";

        $config['base_url'] = base_url('shop/category');
        $config['total_rows'] = $this->db->query($query)->num_rows();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        $config['num_links'] = 1;
        
        $config['cur_tag_open']    = '<a href="#" class="active">';
        $config['cur_tag_close']   = '</a>';

        $config['next_link']       = ' <i class="fa fa-long-arrow-right" aria-hidden="true"></i> ';
        $config['prev_link']       = ' <i class="fa fa-long-arrow-left" aria-hidden="true"></i> ';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
        $query .= " LIMIT ".$page.", ".$config['per_page'];
        $data['limit'] = $config['per_page'];
        $data['total_rows'] = $config['total_rows'];
        $data['pagination'] = $this->pagination->create_links();
        $data['product'] = $this->db->query($query)->result();

        return $data;
    }

    public function getDataById($id){
        $query = $this->db->query('SELECT * FROM products WHERE product_id = '. $id);
        return $query->row();
    }

    public function getDataByBrand($cat){
        $this->db->where('brand', $cat);
        $this->db->where('deskripsi', 'Latest Product');
        $query = $this->db->get('products');
        return $query->result();
    }
}