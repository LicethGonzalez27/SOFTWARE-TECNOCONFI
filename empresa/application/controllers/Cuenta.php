<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cuentas_model');
	} 


	function index(){
	$this->load->view('frontend/header');
	$this->load->view('Parametrizar/consulTerreno');
	$this->load->view('frontend/footer');
	}

	function buscarCuenta(){

		$prop = $this->input->post("prop");
		$resp1 = $this->Cuentas_model->buscarCuentas($prop);
		if($resp1){
			$datas01 = [
				"idCuents" => $resp1->idCuenta,
				"codigoCuent" => $resp1->codigoCuenta,
				"nombreCuent" => $resp1->nombreCuenta,
				"Descripcion_Cuent" => $resp1->descripcionCuenta,
				"buscarCuentas"=>TRUE
			];
			$this->session->set_userdata($datas01);
		}
		else{
			echo "error";
		}		
	}

	function buscarCuentasIn(){
		$propIn = $this->input->post("propIn");
		$resp1 = $this->Cuentas_model->buscarCuentasIns($propIn);
		if($resp1){
			$datas01 = [
				"idCuents" => $resp1->idCuenta,
				"codigoCuent" => $resp1->codigoCuenta,
				"nombreCuent" => $resp1->nombreCuenta,
				"Descripcion_Cuent" => $resp1->descripcionCuenta,
				"buscarCuentasIns"=>TRUE
			];
			$this->session->set_userdata($datas01);
		}
		else{
			echo "error";
		}		
	} 

	function buscarCuentaRecur(){
		$propRecur = $this->input->post("propRecur");
		$resp1 = $this->Cuentas_model->buscarCuentasRecurs($propRecur);
		if($resp1){
			$datas01 = [
				"idCuents" => $resp1->idCuenta,
				"codigoCuent" => $resp1->codigoCuenta,
				"nombreCuent" => $resp1->nombreCuenta,
				"Descripcion_Cuent" => $resp1->descripcionCuenta,
				"buscarCuentasRecurs"=>TRUE
			];
			$this->session->set_userdata($datas01);
		}
		else{
			echo "error";
		}		
	} 

	function buscarCuentasTrans(){
		$propTrans = $this->input->post("propTrans");
		$resp1 = $this->Cuentas_model->buscarCuentasTransp($propTrans);
		if($resp1){
			$datas01 = [
				"idCuents" => $resp1->idCuenta ,
				"codigoCuent" => $resp1->codigoCuenta,
				"nombreCuent" => $resp1->nombreCuenta,
				"Descripcion_Cuent" => $resp1->descripcionCuenta,
				"buscarCuentasTransp"=>TRUE
			];
			$this->session->set_userdata($datas01);
		}
		else{
			echo "error";
		}		
	} 

	function buscarCuentasVentas(){
		$CVenta = $this->input->post("CVenta");
		$resp1 = $this->Cuentas_model->buscarCuentasVentas($CVenta);
		if($resp1){
			$datas01 = [
				"idCuents" => $resp1->idCuenta ,
				"codigoCuent" => $resp1->codigoCuenta,
				"nombreCuent" => $resp1->nombreCuenta,
				"Descripcion_Cuent" => $resp1->descripcionCuenta,
				"buscarCuentasVentas"=>TRUE
			];
			$this->session->set_userdata($datas01);
		}
		else{
			echo "error";
		}		
	}
}