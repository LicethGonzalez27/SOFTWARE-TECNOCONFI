<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consultas extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$this->load->view('frontend/header');
        $this->load->view('frontend/Reporte');
        $this->load->view('frontend/footer');
    }
}