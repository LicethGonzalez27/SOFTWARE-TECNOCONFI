<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cultivo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cultivos_model');
	}

	
	function index(){
	$this->load->view('frontend/header');
	$this->load->view('Cultivo/PrincipalCultivo');
	$this->load->view('frontend/footer');
	}

}