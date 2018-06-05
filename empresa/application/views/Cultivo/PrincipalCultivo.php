<hr>
<div class="container well">
	<div class="container-header">
		<h3 class="title text-info"><span class="glyphicon glyphicon-cloud-upload"></span> Cultivo Y Movimiento De Entrada</h3>
	</div>
	<div class="row">
		<div class="col-md-4"><br><br><br>
			<button type="button" class="btn btn-default  btn-lg btn-block" data-toggle="modal" data-target="#consulTerreno">Formulario Crear Cultivo</button>
		</div>
		<div class="col-md-4 col-md-offset-4"><br><br><br>
			<input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIdu" name="buscarIdu">
			<div class="col-lg-6">
				<input class="btn btn-primary btn-lg" type="button" id="okcul" name="" value="Consultar Todo" data-toggle="modal" data-target="#consulcultivos">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"><br>
			<a type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#consulCulti">Formulario Movimiento Entradas</a>
		</div>
		<div class="col-md-4 col-md-offset-4"><br>
			<input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIdusu" name="buscarIdusu">
			<div class="col-lg-6">
				<input class="btn btn-primary btn-lg" type="button" id="okentradas" name="" value="Mostrar Todo" data-toggle="modal" data-target="#consulEntrada">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"><br>
			<a type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#consulCultivosbuscar">Formulario Registrar Ventas</a>
		</div>
		<div class="col-md-4 col-md-offset-4"><br>
			<input type="hidden" value=<?= $this->session->userdata('id') ?> id="buscarIdusu" name="buscarIdusu">
		</div>
	</div>
</div>
<!--MODAL PARA BUSCAR TERRENO Y REGISTRAR CULTIVO-->
<div id="consulTerreno" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<form id="form-buscarTerre" class="form-horizontal" role="form" action="<?php base_url();?>parametrizar/buscarTerreno" method="POST">
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
									<input  id="conTerreno" type="text" class="form-control" placeholder="Nombre Del Terreno" name="conTerreno" required>
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
<!--MODAL PARA Botones-->
<div id="Mirar" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<form id="form-buscarTerre" class="form-horizontal" role="form" action="<?php base_url();?>parametrizar/buscarTerreno" method="POST">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Movimientos</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#terre">Movimiento Terreno </button>
							<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#insu">Movimiento Insumos</button>
							<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#recur">Movimiento Recurso Humano</button>
							<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#trans">Movimiento Transporte</button>
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
<!--MODAL PARA BUSCAR  CULTIVO-->
<div id="consulCulti" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<form id="form-buscarculti" class="form-horizontal" role="form" action="<?php base_url();?>CultivosGuardar/buscarCultivo" method="POST">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Consultar Cultivos</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<h4 class="text-left text-info"> Ingrese Del cultivo* </h4>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
									<input  id="concultivo" type="text" class="form-control" placeholder="Nombre Del Cultivo" name="concultivo" required>
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
<!--MODAL PARA movimiento terreno-->
<div id="terre" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<form id="form-buscarCuenta" class="form-horizontal" role="form" action="<?php base_url();?>Cuenta/buscarCuenta" method="POST">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Movimientos</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-8 col-sm-6 col-md-offset-3">
							<div class="form-group">
								<h5 class="text-right text-info"> El Terreno Es Propio?*</h5>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-hourglass"></span>
									<select name="prop" id="prop" class="form-control">
										<option value="Ninguno">Seleccionar</option>
										<option value="150401">Si</option>
										<option value="512005">No</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1">
						<div class="form-group"><br> &nbsp;
							<button type="submit" class="btn bg-primary">Enviar</button>
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
<!--MODAL PARA BUSCAR TERCERA PERSONA-->
<div id="consultartercero" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<form id="form-buscar" class="form-horizontal" role="form" action="<?php base_url();?>PasaraReg/buscarTercero" method="POST">
		<input type="hidden" value="1" name="Terrenos">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary"><span class="glyphicon glyphicon-qrcode"></span> Consultar Cedula</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<h4 class="text-left text-info"> Ingrese Cedula* </h4>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
									<input  id="consultas" type="text" class="form-control" placeholder="Numero De Cedula" name="consultas"  autofocus>
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
<!--MODAL PARA movimiento Insumos-->
<div id="insu" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<form id="form-buscarCuentasIn" class="form-horizontal" role="form" action="<?php base_url();?>Cuenta/buscarCuentasIn" method="POST">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Movimientos Para Insumos</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-8 col-sm-6 col-md-offset-3">
							<div class="form-group">
								<h5 class="text-right text-info"> Escoja El Insumo*</h5>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-hourglass"></span>
									<select name="propIn" id="propIn" class="form-control">
										<option value="Ninguno">Seleccionar</option>
										<option value="710103">fungicidas</option>
										<option value="710102">Cal</option>
										<option value="710104">Abono</option>
										<option value="710105">Otros</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1">
						<div class="form-group"><br> &nbsp;
							<button type="submit" class="btn bg-primary">Enviar</button>
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
<!--MODAL PARA movimiento Recurso Humano-->
<div id="recur" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<form id="form-buscarCuentaRecur" class="form-horizontal" role="form" action="<?php base_url();?>Cuenta/buscarCuentaRecur" method="POST">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Movimientos</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-8 col-sm-6 col-md-offset-3">
							<div class="form-group">
								<h5 class="text-right text-info">Recurso Humano*</h5>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-hourglass"></span>
									<select name="propRecur" id="propRecur" class="form-control">
										<option value="Ninguno">Seleccionar</option>
										<option value="720501">Si</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1">
						<div class="form-group"><br> &nbsp;
							<button type="submit" class="btn bg-primary">Enviar</button>
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
<!--MODAL PARA movimiento Insumos-->
<div id="trans" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<form id="form-buscarCuentasTrans" class="form-horizontal" role="form" action="<?php base_url();?>Cuenta/buscarCuentasTrans" method="POST">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Movimientos Para Insumos</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-8 col-sm-6 col-md-offset-3">
							<div class="form-group">
								<h5 class="text-right text-info">Arrendamiento Transporte *</h5>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-hourglass"></span>
									<select name="propTrans" id="propTrans" class="form-control">
										<option value="Ninguno">Seleccionar</option>
										<option value="512040">Si</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1">
						<div class="form-group"><br> &nbsp;
							<button type="submit" class="btn bg-primary">Enviar</button>
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
<!--Modal para Consultar todos los cultivos-->
<div id="consulcultivos" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title text-muted">Todos Los Cultivos Registrados</h3>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-bordered  table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre Del Cultivo</th>
								<th>Descripción Del Cultivo</th>
								<th>Fecha  Del Cultivo</th>
								<th>Usuario</th>
								<th>Terreno Asociado</th>
							</tr>
						</thead>
						<tbody id="tablaDataCultivo">
							
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
<!--Modal para Consultar todos las entradas-->
<div id="consulEntrada" class="modal fade bd-example-modal-lg" role="dialog" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title text-muted">Todos Las Entradas Registradas</h3>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-bordered  table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Cantidad Del Movimiento Entrada</th>
								<th>Descripción Del Movimiento Entrada</th>
								<th>Fecha Del Movimiento Entrada</th>
								<th>Valor Movimiento Entrada</th>
								<th>Cuenta Asociada</th>
								<th>Persona (Tercero) Asociada</th>
								<th>Cultivo Asociado</th>
								<th>Usuario</th>
							</tr>
						</thead>
						<tbody id="tablaDataEntrada">
							
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
<!-- Modal PARA Modificar Cultivo-->
<div id="modificaCultivo" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title text-muted">Formulario Para Modificar Cultivo</h3>
			</div>
			<div class="modal-body">
				<input type="" id="idCul" name="" hidden>
				<div class="row" >
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<h4 class="text-left text-info"> Nombre Del Cultivo </h4>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
								<input  type="text" class="form-control" name="nomCultivo"  required id="nomCultivo">
							</div>
						</div>
						<div class="form-group">
							<h4 class="text-left text-info"> Descripción Del Cultivo </h4>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
								<input  id="desCultivo" type="text" class="form-control" placeholder="Descripción Del Terreno" name="desCultivo"  required="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group"><br> &nbsp;
						<input type="submit" id="ModificarCultivo" value="Modificar" class="btn bg-primary">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal PARA Modificar Cultivo-->
<div id="modificaEntrada" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title text-muted">Formulario Para Modificar Movimiento De Entrada</h3>
			</div>
			<div class="modal-body">
				<input type="" id="idEnt" name="" hidden>
				<div class="row" >
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<h4 class="text-left text-info">Cantidad Del Movimiento</h4>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
								<input  type="text" class="form-control" name="cantEnt"  required id="cantEnt">
							</div>
						</div>
						<div class="form-group">
							<h4 class="text-left text-info">Descripción Del Movimiento</h4>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
								<input  type="text" class="form-control" name="detaEntrada"  required id="detaEntrada">
							</div>
						</div>
						<div class="form-group">
							<h4 class="text-left text-info">Valor Movimiento </h4>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
								<input  id="valorEntrada" type="text" class="form-control" name="valorEntrada" required>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group"><br> &nbsp;
						<input type="submit" id="ModificarMovimiento" value="Modificar" class="btn bg-primary">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>

<div id="consulCultivosbuscar" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<form id="form-buscarcultivos" class="form-horizontal" role="form" action="<?php base_url();?>CultivosGuardar/bCultivos" method="POST">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Consultar Cultivos</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<h4 class="text-left text-info"> Ingrese Del cultivo* </h4>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
									<input  id="nombreCultivo" type="text" class="form-control" placeholder="Nombre Del Cultivo" name="nombreCultivo" required>
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
<!--MODAL PARA BUSCAR CLIENTE-->
<div id="consultarcliente" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<form id="form-buscarCliente" class="form-horizontal" role="form" action="<?php base_url();?>PasaraReg/buscarCliente" method="POST">
		<input type="hidden" value="1" name="Terrenos">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary"><span class="glyphicon glyphicon-qrcode"></span> Consultar Cedula Cliente</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<h4 class="text-left text-info"> Ingrese Cedula Del Cliente* </h4>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-sound-6-1"> </span>
									<input  id="ccCliente" type="text" class="form-control" placeholder="Numero De Cedula Cliente" name="ccCliente"  autofocus>
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

<!--MODAL PARA movimiento Insumos-->
<div id="Ventas" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<form id="form-buscarCuentasVentas" class="form-horizontal" role="form" action="<?php base_url();?>Cuenta/buscarCuentasVentas" method="POST">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title text-primary">Ventas De La Papa</h3>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-8 col-sm-6 col-md-offset-3">
							<div class="form-group">
								<h5 class="text-right text-info">Tipo De Pago*</h5>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-hourglass"></span>
									<select name="CVenta" id="CVenta" class="form-control">
										<option value="Ninguno">Seleccionar</option>
										<option value="130505">Credito</option>
										<option value="110505">Efectivo</option>
										<option value="111005">Cheque</option>

									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1">
						<div class="form-group"><br> &nbsp;
							<button type="submit" class="btn bg-primary">Enviar</button>
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


