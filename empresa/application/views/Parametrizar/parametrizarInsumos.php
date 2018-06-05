<hr>

<!-- Modal Insumos-->
<div class="container well" id="sha">
     <form id="Form-crear-insu" class="form-horizontal" role="form" action="<?php base_url();?>insumos/guardarInsumos" method="POST">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                <h4 class="text-left text-info"> Ingrese El Nombre Del Insumo* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                        <input  id="nombreinsumo" type="text" class="form-control" placeholder="Nombre Del Insumo" name="nombreinsumo" required>
                    </div>
                </div>
                <div class="form-group">
                    <h4 class="text-left text-info"> Descripcion Del Insumo* </h4>
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-text-width"> </span>
                        <input  id="descrinsumo" type="text" class="form-control" placeholder="Descripcion Del Insumo" name="descrinsumo" required>
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