<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegEntradas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('entradas_model');
	}
	
	function index(){
	$this->load->view('frontend/header');
	$this->load->view('Cultivo/RegistrarMovimiento');
	$this->load->view('frontend/footer');
	}


	function entra(){
		if ($this->input->is_ajax_request()) {
			
			$CanMov = $this->input->post("CanMov");
			$desMov = $this->input->post("desMov");
			$valorMov = $this->input->post("valorMov");
			$idCu = $this->input->post("idCu");
			$idTer = $this->input->post("idTer");
			$idCulti = $this->input->post("idCulti");
			$idUsua = $this->input->post("idUsua");
			
			$datos = array(
					"idMovimientoEntrada" => '',
					"CantidadMovimientoEntrada" =>$CanMov,
					"detalleMovimientoEntrada" =>$desMov,
					"valorMovimientoEntrada	" => $valorMov,
					"Cuenta_idCuenta" => $idCu,
					"Terceros_idTerceros" => $idTer, 
					"Cultivo_idCultivo" => $idCulti,
					"Usuario_idUsuario" => $idUsua, 
					
				);
			if($this->entradas_model->guardarEntra($datos)==true){
				echo "Registro Guardado";
			}
			else{
				echo "No se pudo guardar el registro";
			}
		}
		else
		{
			show_404();
		}
	}


	public function mostrarEntradas()
	{
		$buscarIdusu = $this->input->post("buscarIdusu");
		echo json_encode($this->entradas_model->mostrarentradas($this->input->post('buscarIdusu')));
	}

	public function modificarEntradas(){

		$actualizacioE = array(
				'CantidadMovimientoEntrada' => $this->input->post('cantEnt'),
				'detalleMovimientoEntrada' => $this->input->post('detaEntrada'),
				'valorMovimientoEntrada' => $this->input->post('valorEntrada')
				);
			if ($this->entradas_model->modificarEntrada($this->input->post('idEnt'),$actualizacioE)==true) {
				
			$datoRetornado = array('id' =>  true);
				echo json_encode($datoRetornado);
			}else{
				$datoRetornado = array('id' =>  false);
				echo json_encode($datoRetornado);
			}
	}

}