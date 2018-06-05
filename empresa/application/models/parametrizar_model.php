<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class parametrizar_model extends CI_Model {

function guardarterreno($datas){

		$this->db->insert("terreno", $datas);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

	}

	function buscarTerrenos($conTerrenos){
		
		$this->db->where("nombreTerreno", $conTerrenos);
		$resultados = $this->db->get("terreno");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function mostrar1($idUs){

		try {
			$consulta = $this->db->query("SELECT * FROM `terreno` where `Usuario_idUsuario`='$idUs'");
		    return $consulta->result();
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}

	public function modificar($id,$datos)
	{
		var_dump($datos);

		try {
		$this->db->where('idTerreno', $id);
		return $this->db->update('terreno', $datos); 
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}


}