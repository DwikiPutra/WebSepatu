<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function kontak()
	{
		$this->load->view('contact_view');
	}
}
