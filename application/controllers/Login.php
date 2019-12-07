<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model('Login_model');
		$this->load->helper('url');

		$this->load->view('login_view');
	}
}
