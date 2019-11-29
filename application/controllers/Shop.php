<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function category()
	{
		$this->load->model('Product_model');
		$data['model'] = $this->Product_model->page();
		
		$this->load->view('shop/category_view', $data);
	}
	
	public function cart()
	{
		$this->load->view('shop/cart_view');
	}
	
	public function checkout()
	{
		$this->load->view('shop/checkout_view');
	}
	
	public function detail($id, $name)
	{
		$this->load->model('Product_model');
		$data['product'] = $this->Product_model->getDataById($id);

		$this->load->view('shop/detail_view', $data);
	}

	public function confirmation()
	{
		$this->load->view('shop/confirmation_view');
	}
}
