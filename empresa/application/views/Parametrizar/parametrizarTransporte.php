<hr>
<div class="container well" id="sha">
    <form id="Form-crear-trans" class="form-horizontal" role="form" action="<?php base_url();?>Transporte/guardarTransporte" method="POST">
        <title>Formulario Transporte Propio</title>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese El Tipo Del Transporte* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                        <select name="tipoTranporte" id="tipoTranporte" class="form-control">
                            <option value="Ninguno">Seleccionar Tipo De Transporte</option>
                            <option value="camion">Camión</option>
                            <option value="automovil">Automovil</option>
                            <option value="remolque">Remolque</option>
                            <option value="volqueta">Volqueta</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese La Descripción Del Transporte* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                        <input  id="descripcionTransporte" type="text" class="form-control" placeholder="Descripción Del Transporte" name="descripcionTransporte"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Valor Del Transporte* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-width"> </span>
                        <input  id="valorTransporte" type="number" class="form-control" placeholder="Valor Del Transporte" name="valorTransporte"  required  >
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idUsuariot" name="idUsuariot">
                        <input type="hidden" value="1" id="estadot" name="estadot">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group"><br> &nbsp;
                    <button type="submit" id="registrarMaqui" class="btn bg-primary">Guardar</button>
                    <a href="<?= base_url('parametrizar')?>" class="btn btn-danger active" ><span class="glyphicon glyphicon-remove"> </span> Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>