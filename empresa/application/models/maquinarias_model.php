<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maquinarias_model extends CI_Model {

function guardarmaquinaria($datas12){

		$this->db->insert("maquinaria", $datas12);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function mostrarmaqui($idUsu){

		try {
			$consulta1 = $this->db->query("SELECT * FROM `maquinaria` WHERE `Usuario_idUsuario`='$idUsu'");
		    return $consulta1->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}

	public function modificarMaquinaria($idM,$datos1)
	{
		try {
		$this->db->where('idMaquinaria', $idM);
		return $this->db->update('maquinaria', $datos1); 
		} catch (Exception $e) {
			echo "eror de envio";
			exit();
		}
	}
	function mostrar($search,$usumaq){
		try {
			$consultamostrar = $this->db->query("SELECT * FROM maquinaria WHERE maquinaria.nombreMaquinaria like '%$search%' and Usuario_idUsuario='$usumaq'");
		    return $consultamostrar->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}

	}

}