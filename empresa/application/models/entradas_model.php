<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class entradas_model extends CI_Model {

	function guardarEntra($data){

		$this->db->insert("movimientoentrada", $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function mostrarentradas($idUsuari){

		try {
			$consulta12345 = $this->db->query("SELECT * FROM `movimientoentrada` where `Usuario_idUsuario`='$idUsuari'");
		    return $consulta12345->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}
	 public function modificarEntrada($idE,$dato10) {
		try {
		$this->db->where('idMovimientoEntrada', $idE);
		return $this->db->update('movimientoentrada', $dato10); 
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}
	

}