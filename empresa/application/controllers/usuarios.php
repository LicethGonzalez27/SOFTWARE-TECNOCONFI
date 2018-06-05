<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model');
	  
	}

	public function index(){
	$this->load->view('regUsuario');
	}	

	 function guardarUsuario(){
		if ($this->input->is_ajax_request()) {
			
			$Nombres = $this->input->post("Nombres");
			$Apellidos = $this->input->post("Apellidos");
			$TipoDocumento = $this->input->post("TipoDocumento");
			$NumeroDocumento = $this->input->post("NumeroDocumento");
			$Direcion = $this->input->post("Direcion");
			$TelefonoCelular = $this->input->post("TelefonoCelular");
			$CorreoElectronico = $this->input->post("CorreoElectronico");
			$Contrasena = $this->input->post("Contrasena");

				$datos = array(
					"idUsuario" => '',
					"nombreUsuario	" => $Nombres,
					"apellidoUsuario" => $Apellidos,
					"tipoIdentificacionUsuario"=> $TipoDocumento, 
					"numeroIdentificacionUsuario" => $NumeroDocumento, 
					"direccionUsuario" => $Direcion, 
					"telefonoUsuario" => $TelefonoCelular, 
					"correoelectronicoUsuario" => $CorreoElectronico,
					"fotoUsuario"=> './ImagenesUsuario/user.png',
					"contraenaUsuario" => sha1($Contrasena),
					"Estado_idEstado" => '1'
				);
				
				if($this->usuarios_model->guardarUsuario($datos)==true){
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

	public function modificarUsuarios(){

		$actualizacionUsuario = array(
				'nombreUsuario' => $this->input->post('Nombresele'),
				'apellidoUsuario' => $this->input->post('Apellidosele'),
				'tipoIdentificacionUsuario' => $this->input->post('TipoDocumentosele'),
				'numeroIdentificacionUsuario' => $this->input->post('NumeroDocumentosele'),
				'direccionUsuario' => $this->input->post('Direcionsele'),
				'telefonoUsuario' => $this->input->post('TelefonoCelularsele'),
				'correoelectronicoUsuario' => $this->input->post('CorreoElectronicosele')
				);
			if ($this->usuarios_model->modificarUsuarios($this->input->post('idsele'),$actualizacionUsuario)== true) {
				$datoRetornado = array('id' =>  true);
				echo json_encode($datoRetornado);
			}else{
				$datoRetornado = array('id' =>  false);
				echo json_encode($datoRetornado);
				}
	}

	public function CargarFoto(){
		if ($this->input->is_ajax_request()) {
				$config = [
					"upload_path" => "./ImagenesUsuario",
					'allowed_types' => "png|jpg|gif"
				];
				
			$this->load->library("upload",$config);
			if ($this->upload->do_upload('Foto')) {
				$data = array("upload_data" => $this->upload->data());
				$id =  $this->session->userdata('id');
				if ($result=$this->usuarios_model->GuardarFoto($data['upload_data']['file_name'],$id) == true){
						$datoRetornado = array('id' =>  true);
						echo json_encode($datoRetornado);
				}else{
						$datoRetornado = array('id' =>  false);
						echo json_encode($datoRetornado);
				}
			}else{				
					echo $this->upload->display_errors();
				}
		}else{
			show_404();
		}
	}

	public function modificarContrasena(){

		if ($this->usuarios_model->modificarContrasena(sha1($this->input->post('clave1')), $this->session->userdata('id'))==true) {
			$datoRetornado = array('id' =>  true);
			echo json_encode($datoRetornado);
		}else{
			$datoRetornado = array('id' =>  false);
			echo json_encode($datoRetornado);
		}
			
	}

}