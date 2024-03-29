<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function category()
	{
		$this->load->model('Product_model');
		$data['model'] = $this->Product_model->page();
		
		$this->load->view('shop/category_view', $data);
	}
	
	public function cart($id)
	{
		$this->load->model('Cart_model');
		$data['cart'] = $this->Cart_model->getCartUser($id);
		$this->load->view('shop/cart_view', $data);
	}
	
	public function checkout($id_user)
	{
		$this->load->model('Cart_model');
		$data['cart'] = $this->Cart_model->getCartUser($id_user);
		$this->load->view('shop/checkout_view', $data);
	}
	
	public function detail($id, $name)
	{
		$this->load->model('Product_model');
		$data['product'] = $this->Product_model->getDataById($id);

		$this->load->view('shop/detail_view', $data);
	}

	public function confirmation($iduser)
	{
		$this->load->model('Cart_model');
		$data['cart'] = $this->Cart_model->getCartUser($iduser);
		$this->load->view('shop/confirmation_view', $data);
	}

	public function addCart(){
		$list = [
			'quantity' => $this->input->post('qty'),
			'total' => $this->input->post('qty'),
			'user_id' => $this->input->post('id_user'),
			'product_id' => $this->input->post('id_product')
		];

		$this->load->model('Cart_model');
		$this->Cart_model->insertCart($list);
		redirect('shop/cart/'.$this->input->post('id_user'));
	}

	public function updateCart(){
		$id = $this->input->post('id_cart');
		$qty = $this->input->post('qty');

		if($qty == 0){
			$this->deleteCart();
		}
		$this->load->model('Cart_model');
		$this->Cart_model->updateQuantity($id, $qty);
		redirect('shop/cart/'.$this->input->post('id_user'));
	}

	public function deleteCart(){
		$id = $this->input->post('id_cart');
		$this->load->model('Cart_model');
		$this->Cart_model->deleteById($id);
		redirect('shop/cart/'.$this->input->post('id_user'));
	}

	public function kategori($cat){
		$string = str_replace("-"," ",$cat);
		$this->load->model('Product_model');
		$data['model'] = $this->Product_model->getDataByBrand($string);

		$this->load->view('shop/brand_view', $data);
	}
}
