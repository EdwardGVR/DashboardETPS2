<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		// $this->load->helper('url');
		// $usuario = $this->session->usuario;
		// $data = array('usuario' => $usuario);
		// $this->load->view('dashboard_view', $data);

		redirect('InversionInicial');
	}
}
