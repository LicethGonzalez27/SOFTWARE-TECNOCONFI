<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($Documento, $password){
		$this->db->where("numeroIdentificacionUsuario", $Documento);
		$this->db->where("contraenaUsuario", $password);
		$resultados = $this->db->get("usuario");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
}