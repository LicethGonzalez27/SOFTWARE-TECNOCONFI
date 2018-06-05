<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrarse</title>
        <link rel="stylesheet" href="<?php echo base_url();?>./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>Css/RegisU.css">        
    <script src="<?php echo base_url();?>./Bootstrap/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./Bootstrap/css/sweetalert.css">
    </head>
    <body>
        <div class="container well" id="sha">
        <h2>Formulario De Registro</h2>
            <form id="form-create-usuarios" class="form-horizontal" role="form" action="<?php base_url();?>usuarios/guardarUsuario" method="POST" >
                <div class="row">
                    <div class="col-xs-push-8 col-xs-offset-7">
                        <input type="hidden" name="Numero_N" value="Registrar">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div role="tabpanel">
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="active"><a  href="#seccion1" arai-controls="#seccion1" data-toggle="tab" role="tab">Usuario <span class="glyphicon glyphicon-th-large" ></span></a></li>
                                <li role="presentation" ><a href="#seccion2" arai-controls="#seccion2" data-toggle="tab" role="tab">Datos <span class="glyphicon glyphicon-list-alt"></span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="seccion1">
                                    <div class="row">
                                        <div class="col-md-11 col-md-offset-1">
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Nombres*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                                    <input id="Nombres" type="text" class="form-control" placeholder="Nombres" name="Nombres"  required>
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Apellidos*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                                    <input id="Apellidos" type="text" class="form-control" placeholder=" Apellidos" name="Apellidos"  required >
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Tipo De Documento*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-credit-card" ></span>
                                                    <select name="TipoDocumento" id="TipoDocumento" class="form-control" >
                                                        <option value="">Seleccionar...</option>
                                                        <option value="CedulaCiudadania">Cédula de Ciudadanía</option>
                                                        <option value="CedulaExtranjera">Cédula de Extranjería</option>
                                                        <option value="TarjetaIdentidad">Tarjeta de identidad</option>
                                                        <option value="NIT" >NIT</option>
                                                    </select>
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Numero De Documento*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                                    <input id="NumeroDocumento" type="number" placeholder="Numero Documento" class="form-control" name="NumeroDocumento"  required>
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="seccion2">
                                    <div class="row">
                                        <div class="col-md-11 col-md-offset-1">
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Direccion*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                                                    <input id="Direcion" type="text" placeholder="Direccion" class="form-control" required  name="Direcion">
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>                        
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Telefono Celular*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-phone"> </span>
                                                    <input id="TelefonoCelular" type="number" placeholder="Telefono Celular" class="form-control" name="TelefonoCelular"    required>
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Correo Electronico*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                                                    <input id="CorreoElectronico" type="email" placeholder="CorreoElectronico@gmail.com" class="form-control" name="CorreoElectronico"  required>
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-right text-info"> Contraseña*</h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon glyphicon glyphicon-asterisk"> </span>
                                                    <input id="Contrasena" type="password" placeholder="Contraseña" class="form-control" name="Contrasena"   required>
                                                    <span1 class="help-block"></span1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                     
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <a href="<?= base_url('Welcome') ?>" class="btn btn-danger active" ><span class="glyphicon glyphicon-remove"> </span> Cancelar</a>
                                            <button id="Registrar" type="submit"  class="btn btn-info active" ><span class="glyphicon glyphicon-floppy-disk"> </span> Crear Cuenta</button>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="<?php echo base_url();?>Bootstrap/js/jQueryv1.11.0.js"></script>
        <script src="<?php echo base_url();?>./Bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>Js/usuarios.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>./Js/Imagen.js"></script>
    </body>
</html>
