<style>
    .modal-dialog{
        overflow-y: initial !important
    }
    .modal-body{
        height: 300px;
        overflow-y: auto;
    }
</style>
<hr>
<div class="container well">
    <div class="container-header"><h3 class="title text-info"><span class="glyphicon glyphicon-cog"></span> Parametrizar Datos</h3></div>
    <div class="row">
        <div class="col-md-4"><br><br><br><button type="button" class="btn btn-default  btn-lg btn-block" data-toggle="modal" data-target="#terre">Formulario Terreno</button></div>
        <div class="col-md-4 col-md-offset-4"><br><br><br>
            <input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarId" name="buscarId">
            <div class="col-lg-6">
                <input class="btn btn-primary btn-lg" type="button" role="group" id="ok" name="" value="Mostrar Todo" data-toggle="modal" data-target="#consulterre">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4"><br><a type="button" class="btn btn-default btn-lg btn-block" href="<?= base_url('maquinarias')?>">Formulario Maquinaria Propia</a></div>
        <div class="col-md-4 col-md-offset-4"><br>
            <input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIdU" name="buscarIdU">
            <div class="col-lg-6">
                <input class="btn btn-primary btn-lg" type="button" id="okmaquinaria" name="" value="Mostrar Todo" data-toggle="modal" data-target="#consulmaquina">
            </div>
            <div class="col-md-6 ">
                <input class="btn btn-primary btn-lg" type="button" id="vidautil" name="" value="Vida Util" data-toggle="modal" data-target="#vidaUtilmaquinaria">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"><br><a type="button" class="btn btn-default btn-lg btn-block"  href="<?= base_url('insumos')?>">Formulario Insumos</a> </div>
        <div class="col-md-4 col-md-offset-4"><br>
            <input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIdUa" name="buscarIdUa">
            <div class="col-lg-6">
                <input class="btn btn-primary btn-lg" type="button" id="okinsumos" name="" value="Mostrar Todo" data-toggle="modal" data-target="#consulinsum">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"><br><a type="button" class="btn btn-default btn-lg btn-block" href="<?= base_url('PasaraReg')?>">Formulario Recurso Humano</a></div>
        <div class="col-md-4 col-md-offset-4"><br>
            <input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIdUsa" name="buscarIdUsa">
            <div class="col-lg-6">
                <input class="btn btn-primary btn-lg" type="button" id="okterceros" name="" value="Mostrar Todo" data-toggle="modal" data-target="#consulRecurs">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"><br><a type="button" class="btn btn-default btn-lg btn-block" href="<?= base_url('Transporte')?>">Formulario Transporte Propio</a></div>
        <div class="col-md-4 col-md-offset-4"><br>
            <input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIdUar" name="buscarIdUar">
            <div class="col-lg-6">
                <input class="btn btn-primary btn-lg" type="button" id="oktransporte" name="" value="Mostrar Todo" data-toggle="modal" data-target="#consultransporte">
            </div>
            <div class="col-md-6 ">
                <input class="btn btn-primary btn-lg" type="button" id="vidautilTransporte" name="" value="Vida Util" data-toggle="modal" data-target="#vidaUtilTranporte">
            </div>
        </div>
    </div>
    
</div>
<!--Modal para Consultar todos los terrenos-->
<div id="consulterre" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Todos Los Terrenos</h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Del Terreno</th>
                                <th>Area Del Terreno</th>
                                <th>Descripción Terreno</th>
                                <th>Fecha Terreno</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tablaData">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal para Consultar toda la maquinaria-->
<div id="consulmaquina" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Toda La Maquinaria O Herramienta Registrada</h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre De La Maquinaria</th>
                                <th>Descripción De La Maquinaria</th>
                                <th>valor De La Maquinaria</th>
                                <th>Fecha De La Maquinaria</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tablaDataMaqui">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal para Consultar todos los insumos registrados-->
<div id="consulinsum" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Todos Los Insumos</h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Del Insumo</th>
                                <th>Descripción Del Insumo</th>
                                <th>Fecha Del Insumo</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tablaDataInsu">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal para Consultar todos las personas registradas-->
<div id="consulRecurs" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Todas Las Personas Registradas En Recurso Humano</h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre De La Persona</th>
                                <th>Apellido De La Persona</th>
                                <th>Identificacion De La Persona</th>
                                <th>Dirección De La Persona</th>
                                <th>Telefono De La Persona</th>
                                <th>Fecha De Registro</th>
                                <th>Tipo De Persona</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tablaDataTercero">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal para Consultar todos los Transportes propios registrados-->
<div id="consultransporte" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Todo El  Transporte Propio</h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo De Transporte</th>
                                <th>Descripción Del Transporte</th>
                                <th>Valor Del Transporte</th>
                                <th>Fecha Del REgistro Del Transporte</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody id="tablaDataTrans">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PARA REGISTRAR TERRENOS-->
<div id="terre" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <form id="form-crearTerre" class="form-horizontal" role="form" action="<?php base_url();?>Parametrizar/guardarTerreno" method="POST">
        <input type="hidden" name="RegisTerreno" value="RegistrarTerreno">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-muted"><span class="glyphicon glyphicon-qrcode"></span>Formulario Terreno</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <h4 class="text-left text-info"> Ingrese El Area Del Terreno* </h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                    <input  id="areaTerrenos" type="text" class="form-control" placeholder="Area Del Terreno" name="areaTerrenos"  required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="text-left text-info"> Ingrese El Nombre Del Terreno* </h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                    <input  id="nombreTerrenos" type="text" class="form-control" placeholder="Nombre  Del Terreno" name="nombreTerrenos"  required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="text-left text-info"> Descripcion Del Terreno* </h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-text-width"> </span>
                                    <input  id="DescripcionTerreno" type="text" class="form-control" placeholder="Descripcion Del Terreno" name="DescripcionTerreno"  required  >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idUsua" name="idUsua">
                                    <input type="hidden" value="1" id="estado" name="estado">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><br> &nbsp;
                                <button type="submit" id="registrarTerr" class="btn bg-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!--MODAL PARA BUSCAR TERRENO-->
<div id="modterre" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <form id="form-modbuscar" class="form-horizontal" role="form" action="<?php base_url();?>parametrizar/buscaTerreno" method="POST">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-primary"><span class="glyphicon glyphicon-qrcode"></span> Consultar Terreno</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <h4 class="text-left text-info"> Ingrese El Nombre Del Terreno* </h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                    <input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIda" name="buscarIda">
                                    <input  id="conTerreno" type="text" class="form-control" placeholder="Nombre Del Terreno" name="busTerreno" required>
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
<!-- Modal PARA Modificar TERRENOS-->
<div id="modificaTerreno" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <form>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title text-muted">Formulario Para Modificar Terreno</h3>
                </div>
                <div class="modal-body">
                    <input type="" id="id" name="" hidden>
                    <div class="row" >
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <h4 class="text-left text-info"> Nombre Del Terreno </h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                    <input  type="text" class="form-control" name="nombreTerreno"  required id="NombreTerreno">
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="text-left text-info"> Area Del Terreno </h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                    <input  id="AreaTerreno" type="text" class="form-control" placeholder="Area Del Terreno" name="AreaTerreno"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="text-left text-info"> Descripción Del Terreno </h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                    <input  id="descripcionTerreno" type="text" class="form-control" placeholder="Descripción Del Terreno" name="descripcionTerreno"  required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="text-left text-info"> Estado</h4>
                                <div class="input-group">
                                    <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                                    <select name="Estado" id="Estado" class="form-control">
                                        <option value="Ninguno">Seleccionar Estado...</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><br> &nbsp;
                            <input type="submit" id="Modificarterreno" name="Modificarterreno" value="Modificar" class="btn bg-primary">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Modal PARA Modificar Maquinaria-->
<div id="modificaMaquinaria" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Formulario Para Modificar Maquinaria</h3>
            </div>
            <div class="modal-body">
                <input type="" id="idM" name="" hidden>
                <div class="row" >
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <h4 class="text-left text-info"> Nombre De La Maquinaria </h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="text" class="form-control" name="nomMaquinaria"  required id="nomMaquinaria">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Descripción De La Maquinaria </h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  id="desMaquinaria" type="text" class="form-control"  name="desMaquinaria"  required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info">Valor De La Maquinaria </h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  id="valoMaquinaria" type="number"  class="form-control"  name="valoMaquinaria"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Estado</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                                <select name="EstadoMaquin" id="EstadoMaquin" class="form-control">
                                    <option value="Ninguno">Seleccionar Estado...</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><br> &nbsp;
                        <input type="submit" id="ModificarMaquinaria" value="Modificar" class="btn bg-primary">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PARA Modificar Insumo-->
<div id="modificaInsumo" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Formulario Para Modificar Insumo</h3>
            </div>
            <div class="modal-body">
                <input type="" id="idInsu" name="" hidden>
                <div class="row" >
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <h4 class="text-left text-info"> Nombre Del Insumo </h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="text" class="form-control" name="nomInsumo"  required id="nomInsumo">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Descripción Del Insumo</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  id="desInsumo" type="text" class="form-control" placeholder="Descripción Del Terreno" name="desInsumo"  required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Estado </h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                                <select name="EstadoInsumo" id="EstadoInsumo" class="form-control">
                                    <option value="Ninguno">Seleccionar Estado...</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><br> &nbsp;
                        <input type="submit" id="Modificarinsumos" value="Modificar" class="btn bg-primary">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PARA Modificar TERCERO-->
<div id="modificaTercero" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Formulario Para Modificar Tercero</h3>
            </div>
            <div class="modal-body">
                <input type="" id="idTer" name="" hidden>
                <div class="row" >
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <h4 class="text-left text-info"> Nombre De La Persona</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="text" class="form-control" name="nomTercero"  required id="nomTercero">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Apellido De La Persona</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="text" class="form-control" name="apeTercero"  required id="apeTercero">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Identificación De La Persona</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="number" class="form-control" name="idenTercero"  required id="idenTercero">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Dirección De La Persona</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="text" class="form-control" name="direcTercero"  required id="direcTercero">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Telefono De La Persona</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="number" class="form-control" name="teleTercero"  required id="teleTercero">
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class="text-right text-info"> Tipo *</h5>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                                <select name="tipotercero" id="tipotercero" class="form-control">
                                    <option value="Ninguno">Seleccionar ...</option>
                                    <option value="1">Cliente</option>
                                    <option value="2">Proveedor</option>
                                    <option value="3">Recurso Humano</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Estado </h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                                <select name="EstadoTercero" id="EstadoTercero" class="form-control">
                                    <option value="Ninguno">Seleccionar Estado...</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><br> &nbsp;
                        <input type="submit" id="ModificarTerceros" value="Modificar" class="btn bg-primary">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PARA VIDA UTIL MAQUNARIA-->
<div id="vidaUtilmaquinaria" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Vida Util Maquinaria O Herramienta</h3>
            </div>
            <div class="modal-body">
                <input type="" id="idTer" name="" hidden>
                <div class="row" >
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <h4 class="text-left text-info">Ingrese El Nombre De La Maquinaria*</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idusuamaq" name="idusuamaq">
                                <input  type="text" class="form-control" name="search" placeholder="Nombre De La Maquinaria" required id="search" autocomplete="off">
                            </div>
                            <div id="appenddatos"></div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info">Años De La Vida Util</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="number" class="form-control" name="vidamaquinaria" placeholder="Años De La Vida Util"  required id="vidamaquinaria">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><br> &nbsp;
                        <input type="button" id="consulVidaUtil" value="Consultar" class="btn bg-primary" data-toggle="modal" data-target="#myModalExito">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PARA Modificar transporte-->
<div id="modificaTransporte" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Formulario Para Modificar Transporte</h3>
            </div>
            <div class="modal-body">
                <input type="" id="idT" name="" hidden>
                <div class="row" >
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <h4 class="text-left text-info"> Tipo Del Transporte* </h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <select name="tipoTransporte" id="tipoTransporte" class="form-control">
                                    <option value="Ninguno">Seleccionar Tipo De Transporte</option>
                                    <option value="camion">Camión</option>
                                    <option value="automovil">Automovil</option>
                                    <option value="remolque">Remolque</option>
                                    <option value="volqueta">Volqueta</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info"> Descripción Del Transporte</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  id="descripcionTransporte" type="text" class="form-control"  name="descripcionTransporte"  required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info">Valor Del Transporte</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  id="valorTransporte" type="text" onkeyup="reformatText(this)" class="form-control"  name="valorTransporte"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info">Estado</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-hourglass"></span>
                                <select name="EstadoTrans" id="EstadoTrans" class="form-control">
                                    <option value="Ninguno">Seleccionar Estado...</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><br> &nbsp;
                        <input type="submit" id="ModificarTransporte" value="Modificar" class="btn bg-primary">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<div id="myModalExito" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Todos Los Terrenos</h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th># Meses</th>
                                <th>Cuota De Depreciación</th>
                                <th>Depreciación Acomulada</th>
                                <th>valor Neto</th>
                            </tr>
                        </thead>
                        <tbody id="vdutil">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<div id="trans" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Vida Util Del Transporte</h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered  table-hover">
                        <thead>
                            <tr>
                                <th># Meses</th>
                                <th>Cuota De Depreciación</th>
                                <th>Depreciación Acomulada</th>
                                <th>valor Neto</th>
                            </tr>
                        </thead>
                        <tbody id="vdutiltransporte">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PARA VIDA UTIL TRANSPORTE-->
<div id="vidaUtilTranporte" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-muted">Vida Util Transporte</h3>
            </div>
            <div class="modal-body">
                <input type="" id="idTer" name="" hidden>
                <div class="row" >
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <h4 class="text-left text-info">Ingrese El Tipo De Transporte*</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input type="hidden" value=<?= $this->session->userdata('id') ?> id="idusuaTrans" name="idusuaTrans">
                                <input  type="text" class="form-control" name="searchTransporte" placeholder="Tipo De Transporte" required id="searchTransporte" autocomplete="off">
                            </div>
                            <div id="appendTransporte"></div>
                        </div>
                        <div class="form-group">
                            <h4 class="text-left text-info">Años De La Vida Util</h4>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
                                <input  type="number" class="form-control" name="vidaTransporte" placeholder="Años De La Vida Util"  required id="vidaTransporte">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group"><br> &nbsp;
                        <input type="button" id="consulVidaUtilTransporte" value="Consultar" class="btn bg-primary" data-toggle="modal" data-target="#trans">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>