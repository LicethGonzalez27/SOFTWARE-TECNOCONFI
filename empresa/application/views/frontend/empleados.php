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
        <link rel="stylesheet" href="<?php echo base_url();?>Css/Empleados.css">
        <script src="<?php echo base_url();?>./Bootstrap/js/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./Bootstrap/css/sweetalert.css">
        
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
                        </ul>
                        
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img class="img-responsive" src="<?php echo $this->session->userdata('foto'); ?>" id="fotos">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a data-toggle="modal" data-target="#perfil"><i class="fa fa-user fa-fw"></i>Modificar Perfil</a></li>
                                    <li><a data-toggle="modal" data-target="#cambiarcontra"><i class="fa fa-user fa-fw"></i>Modificar Contraseña</a></li>
                                    <li><a data-toggle="modal" data-target="#foto"><i class="fa fa-user fa-fw"></i>Modificar Foto</a></li>
                                    <li><a href="javascript:void(0)" id="cerrar"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Sección Modulo-->
        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-subheading text-muted"><i class="glyphicon glyphicon-th-list"></i> Modulos </h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <form action="<?= base_url('Parametrizar') ?>">
                            <button type="submit" class="portfolio-link" title="Parametrizacion ">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                            </div>
                            <img src="Bootstrap/Imagenes/parametrizar.jpg" class="img-responsive"  id="avatar">
                            </button>
                        </form>
                        <div class="portfolio-caption">
                            <h4 class="text-success">Parametrizacion</h4>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <form action="<?= base_url('cultivo') ?>">
                            <button type="submit" class="portfolio-link" title="Cultivo">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-5x"></i>
                                </div>
                            </div>
                            <img src="Bootstrap/Imagenes/cultivo.jpg" class="img-responsive"  id="avatar">
                            </button>
                        </form>
                        <div class="portfolio-caption">
                            <h4 class="text-success">Cultivo</h4>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <form action="<?= base_url('Consultas') ?>">
                            <button type="submit" class="portfolio-link"  title="Reportes">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="Bootstrap/Imagenes/reportes.jpg" class="img-responsive"  id="avatar">
                            </button>
                        </form>
                        <div class="portfolio-caption">
                            <h4 class="text-success">Reporte</h4>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="row">
                <div class="col-md-12 ">
                    <h4>Siganos En</h4>
                    <h6>blogcentrofusagasuga.blogspot.com.co<i class="glyphicon glyphicon-list-alt"></i></h6>
                </div>
            </div>
        </footer>
        <!--  ...............................................................................................-->
        <!--MODAL PARA BUSCAR TERCERA PERSONA-->
        <div id="consultar" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
            <form id="form-buscar" class="form-horizontal" role="form" action="<?php base_url();?>PasaraReg/buscarTercero" method="POST">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title text-primary"<span class="glyphicon glyphicon-qrcode"></span> Consultar Cedula</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="form-group">
                                        <h4 class="text-left text-info"> Ingrese Cedula* </h4>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                            <input  id="consultas" type="text" class="form-control" placeholder="Numero De Cedula" name="consultas"  autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group"><br> &nbsp;
                                        <button type="submit" class="btn bg-primary">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--MODAL PARA MODIFICAR PERFIL-->
        <div id="perfil" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title text-primary"> Modificar Perfil</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <h5 class="text-right text-info"> Nombres </h5>
                                    <div class="input-group">
                                        <?php $nombre=$this->session->userdata('name'); ?>
                                        <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idsele" name="idsele">
                                        <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                        <input value="<?php echo $nombre ?>" type="text" class="form-control" id="Nombresele" name="Nombresele"  required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-right text-primary"> Apellidos</h5>
                                    <div class="input-group">
                                        <?php $apellido=$this->session->userdata('ape'); ?>
                                        <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                        <input value="<?php echo $apellido ?>" type="text" class="form-control" id="Apellidosele" name="Apellidosele"  required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-right text-info"> Tipo De Documento</h5>
                                    <div class="input-group">
                                        <?php $tipo=$this->session->userdata('tipo'); ?>
                                        <span class="input-group-addon glyphicon glyphicon-credit-card" ></span>
                                        <select name="TipoDocumentosele" id="TipoDocumentosele" class="form-control" >
                                            <option value="<?php echo $tipo ?>" ><?php echo $tipo ?></option>
                                            <option value="CedulaCiudadania.">Cédula de Ciudadanía</option>
                                            <option value="CedulaExtranjera.">Cédula de Extranjería</option>
                                            <option value="TarjetaIdentidad.">Tarjeta de identidad</option>
                                            <option value="NIT" >NIT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-right text-info"> Numero De Documento</h5>
                                    <div class="input-group">
                                        <?php $numero=$this->session->userdata('numero'); ?>
                                        <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                        <input value="<?php echo $numero ?>" type="number" class="form-control" id="NumeroDocumentosele" name="NumeroDocumentosele"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <h5 class="text-right text-info"> Direccion</h5>
                                    <div class="input-group">
                                        <?php $direccion=$this->session->userdata('direccion'); ?>
                                        <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                                        <input value="<?php echo $direccion ?>" type="text" class="form-control" required  name="Direcionsele" id="Direcionsele">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-right text-info"> Telefono Celular</h5>
                                    <div class="input-group">
                                        <?php $telefono=$this->session->userdata('telefono'); ?>
                                        <span class="input-group-addon glyphicon glyphicon-phone"> </span>
                                        <input value="<?php echo $telefono ?>" type="number" class="form-control" name="TelefonoCelularsele" id="TelefonoCelularsele" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-right text-info"> Correo Electronico</h5>
                                    <div class="input-group">
                                        <?php $correo=$this->session->userdata('correo'); ?>
                                        <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                                        <input value="<?php echo $correo ?>" type="email"  class="form-control" name="CorreoElectronicosele" id="CorreoElectronicosele" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-4">
                                    <input type="submit" id="btnactualizar" value="Guardar" class="btn bg-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Cambiar Imagen-->
        <div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <form id="form-cambio-Imagen" method="POST">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-info" id="myModalLabel">Seleccionar Una Foto Para Tu Perfil </h4>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-4">
                                        <output id="list"></output>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-2">
                                        <div class="form-group">
                                            <h5 class="text-right text-info"> Cargar Imagen</h5>
                                            <div class="input-group center-block">
                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="glyphicon glyphicon-folder-open btn btn-success">
                                                            Abrir&hellip; <input id="files" type="file" name="Foto" class="form-control" style="display: none;" multiple>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" readonly>
                                                </div>
                                                <input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarId" name="buscarId">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="subtmit" name="CambiarImg" id="CambiarImg" class="btn btn-primary">Establecer Como Foto De Perfil</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" id="cambiarcontra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="" name="f1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title text-primary">Cambiar Contraseña</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        <h5 class="text-right text-info">Nueva Contraseña*</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-asterisk"> </span>
                                            <input id="clave1" type="password" placeholder="Nueva Contraseña" class="form-control" name="clave1" required >
                                        <span1 class="help-block"></span1>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-right text-info"> Confirmar Contraseña*</h5>
                                    <div class="input-group">
                                        <span class="input-group-addon glyphicon glyphicon-asterisk"> </span>
                                        <input id="clave2" type="password" placeholder="Confirmar Contraseña" class="form-control" name="clave2" required>
                                    <span1 class="help-block"></span1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="guardaContra" >Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="<?php echo base_url();?>./Bootstrap/js/jQueryv1.11.0.js"></script>
<script src="<?php echo base_url(); ?>./bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>Js/usuarios.js"></script>
<script src="<?php echo base_url();?>Js/terceros.js"></script>
<script src="<?php echo base_url(); ?>./Js/login.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>./Js/Imagen.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>./Js/CambiarImagen.js"></script>
</body>
</html>