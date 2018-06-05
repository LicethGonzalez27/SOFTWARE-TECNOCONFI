<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas_model extends CI_Model {

	function buscarCuentas($prop){
		
		$this->db->where("codigoCuenta",$prop);
		$resultados = $this->db->get("cuenta");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function buscarCuentasIns($propIn){
		
		$this->db->where("codigoCuenta",$propIn);
		$resultados = $this->db->get("cuenta");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function buscarCuentasRecurs($propRecur){
		
		$this->db->where("codigoCuenta",$propRecur);
		$resultados = $this->db->get("cuenta");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function buscarCuentasTransp($propTrans){
		
		$this->db->where("codigoCuenta",$propTrans);
		$resultados = $this->db->get("cuenta");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}

	function buscarCuentasVentas($CVenta){
		
		$this->db->where("codigoCuenta",$CVenta);
		$resultados = $this->db->get("cuenta");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}		
	}
}