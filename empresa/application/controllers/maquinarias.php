<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maquinarias extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('maquinarias_model');
	}

	
	function index(){
	$this->load->view('frontend/header');
	$this->load->view('parametrizar/parametrizarMaquinaria');
	$this->load->view('frontend/footer');
	}


	function guardarMaquinaria(){
		if ($this->input->is_ajax_request()) {
			
			$nombreMaquinaria = $this->input->post("nombreMaquinaria");
			$DescrpcionMaquinaria = $this->input->post("DescrpcionMaquinaria");	
			$valorMaquinaria = $this->input->post("valorMaquinaria");
			$idUsua = $this->input->post("idUsua");
			$estado = $this->input->post("estado");			

			$datos11 = array(
					"idMaquinaria" => '',
					"nombreMaquinaria" => $nombreMaquinaria,
					"descrpcionMaquinaria" => $DescrpcionMaquinaria,
					"valorMaquinaria"=> $valorMaquinaria,
					"Usuario_idUsuario" => $idUsua,	
					"Estado_idEstado" => $estado,				
				);
			if($this->maquinarias_model->guardarmaquinaria($datos11)==true){
				echo "Registro Guardado en maquinaria";
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

	public function mostrarmaquinaria() {
		$buscarIdU = $this->input->post("buscarIdU");
		echo json_encode($this->maquinarias_model->mostrarmaqui($this->input->post('buscarIdU')));
	}

	public function modificamaquinaria()
	{

		$actualizacionMaquinaria = array(
				'nombreMaquinaria' => $this->input->post('nomMaquinaria'),
				'descrpcionMaquinaria' =>$this->input->post('desMaquinaria'),
				'valorMaquinaria' => $this->input->post('valorMaquinaria'),
				'Estado_idEstado' => $this->input->post('EstadoMaquin'));
			if ($this->maquinarias_model->modificarMaquinaria($this->input->post('idM'),$actualizacionMaquinaria)==true) {

					
			$datoRetornado = array('id' =>  true);
				echo json_encode($datoRetornado);
			}else{
				$datoRetornado = array('id' =>  false);
				echo json_encode($datoRetornado);
			}
	}

	public function mostrartiemporeal(){
		echo json_encode($this->maquinarias_model->mostrar($this->input->post('search'),$this->input->post('idusuamaq')));
	}

}