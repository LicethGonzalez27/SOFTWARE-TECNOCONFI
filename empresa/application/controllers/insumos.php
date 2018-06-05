
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insumos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('insumos_model');
	}
	
	function index(){
	$this->load->view('frontend/header');
	$this->load->view('parametrizar/parametrizarInsumos');
	$this->load->view('frontend/footer');
	}

	function guardarInsumos(){
		if ($this->input->is_ajax_request()) {
			
			$nombreinsumo = $this->input->post("nombreinsumo");
			$descrinsumo = $this->input->post("descrinsumo");
			$idUsua = $this->input->post("idUsua");
			$estado = $this->input->post("estado");	

			$datos1 = array(
					"idInsumos" => '',
					"nombreInsumos" => $nombreinsumo,
					"DetalleInsumos" => $descrinsumo,
					"Usuario_idUsuario" => $idUsua,	
					"Estado_idEstado" => $estado,				
				);
			if($this->insumos_model->guardarinsumo($datos1)==true){
				echo "Registro Guardado En Insumos";
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

	public function mostrarinsumos() {
		$buscarIdUa = $this->input->post("buscarIdUa");
		echo json_encode($this->insumos_model->mostrarinsumo($this->input->post('buscarIdUa')));
	}

	public function modificainsumos(){

		$actualizacion10 = array(
				'nombreInsumos' => $this->input->post('nomInsumo'),
				'DetalleInsumos' => $this->input->post('desInsumo'),
				'Estado_idEstado' => $this->input->post('EstadoInsumo'));
			if ($this->insumos_model->modificarinsumos($this->input->post('idInsu'),$actualizacion10)==true) {
			$datoRetornado = array('id' =>  true);
			echo json_encode($datoRetornado);
		}else{
			$datoRetornado = array('id' =>  false);
			echo json_encode($datoRetornado);
		}
	}
}