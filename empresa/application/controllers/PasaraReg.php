<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasaraReg extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('personas_model');
	}

	
	function index(){
	$this->load->view('frontend/header');
	$this->load->view('parametrizar/parametrizarTerceros');
	$this->load->view('frontend/footer');
	}

	function guardarTerceros(){
		if ($this->input->is_ajax_request()) {
			
			$Nombrepersona = $this->input->post("Nombrepersona");
			$Apellidospersona = $this->input->post("Apellidospersona");
			$NumeroDocumentopersona = $this->input->post("NumeroDocumentopersona");
			$Direcionpersona = $this->input->post("Direcionpersona");
			$TelefonoCelularpersona = $this->input->post("TelefonoCelularpersona");
			$tipo=  $this->input->post("tipo");
			$idUsua = $this->input->post("idUsua");
			$estado = $this->input->post("estado");	

			$datos1 = array(
					"idTerceros" => '',
					"nombreTerceros" => $Nombrepersona,
					"apellidoTerceros" => $Apellidospersona,					
					"identificacionTerceros" => $NumeroDocumentopersona, 
					"direccionTerceros" => $Direcionpersona, 
					"telefonoTerceros" => $TelefonoCelularpersona,
					"Tipo_idTipo" => $tipo,
					"Usuario_idUsuario" => $idUsua,	
					"Estado_idEstado" => $estado,	
				);
			if($this->personas_model->guardarpersonas($datos1)==true){
				//echo "Registro Guardado Personas";
			}
			else{
				//echo "No se pudo guardar los datos";
			}
		}
		else{
			show_404();
		}
	}

	function buscarTercero(){
		$consultas = $this->input->post("consultas");
		$resp1 = $this->personas_model->buscarTerceros($consultas,$this->session->userdata('id'));
		if($resp1){
			$datas = [
				"idTer" => $resp1->idTerceros,
				"nmTer" => $resp1->nombreTerceros,
				"apeTer" => $resp1->apellidoTerceros,
				"idenTer" => $resp1->identificacionTerceros,
				"direTer" => $resp1->direccionTerceros,
				"celulTer" => $resp1->telefonoTerceros,
				"tipoTer" => $resp1->Tipo_idTipo,
				"UsuarioRe" => $resp1->Usuario_idUsuario,
				"estadoTer" => $resp1->Estado_idEstado,
				"buscarTerceros"=>TRUE
			];

			$this->session->set_userdata($datas);
		}
		else{
			echo "error";
		}
	}

	function buscarCliente(){
		$ccCliente = $this->input->post("ccCliente");
		$resp1 = $this->personas_model->buscarClientes($ccCliente,$this->session->userdata('id'));
		if($resp1){
			$datas = [
				"idTer" => $resp1->idTerceros,
				"nmTer" => $resp1->nombreTerceros,
				"apeTer" => $resp1->apellidoTerceros,
				"idenTer" => $resp1->identificacionTerceros,
				"direTer" => $resp1->direccionTerceros,
				"celulTer" => $resp1->telefonoTerceros,
				"tipoTer" => $resp1->Tipo_idTipo,
				"UsuarioRe" => $resp1->Usuario_idUsuario,
				"estadoTer" => $resp1->Estado_idEstado,
				"buscarTerceros"=>TRUE
			];

			$this->session->set_userdata($datas);
		}
		else{
			echo "error";
		}
	}

	public function mostrarTerceros() {
		$buscarIdUsa = $this->input->post("buscarIdUsa");
		echo json_encode($this->personas_model->mostrarterceros($this->input->post('buscarIdUsa')));
	}

	public function modificaTerceros(){

		$actualizacion101 = array(
				'nombreTerceros' => $this->input->post('nomTercero'),
				'apellidoTerceros' => $this->input->post('apeTercero'),
				'identificacionTerceros' => $this->input->post('idenTercero'),
				'direccionTerceros' => $this->input->post('direcTercero'),
				'telefonoTerceros' => $this->input->post('teleTercero'),
				'Tipo_idTipo' => $this->input->post('tipotercero'),
				'Estado_idEstado' => $this->input->post('EstadoTercero')
				);
			if ($this->personas_model->modificarTerceros($this->input->post('idTer'),$actualizacion101)==true) {
			$datoRetornado = array('id' =>  true);
			echo json_encode($datoRetornado);
		}else{
			$datoRetornado = array('id' =>  false);
			echo json_encode($datoRetornado);
		}
	}	

}