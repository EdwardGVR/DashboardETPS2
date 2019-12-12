<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('login_view');
	}
	
	public function validar() {
		$this->load->helper('url');
		$this->load->model('Login_model', '', TRUE);
		
		$result = $this->Login_model->validate();
		$result_count = $this->Login_model->validate()->num_rows();

		if ($result_count > 0) {
			$sess_data = array(
				'usuario'  => $result->row()->usuario,
				'nivel'     => $result->row()->nivel,
				'logged' => TRUE
			);

			$this->session->set_userdata($sess_data);
			redirect('Inicio');
		} else {
			redirect('Login');
		}
	}

	public function logout () {
		session_destroy();
		redirect('Login');
	}
}
