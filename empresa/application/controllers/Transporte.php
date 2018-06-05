<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transporte extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Transporte_model');
	}

	function index(){
	$this->load->view('frontend/header');
	$this->load->view('Parametrizar/parametrizarTransporte');
	$this->load->view('frontend/footer');
	}

	function guardarTransporte(){
		if ($this->input->is_ajax_request()) {
			
			$tipoTranporte = $this->input->post("tipoTranporte");
			$descripcionTransporte = $this->input->post("descripcionTransporte");	
			$valorTransporte = $this->input->post("valorTransporte");
			$idUsuariot = $this->input->post("idUsuariot");
			$estadot = $this->input->post("estadot");			

			$datos11 = array(
					"idTransporte" => '',
					"tipoTransporte" => $tipoTranporte,
					"descripcionTransporte" => $descripcionTransporte,
					"valorTransporte"=> $valorTransporte,
					"Usuario_idUsuario" => $idUsuariot,	
					"Estado_idEstado" => $estadot,				
				);
			if($this->Transporte_model->guardartransporte($datos11)==true){
				echo "Registro Guardado en Transporte Propio";
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

	public function mostrartransporte() {
		echo json_encode($this->Transporte_model->mostrartransport($this->input->post('buscarIdUar')));
	}
	public function modificatransporte()	{

		$actualizacionTransporte = array(
				'tipoTransporte' => $this->input->post('tipoTransporte'),
				'descripcionTransporte' =>$this->input->post('descripcionTransporte'),
				'valorTransporte' => $this->input->post('valorTransporte'),
				'Estado_idEstado' => $this->input->post('EstadoTrans'));
			if ($this->Transporte_model->modificarTransporte($this->input->post('idT'),$actualizacionTransporte)==true) {
				
			$datoRetornado = array('id' =>  true);
				echo json_encode($datoRetornado);
			}else{
				$datoRetornado = array('id' =>  false);
				echo json_encode($datoRetornado);
			}
	}
	public function mostrartiemporealTransporte(){
		echo json_encode($this->Transporte_model->mostrarTransportes($this->input->post('searchTransporte'),$this->input->post('idusuaTrans')));
	}

	
}
