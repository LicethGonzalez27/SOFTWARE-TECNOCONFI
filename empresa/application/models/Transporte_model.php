<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transporte_model extends CI_Model {



	function guardartransporte($datas12){

		$this->db->insert("transporte", $datas12);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrartransport($idUsu){

		try {
			$consulta1 = $this->db->query("SELECT * FROM `transporte` WHERE `Usuario_idUsuario`='$idUsu'");
		    return $consulta1->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}

	public function modificarTransporte($idM,$datos1)
	{
		try {
		$this->db->where('idTransporte', $idM);
		return $this->db->update('transporte', $datos1); 
		} catch (Exception $e) {
			echo "eror de envio";
			exit();
		}
	}

		function mostrarTransportes($searchT,$usumaq){
		try {
			$consultamostrar = $this->db->query("SELECT * FROM transporte WHERE transporte.tipoTransporte like '%$searchT%' and Usuario_idUsuario='$usumaq'");
		    return $consultamostrar->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}

	}


}