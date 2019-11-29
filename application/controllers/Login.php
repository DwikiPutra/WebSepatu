<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
    }

	public function register()
	{
		$this->load->view('register_view');
    }

	public function tracking()
	{
		$this->load->view('tracking_view');
    }
    
    public function form()
    {
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $data = array(
            'name' => $name,
            'email' => 'febrianmario76@gmail.com',
            'password' => $password
        );
        $this->load->model('Login_model');
        $this->Login_model->inputData($data);
        redirect('login/index');
    }

}
