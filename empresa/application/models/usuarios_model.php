<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model {

	function guardarUsuario($data){
		$this->db->insert("Usuario", $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

	}

	public function modificarUsuarios($idU,$datosUsuario) {
		try {
		$this->db->where('idUsuario', $idU);
		return $this->db->update('Usuario', $datosUsuario); 
		} catch (Exception $e) {
			echo "eror de consulta";
			exit();
		}
	}
	public function GuardarFoto($foto,$id){
		
		$resul='./ImagenesUsuario/'.$foto;

	$this->db->query(" UPDATE `usuario` SET `FotoUsuario`=  '".$resul."' WHERE `idUsuario`= '".$id."' ");
		if ($this->db->affected_rows() > 0) {
			return true;
			}else{
			return false;
			}
	}
	public function modificarContrasena($clave1,$id){
		
	$this->db->query(" UPDATE `usuario` SET `contraenaUsuario`=  '".$clave1."' WHERE `idUsuario`= '".$id."' ");
		if ($this->db->affected_rows() > 0) {
			return true;
			}else{
			return false;
			}
	}
}