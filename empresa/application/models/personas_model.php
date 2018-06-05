<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class personas_model extends CI_Model {

	function guardarpersonas($datas){

		$this->db->insert("terceros", $datas);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

	}

	function buscarTerceros($consultas, $ids){
		
		$this->db->where("identificacionTerceros", $consultas);
		$this->db->where("Usuario_idUsuario", $ids);
		$resultados = $this->db->get("terceros");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function buscarClientes($ccCliente, $idsu){
		
		$this->db->where("identificacionTerceros", $ccCliente);
		$this->db->where("Usuario_idUsuario", $idsu);
		$this->db->where("Tipo_idTipo",'3');
		$resultados = $this->db->get("terceros");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function mostrarterceros($idUsuar){
		try {
			$consulta123 = $this->db->query("SELECT * FROM `terceros` WHERE `Usuario_idUsuario`='$idUsuar'");
		    return $consulta123->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}
	public function modificarTerceros($idter,$datos01) {
		try {
		$this->db->where('idTerceros', $idter);
		return $this->db->update('terceros', $datos01); 
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}

}