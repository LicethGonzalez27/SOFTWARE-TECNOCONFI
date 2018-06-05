<hr>

<div class="container well" id="sha">
    <form id="form-create-terceros" class="form-horizontal" role="form" action="<?php base_url();?>PasaraReg/guardarTerceros" method="POST">
        <div class="row">
            <div class="col-xs-push-8 col-xs-offset-7">
                <input type="hidden" name="Numero_N" value="Registrar">
            </div>
        </div>       
        <div class="row">
            <div class="col-md-5">     
                <div class="tab-content">                               
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1">
                            <div class="form-group">
                                <h5 class="text-right text-info"> Nombres*</h5>
                                <div class="input-group">     
                                    <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                    <input id="Nombrepersona" type="text" class="form-control" placeholder="Nombres" name="Nombrepersona"  required>
                                    <span1 class="help-block"></span1>   
                                </div>
                            </div>
                            <div class="form-group">
                                <h5 class="text-right text-info"> Apellidos*</h5>
                                <div class="input-group">     
                                    <span class="input-group-addon glyphicon glyphicon-user"> </span>
                                    <input id="Apellidospersona" type="text" class="form-control" placeholder=" Apellidos" name="Apellidospersona"  required >                   
                                    <span1 class="help-block"></span1>   
                                </div>
                            </div>
                            <div class="form-group">
                                <h5 class="text-right text-info"> Numero De Documento*</h5>
                                <div class="input-group">     
                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                    <input id="NumeroDocumentopersona" type="number" placeholder="Numero Documento" class="form-control" name="NumeroDocumentopersona"  required>                   
                                    <span1 class="help-block"></span1>   
                                </div>
                            </div>               
                            <div class="form-group">
                                <h5 class="text-right text-info"> Direccion*</h5>
                                <div class="input-group">     
                                    <span class="input-group-addon glyphicon glyphicon-text-height"> </span>                 
                                    <input id="Direcionpersona" type="text" placeholder="Direccion" class="form-control" required name="Direcionpersona">                  
                                    <span1 class="help-block"></span1>   
                                </div>
                            </div>                                            
                            <div class="form-group">
                                <h5 class="text-right text-info"> Telefono Celular*</h5>
                                <div class="input-group">     
                                    <span class="input-group-addon glyphicon glyphicon-phone"> </span>
                                    <input id="TelefonoCelularpersona" type="number" placeholder="Telefono Celular" class="form-control" name="TelefonoCelularpersona"    required>                   
                                    <span1 class="help-block"></span1>   
                                </div>
                            </div>  
                        </div>                     
                    </div>    
                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-12">
                                <a href="index.jsp" class="btn btn-danger active" ><span class="glyphicon glyphicon-remove"> </span> Cancelar</a>
                                <button id="Registrarpersonas" type="submit"  class="btn btn-info active" ><span class="glyphicon glyphicon-floppy-disk"> </span> Crear Cuenta</button>                                          
                            </div>
                        </div>
                    </div>                                                    
                </div>
            </div>
        </div>
    </form>
</div>
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
                                            <input  id="buscar" type="text" class="form-control" placeholder="Numero De Cedula" name="buscar"  autofocus>                   
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group"><br>  &nbsp;
                                        <button type="submit" id="btnbuscar" class="btn bg-primary">Buscar</button>
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
<script src="<?php echo base_url();?>Js/terceros.js"></script>
<script src="<?php echo base_url(); ?>./Js/login.js"></script>
</body>
</html>
