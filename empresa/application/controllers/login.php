<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	function ingresar(){
		$Documento = $this->input->post("Documento");
		$password= sha1($this->input->post("password"));
		$resp = $this->Login_model->login($Documento, $password);
		if($resp){
			$data = [
				"id" => $resp->idUsuario,
				"name" => $resp->nombreUsuario,
				"ape" => $resp->apellidoUsuario,
				"tipo" => $resp->tipoIdentificacionUsuario,
				"numero" => $resp->numeroIdentificacionUsuario,
				"direccion" => $resp->direccionUsuario,
				"telefono" => $resp->telefonoUsuario,
				"correo" => $resp->correoelectronicoUsuario,
				"foto" => $resp->fotoUsuario,
				"login" => TRUE
			];

			$this->session->set_userdata($data);
		}
		else{
			echo "error";
		}
	}

	function cerrar(){
		$this->session->sess_destroy();
	}
	
	
}