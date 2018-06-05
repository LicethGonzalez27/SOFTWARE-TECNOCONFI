<hr>

<div class="container well" id="sha">
    <form id="form-create-entradas" class="form-horizontal" role="form" action="<?php base_url();?>RegEntradas/entra" method="POST">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="text-primary"> Registrar Movimiento Entrada</h3>
            </div>
        </div>       
        <div class="row">
            <br><br><br>
            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese La Cantidad Del Movimiento* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                        <input type="text" class="form-control" id="CanMov" placeholder=" Cantidad Del Movimiento" name="CanMov" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese La Descripción Del Movimiento* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                        <input type="text" class="form-control" id="desMov" placeholder=" Descripción Del Movimiento" name="desMov" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Ingrese El Valor Del Movimiento* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-height"> </span>
                        <input type="text" class="form-control" id="valorMov" placeholder="Valor Del Movimiento" name="valorMov" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Numero De Cuenta* </h4>
                    <div class="input-group">
                        <input type="hidden" value=<?= $this->session->userdata('idCuents') ?> id="idCu" name="idCu">
                        <span class="input-group-addon glyphicon glyphicon-user"> </span>
                        <input value=<?= $this->session->userdata('codigoCuent') ?> type="text" class="form-control" name="idUsu"  disabled>
                        <span1 class="help-block"></span1>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Numero De Identifiación Tercero* </h4>
                    <div class="input-group">
                        <input type="hidden" value=<?= $this->session->userdata('idTer') ?> id="idTer" name="idTer">
                        <span class="input-group-addon glyphicon glyphicon-user"> </span>
                        <input value=<?= $this->session->userdata('idenTer') ?> type="text" class="form-control" name="idenTer"  disabled>
                        <span1 class="help-block"></span1>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Nombre Del Cultivo* </h4>
                    <div class="input-group">
                        <input type="hidden" value=<?= $this->session->userdata('idCulti')?> id="idCulti" name="idCulti">
                        <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idUsua" name="idUsua">
                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                        <input value=<?= $this->session->userdata('nomCulti')?>  class="form-control" name="idTerre"  disabled>
                        <span1 class="help-block"></span1>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group"><br> &nbsp;
                        <button type="submit" class="btn bg-primary">Guardar Movimiento</button>
                    </div>
                </div>
            </div>                  
        </div>
    </form>
</div>