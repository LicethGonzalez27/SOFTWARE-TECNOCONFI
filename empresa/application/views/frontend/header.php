<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>
    <link rel="stylesheet" href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Css/Bienvenido.css">
    <script src="<?php echo base_url();?>./Bootstrap/js/jQueryv1.11.0.js"></script>
    <script rel="stylesheet" href="<?php echo base_url();?>./Bootstrap/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url();?>./Bootstrap/js/moment.js"></script>
    <script src="<?php echo base_url();?>./Bootstrap/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./Bootstrap/css/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Css/Empleados.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('empleados') ?>">Bienvenido A Tecnoconfi</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li><a href="<?= base_url('Welcome')?>">Volver</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img class="img-responsive" src="<?php echo $this->session->userdata('foto'); ?>" id="fotos" title="Perfil" >
                </a>
                <ul class="dropdown-menu">
                  <li><a data-toggle="modal" data-target="#perfil"><i class="fa fa-user fa-fw"></i>Modificar Perfil</a></li>
                   <li><a data-toggle="modal" data-target="#perfil"><i class="fa fa-user fa-fw"></i>Modificar Contraseña</a></li>
                  <li><a data-toggle="modal" data-target="#foto"><i class="fa fa-user fa-fw"></i>Modificar Foto</a></li>
                  <li><a href="javascript:void(0)" id="cerrar"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <hr>