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
    
    public function formRegister()
    {
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'required|matches[password]');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('register_view');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $passconf = $this->input->post('passwordconf');

            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => md5($password)
            );

            $this->load->model('User_model');
            $this->User_model->inputData($data);
            redirect('welcome/index');

        }
    }
    
    public function formLogin(){
        $name = $this->input->post('name');
        $password = $this->input->post('password');

        $this->load->model('User_model');
        $row = $this->User_model->cekData($name, md5($password));
        if($row == 1){
            $id = $this->User_model->getUserId($name);

            $this->session->set_userdata('username', $name);
            $this->session->set_userdata('userid', $id);

            redirect(base_url());
        } else {
            redirect('login/index');
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_id');

        redirect(base_url());
    }
}
