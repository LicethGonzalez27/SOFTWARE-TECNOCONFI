<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getmovimientoAbono($fechaI,$fechaF,$idU){
		try {
			$respuestas = $this->db->query("SELECT * FROM usuario,movimientoentrada 
				INNER JOIN cultivo ON cultivo.idCultivo=movimientoentrada.Cultivo_idCultivo 
				INNER JOIN terreno ON terreno.idTerreno=cultivo.Terreno_idTerreno 
				WHERE Cuenta_idCuenta='64' and usuario.idUsuario='$idU' 
				and `fechaMovimientoEntrada` BETWEEN '$fechaI 00:00:01' AND '$fechaF 23:59:59'
			");
			return $respuestas->result();
		}
		catch (Exception $e) {
			echo "error de consulta";
			exit();
		}
	}
	public function getmovimientoCal($fechaI,$fechaF,$idU){
		try {
			$respuestas = $this->db->query("SELECT * FROM usuario,movimientoentrada 
				INNER JOIN cultivo ON cultivo.idCultivo=movimientoentrada.Cultivo_idCultivo 
				INNER JOIN terreno ON terreno.idTerreno=cultivo.Terreno_idTerreno 
				WHERE Cuenta_idCuenta='62' and usuario.idUsuario='$idU' 
				and `fechaMovimientoEntrada` BETWEEN '$fechaI 00:00:01' AND '$fechaF 23:59:59'
			");
			return $respuestas->result();
		}
		catch (Exception $e) {
			echo "error de consulta";
			exit();
		}
	}
	public function getmovimientoFungicidas($fechaI,$fechaF,$idU){
		try {
			$respuestas = $this->db->query("SELECT * FROM usuario,movimientoentrada 
				INNER JOIN cultivo ON cultivo.idCultivo=movimientoentrada.Cultivo_idCultivo 
				INNER JOIN terreno ON terreno.idTerreno=cultivo.Terreno_idTerreno 
				WHERE Cuenta_idCuenta='63' and usuario.idUsuario='$idU' 
				and `fechaMovimientoEntrada` BETWEEN '$fechaI 00:00:01' AND '$fechaF 23:59:59'
			");
			return $respuestas->result();
		}
		catch (Exception $e) {
			echo "error de consulta";
			exit();
		}
	}
	public function getmovimientoOtros($fechaI,$fechaF,$idU){
		try {
			$respuestas = $this->db->query("SELECT * FROM usuario,movimientoentrada 
				INNER JOIN cultivo ON cultivo.idCultivo=movimientoentrada.Cultivo_idCultivo 
				INNER JOIN terreno ON terreno.idTerreno=cultivo.Terreno_idTerreno 
				WHERE Cuenta_idCuenta='65' and usuario.idUsuario='$idU' 
				and `fechaMovimientoEntrada` BETWEEN '$fechaI 00:00:01' AND '$fechaF 23:59:59'
			");
			return $respuestas->result();
		}
		catch (Exception $e) {
			echo "error de consulta";
			exit();
		}
	}
		public function getmovimientoJornales($fechaI,$fechaF,$idU){
		try {
			$respuestas = $this->db->query("SELECT * 
				FROM usuario,movimientoentrada 
				INNER JOIN cultivo ON cultivo.idCultivo=movimientoentrada.Cultivo_idCultivo 
				INNER JOIN terreno ON terreno.idTerreno=cultivo.Terreno_idTerreno 
				WHERE Cuenta_idCuenta='68' and usuario.idUsuario='$idU' 
				and `fechaMovimientoEntrada` BETWEEN '$fechaI 00:00:01' AND '$fechaF 23:59:59'
			");
			return $respuestas->result();
		}
		catch (Exception $e) {
			echo "error de consulta";
			exit();
		}
	}
	
	public function getmovimientoVentas($fechaI,$fechaF,$idU){
		try {


			$respuestas = $this->db->query("SELECT SUM(valorMovimientoEntrada) as 'Valor'
			FROM usuario,movimientoentrada 
			INNER JOIN cultivo ON cultivo.idCultivo=movimientoentrada.Cultivo_idCultivo 
			INNER JOIN terreno ON terreno.idTerreno=cultivo.Terreno_idTerreno 
			WHERE Cuenta_idCuenta='9' and  usuario.idUsuario='$idU' 
			and `fechaMovimientoEntrada` BETWEEN '$fechaI 00:00:01' AND '$fechaF 23:59:59'
			");
			if ($respuestas->num_rows()>0) {
				return $respuestas->result();
			}			
		}
		catch (Exception $e) {
			echo "error de consulta";
			exit();
		}
	}
	
}

/* End of file ReportesModel.php */
/* Location: ./application/models/ReportesModel.php */


