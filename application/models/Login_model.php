<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    public function validate ($u, $c) {
        $this->db->get_where()("usuarios", array('usuario' => $usuario, 'clave' => $clave));
    }
}