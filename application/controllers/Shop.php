<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function category()
	{
		$this->load->view('shop/category_view');
	}
	
	public function cart()
	{
		$this->load->view('shop/cart_view');
	}
	
	public function checkout()
	{
		$this->load->view('shop/checkout_view');
	}
	
	public function detail()
	{
		$this->load->view('shop/detail_view');
	}

	public function confirmation()
	{
		$this->load->view('shop/confirmation_view');
	}
}
