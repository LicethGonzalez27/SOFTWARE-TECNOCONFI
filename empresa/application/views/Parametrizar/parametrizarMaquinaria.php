<hr>
<!-- Modal Maquinaria-->
<div class="container well" id="sha">
    <form id="Form-crear-Maqui" class="form-horizontal" role="form" action="<?php base_url();?>maquinarias/guardarMaquinaria" method="POST">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese El Nombre De La Maquinaria* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                        <input  id="nombreMaquinaria" type="text" class="form-control" placeholder="El Nombre De La Maquinaria" name="nombreMaquinaria" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Descripcion De La Maquinaria* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-width"> </span>
                        <input  id="DescrpcionMaquinaria" type="text" class="form-control" placeholder="Descripcion De La Maquinaria" name="DescrpcionMaquinaria" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info">Valor De La Maquinaria* </h4>
                   <div class="input-group">
                        <span class="input-group-addon glyphicon">$</span>
                        <input type="number"  class="form-control" name="valorMaquinaria" required>
                    <!--onkeyup="reformatText(this)" Funcion para colocar comillas a valores-->
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idUsua" name="idUsua">
                        <input type="hidden" value="1" id="estado" name="estado">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><br> &nbsp;
                        <button type="submit" id="registrarMaqui" class="btn bg-primary">Guardar</button>
                        <a href="<?= base_url('parametrizar')?>" class="btn btn-danger active" ><span class="glyphicon glyphicon-remove"> </span> Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
