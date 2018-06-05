<hr>

<div class="container well" id="sha">
    <form id="form-crearCulti" class="form-horizontal" role="form" action="<?php base_url();?>CultivosGuardar/guardarCultivo" method="POST">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="text-primary"> Registrar Cultivo</h3>
            </div>
        </div>       
        <div class="row">
            <br><br><br>
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese El Nombre Del Cultivo* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                        <input type="text" class="form-control" id="nombreCultivo" placeholder="Nombre Del Cultivo" name="nombreCultivo" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese La Descripción Del Cultivo* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                        <input type="text" class="form-control" id="desCultivo" placeholder="Descripción Del Cultivo" name="desCultivo" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Identificación De La Persona Que Registra El Cultivo* </h4>
                    <div class="input-group">
                        <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idUsu" name="idUsu">
                        <span class="input-group-addon glyphicon glyphicon-user"> </span>
                        <input value=<?= $this->session->userdata('numero') ?> type="text" class="form-control" name="idUsu"  disabled>
                        <span1 class="help-block"></span1>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Nombre Del Terreno* </h4>
                    <div class="input-group">
                        <input type="hidden" value=<?= $this->session->userdata('idTerre')?> id="idTerre" name="idTerre">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input value=<?= $this->session->userdata('nomTerre')?>  class="form-control" name="idTerre"  disabled>
                        <span1 class="help-block"></span1>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group"><br> &nbsp;
                        <button type="submit" class="btn bg-primary">Guardar Cultivo</button>
                    </div>
                </div>
            </div>                  
        </div>
    </form>
</div>