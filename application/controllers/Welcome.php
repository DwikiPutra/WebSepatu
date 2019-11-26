<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$lProduct = $this->getLatestPro();
		$cProduct = $this->getComingPro();

		$data = [
			'lProduct' => $lProduct,
			'cProduct' => $cProduct 
		];

		$this->load->view('home', $data);
	}

	public function getLatestPro()
	{
		$this->load->model('Product_model');
		return $this->Product_model->getLatestProduct()->result();
	}

	public function getComingPro()
	{
		$this->load->model('Product_model');
		return $this->Product_model->getComingProduct()->result();
	}
}
