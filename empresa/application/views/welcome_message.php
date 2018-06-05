<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo base_url();?>./Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>./Css/estilologin.css">        
    <script src="<?php echo base_url();?>./Bootstrap/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./Bootstrap/css/sweetalert.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <h2 class="center badge-light">Login Para Administrador</h2>
            </div>
            <div class="col-xs-12">
                <img src="Bootstrap/Imagenes/usua.jpg" class="img-responsive" id="avatar">
            </div>
        </div>
        <div class="container well" id="sha">            
            <form id="login" action="<?= base_url('login/ingresar')?>" class="form-horizontal" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-user"> </span>
                        <input id="Documento" type="text" class="form-control" placeholder="Numero De Documento" name="Documento"   required >
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-asterisk"> </span>
                        <input id="password" type="password" class="form-control" placeholder="Contraseña ****" name="password" required>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesión</button>
                <div class="right checkbox-inline text-info ">
                    <p class="active">¿No tiene una cuenta? <a href="<?= base_url('usuarios')?>">Registrarse</a></p>
                    
                </div>
            </form>
        </div>
        <script src="<?php echo base_url();?>./Bootstrap/js/jQueryv1.11.0.js"></script>
        <script src="<?= base_url('Js/login.js')?>"></script>
    </body>
</html>