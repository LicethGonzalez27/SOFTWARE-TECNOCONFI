<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cultivos_model extends CI_Model {

	function guardarCultivos($datasa){

		$this->db->insert("cultivo", $datasa);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function buscarCultivos($conCultivos,$idU){
		
		$this->db->where("nombreCultivo", $conCultivos);
		$this->db->where("Usuario_idUsuario", $idU);
		$resultados = $this->db->get("cultivo");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}
	function busCultivos($nombreCultivo,$idUsua){
		
		$this->db->where("nombreCultivo", $nombreCultivo);
		$this->db->where("Usuario_idUsuario", $idUsua);
		$resultados = $this->db->get("cultivo");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function mostrarCultivos($idUsu){

		try {
			$consulta1234 = $this->db->query("SELECT * FROM `cultivo` WHERE `Usuario_idUsuario`='$idUsu'");
		    return $consulta1234->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}

	public function modificarCultivos($idCul,$datos010) {
		try {
		$this->db->where('idCultivo', $idCul);
		return $this->db->update('cultivo', $datos010); 
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}

}