<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametrizar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('parametrizar_model');
	}

	
	function index(){
	$this->load->view('frontend/header');
	$this->load->view('parametrizarvista');
	$this->load->view('frontend/footer');
	}


	function guardarTerreno(){
		if ($this->input->is_ajax_request()) {
			
			$areaTerrenos = $this->input->post("areaTerrenos");
			$nombreTerrenos = $this->input->post("nombreTerrenos");
			$DescripcionTerreno = $this->input->post("DescripcionTerreno");			
			$idUsua = $this->input->post("idUsua");
			$estado = $this->input->post("estado");	
			$datos1 = array(
					"idTerreno" => '',
					"areaTerreno" => $areaTerrenos,
					"nombreTerreno" => $nombreTerrenos,
					"DescripcionTerreno" => $DescripcionTerreno,
					"Usuario_idUsuario" => $idUsua,	
					"Estado_idEstado" => $estado,		
				);
			if($this->parametrizar_model->guardarterreno($datos1)==true){
				//echo "Registro Guardado terreno";
			}
			else{
				//echo "No se pudo guardar los datos";
			}
		}
		else
		{
			show_404();

		}
	}

	function buscarTerreno(){
		$conTerreno = $this->input->post("conTerreno");
		$resp1 = $this->parametrizar_model->buscarTerrenos($conTerreno);
		if($resp1){
			$datas1 = [
				"idTerre" => $resp1->idTerreno,
				"nomTerre" => $resp1->nombreTerreno,
				"areT" => $resp1->areaTerreno,
				"desT" => $resp1->DescripcionTerreno,
				"buscarTerrenos"=>TRUE
			];

			$this->session->set_userdata($datas1);
		}
		else{
			echo "error";
		}
	}

	function buscaTerreno(){
		
		$busTerreno = $this->input->post("busTerreno");
		$buscarIda = $this->input->post("buscarIda");
		$resp11 = $this->parametrizar_model->busrTerrenos($busTerreno,$buscarIda);
		if($resp11){
			$datas11 = [
				"idTerreno" => $resp11->idTerreno,
				"nomTerren0" => $resp11->nombreTerreno,
				"areaTerreno" => $resp11->areaTerreno,
				"descripcionTerreno" => $resp11->DescripcionTerreno,
				"fechaTerreno"=> $resp11->fechaTerreno,
				"Usuario_idUsuarioTErre"=> $resp11->Usuario_idUsuario,
				"Estado_idEstado"=> $resp11->Estado_idEstado,
				"busrTerrenos"=>TRUE
			];
			$this->session->set_userdata($datas11);
		}
		else{
			echo "error";
		}
	}	


	public function mostrar()
	{
		$buscarId = $this->input->post("buscarId");
		echo json_encode($this->parametrizar_model->mostrar1($this->input->post('buscarId')));
	}
	public function modificarTerreno()	{

		$actualizacion = array(
				'nombreTerreno' => $this->input->post('NombreTerreno'),
				'areaTerreno' => $this->input->post('AreaTerreno'),
				'DescripcionTerreno' => $this->input->post('descripcionTerreno'),
				'Estado_idEstado' => $this->input->post('Estado'));
			if ($this->parametrizar_model->modificar($this->input->post('idt'),$actualizacion)==true) {
				
			$datoRetornado = array('id' =>  true);
			echo json_encode($datoRetornado);
		}else{
			$datoRetornado = array('id' =>  false);
			echo json_encode($datoRetornado);
		}
	}



}