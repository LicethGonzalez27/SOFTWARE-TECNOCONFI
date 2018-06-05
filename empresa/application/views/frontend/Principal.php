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
                            <li><a href="<?= base_url('PasaraReg') ?>"> Registrar Personas</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activos <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a  data-toggle="modal" data-target="#consultar">Registrar Presupuesto</a></li>
                                    <li><a  data-toggle="modal" data-target="#consultar">Registrar Entradas</a></li>
                                    <li><a href="<?= base_url('consultas')?>" id="btnbuscar">Reportes</a></li>
                                    <li><a href="#">Insumos</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('name') ?><b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a data-toggle="modal" data-target="#perfil"><i class="fa fa-user fa-fw"></i>Modificar Perfil</a></li>
                                    <li><a data-toggle="modal" data-target="#perfil"><i class="fa fa-user fa-fw"></i>Modificar Contraseña</a></li>
                                    <li><a data-toggle="modal" data-target="#perfil"><i class="fa fa-user fa-fw"></i>Modificar Foto</a></li>
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
                                        <i class="fa fa-home fa-5x"> IR</i>
                                    </div>
                                </div>
                                <img src="Bootstrap/Imagenes/images.png" class="img-responsive" alt="">
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
                                <img src="Bootstrap/Imagenes/cul.jpg" class="img-responsive" alt="">
                            </button>
                        </form>
                        <div class="portfolio-caption">
                            <h4 class="text-success">Cultivo</h4>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <form action="<?= base_url('cuenta') ?>">
                            <button type="submit" class="portfolio-link"  title="Reportes">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="Bootstrap/Imagenes/rep.jpg" class="img-responsive" alt="">
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
            <form id="form-actualizar" class="form-horizontal" role="form" action="<?php base_url();?>usuarios/actualizarUsuario" method="POST">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title text-primary"<span class="glyphicon glyphicon-qrcode"></span> Modificar Perfil</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-11 col-md-offset-1">
                                    <div class="form-group">
                                        <h5 class="text-right text-info"> Nombres </h5>
                                        <div class="input-group">
                                            <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idsele" name="idsele">
                                            <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                            <input value=<?= $this->session->userdata('name') ?> type="text" class="form-control" placeholder="Nombres" name="Nombresele"  required>
                                            <span1 class="help-block"></span1>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-right text-primary"> Apellidos</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                            <input value=<?= $this->session->userdata('ape') ?> type="text" class="form-control" placeholder=" Apellidos" name="Apellidosele"  required >
                                            <span1 class="help-block"></span1>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-right text-info"> Tipo De Documento</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-credit-card" ></span>
                                            <select name="TipoDocumentosele" id="TipoDocumento" class="form-control" >
                                                <option value=<?= $this->session->userdata('tipo')?> > <?= $this->session->userdata('tipo') ?></option>
                                                <option value="CedulaCiudadania.">Cédula de Ciudadanía</option>
                                                <option value="CedulaExtranjera.">Cédula de Extranjería</option>
                                                <option value="TarjetaIdentidad.">Tarjeta de identidad</option>
                                                <option value="NIT" >NIT</option>
                                            </select>
                                            <span1 class="help-block"></span1>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-right text-info"> Numero De Documento</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                            <input value=<?= $this->session->userdata('numero') ?> type="number" placeholder="Numero Documento" class="form-control" name="NumeroDocumentosele"  required>
                                            <span1 class="help-block"></span1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-11 col-md-offset-1">
                                    <div class="form-group">
                                        <h5 class="text-right text-info"> Direccion</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                                            <input value=<?= $this->session->userdata('direccion') ?> type="text" placeholder="Direccion" class="form-control" required  name="Direcionsele">
                                            <span1 class="help-block"></span1>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-right text-info"> Telefono Celular</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-phone"> </span>
                                            <input value=<?= $this->session->userdata('telefono') ?> type="number" placeholder="Telefono Celular" class="form-control" name="TelefonoCelularsele"    required>
                                            <span1 class="help-block"></span1>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-right text-info"> Correo Electronico</h5>
                                        <div class="input-group">
                                            <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                                            <input value=<?= $this->session->userdata('correo') ?> type="email" placeholder="CorreoElectronico@gmail.com" class="form-control" name="CorreoElectronicosele"  required>
                                        <span1 class="help-block"></span1>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-offset-5">
                                        <button id="btnactualizar" type="submit"  class="btn btn-info active" ><span class="glyphicon glyphicon-floppy-disk"> </span> Guardar</button>
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
        <script src="<?php echo base_url();?>./Bootstrap/js/jQueryv1.11.0.js"></script>
        <script src="<?php echo base_url(); ?>./bootstrap/js/bootstrap.min.js"></script>        
        <script src="<?php echo base_url();?>Js/usuarios.js"></script>
        <script src="<?php echo base_url();?>Js/terceros.js"></script>
        <script src="<?php echo base_url(); ?>./Js/login.js"></script>
    </body>
</html>