<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


    public function validate () {
        $u = $this->input->post('user');
        $c = $this->input->post('pass');

        $query = $this->db->get_where("usuarios", array('usuario' => $u, 'clave' => $c));

        return $query;
    }
}