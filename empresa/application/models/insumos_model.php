<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insumos_model extends CI_Model {

	function guardarinsumo($datas){

		$this->db->insert("insumos", $datas);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function mostrarinsumo($idUsua){
		try {
			$consulta12 = $this->db->query("SELECT * FROM `insumos` WHERE `Usuario_idUsuario`='$idUsua'");
		    return $consulta12->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}

	public function modificarinsumos($idin,$datos0) {
		try {
		$this->db->where('idInsumos', $idin);
		return $this->db->update('insumos', $datos0); 
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}
}