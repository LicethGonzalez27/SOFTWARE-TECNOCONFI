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
                        <div class="col-md-12 col-md-offset-6">
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
                            <div class="form-group">
                                <h5 class="text-right text-info"> Tipo *</h5>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="Ninguno">Seleccionar ...</option>
                                        <option value="1">Cliente</option>
                                        <option value="2">Proveedor</option>
                                        <option value="3">Recurso Humano</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div class="input-group">
                                    <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idUsua" name="idUsua">
                                    <input type="hidden" value="1" id="estado" name="estado">
                                </div>
                            </div>    
                        </div>                     
                    </div>    
                    <div class="row" >
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-6">
                                <a href="<?= base_url('parametrizar')?>" class="btn btn-danger active" ><span class="glyphicon glyphicon-remove"> </span> Cancelar</a>
                                <button id="Registrarpersonas" type="submit"  class="btn btn-info active" ><span class="glyphicon glyphicon-floppy-disk"> </span> Crear Cuenta</button>                                          
                            </div>
                        </div>
                    </div>                                                    
                </div>
            </div>
        </div>
    </form>
</div>


