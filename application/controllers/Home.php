<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    // main page website
    public function index   ()
    {
        $data = array('title' => 'Web Sepatu - Ecommerce', 'isi' => 'home');
    }
}