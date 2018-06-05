<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesModelCal extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getmovimiento()	{
		try {
			$respuestas = $this->db->query("SELECT * FROM `movimientoentrada` 
				INNER JOIN cultivo ON cultivo.idCultivo=movimientoentrada.Cultivo_idCultivo
				INNER JOIN 	terreno ON 	terreno.idTerreno=cultivo.Terreno_idTerreno
				WHERE Cuenta_idCuenta='64'
			");
			return $respuestas->result();
		}
		catch (Exception $e) {
			echo "error de consulta";
			exit();
		}
	}
	
	
	
	

}

/* End of file ReportesModel.php */
/* Location: ./application/models/ReportesModel.php */

