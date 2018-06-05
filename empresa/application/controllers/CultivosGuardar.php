<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CultivosGuardar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cultivos_model');
	}

	
	function index(){
	$this->load->view('frontend/header');
	$this->load->view('Cultivo/RegistrarCultivo');
	$this->load->view('frontend/footer');
	}


	function guardarCultivo(){
		if ($this->input->is_ajax_request()) {
			
			$nombreCultivo = $this->input->post("nombreCultivo");	
			$desCultivo = $this->input->post("desCultivo");			
			$idUsu = $this->input->post("idUsu");	
			$idTerre = $this->input->post("idTerre");	


			$datos120 = array(
					"idCultivo" => '',
					"nombreCultivo" => $nombreCultivo,
					"descripcionCultivo	" => $desCultivo,
					"Usuario_idUsuario" => $idUsu,
					"Terreno_idTerreno" => $idTerre,
				);
			if($this->Cultivos_model->guardarCultivos($datos120)==true){
				echo "Registro Guardado En Cultivo";
			}
			else{
				echo "No se pudo guardar los datos";
			}
		}
		else
		{
			show_404();

		}
	}
	function buscarCultivo(){
		$concultivo = $this->input->post("concultivo");
		$resp1 = $this->Cultivos_model->buscarCultivos($concultivo,$this->session->userdata('id'));
		if($resp1){
			$datas120 = [
				"idCulti" => $resp1->idCultivo,
				"nomCulti" => $resp1->nombreCultivo,
				"desCulti" => $resp1->descripcionCultivo,
				"buscarCultivos"=>TRUE
			];

			$this->session->set_userdata($datas120);
		}
		else{
			echo "error";
		}
	}

	function bCultivos(){
		$nombreCultivo = $this->input->post("nombreCultivo");
		$resp1 = $this->Cultivos_model->busCultivos($nombreCultivo,$this->session->userdata('id'));
		if($resp1){
			$datas120 = [
				"idCulti" => $resp1->idCultivo,
				"nomCulti" => $resp1->nombreCultivo,
				"desCulti" => $resp1->descripcionCultivo,
				"busCultivos"=>TRUE
			];

			$this->session->set_userdata($datas120);
		}
		else{
			echo "error";
		}
	}


	public function mostrarcultivos()
	{
		$buscarIdu = $this->input->post("buscarIdu");
		echo json_encode($this->Cultivos_model->mostrarCultivos($this->input->post('buscarIdu')));
	}

	public function modificarcultivos(){

		$actualizaci = array(
				'nombreCultivo' => $this->input->post('nomCultivo'),
				'descripcionCultivo' => $this->input->post('desCultivo')
				);
			if ($this->Cultivos_model->modificarCultivos($this->input->post('idCul'),$actualizaci)==true) {
			$datoRetornado = array('id' =>  true);
			echo json_encode($datoRetornado);
		}else{
			$datoRetornado = array('id' =>  false);
			echo json_encode($datoRetornado);
		}
	}	
	

	
}