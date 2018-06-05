<hr>
<div class="container well">
    <div class="container-header"><h3 class="title text-info">Consultar Por*</h3>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 "><br>
                <form action="<?= base_url('Reportes')?>/MovimientoAbono" method="POST">
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" placeholder=" Fecha Inicio" name="fechaInicio" id="fechaInicio">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" placeholder=" Fecha Fin" id="fechaFin" name="fechaFin">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br><br><br>               
                    <button type="submit" class="btn btn-default  btn-lg btn-block"  title="" >Reportes Para Abono</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 "><br>
                <form action="<?= base_url('Reportes')?>/MovimientoCal" method="POST">
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='text' class="form-control" placeholder=" Fecha Inicio" name="fechaInicio" id="fechaInicio">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker4'>
                            <input type='text' class="form-control" placeholder=" Fecha Fin" id="fechaFin" name="fechaFin">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br><br><br>               
                     <button type="submit" class="btn btn-default  btn-lg btn-block"  title="" >Reportes Para Cal</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 "><br>
                <form action="<?= base_url('Reportes')?>/MovimientoFungicidas" method="POST">
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker5'>
                            <input type='text' class="form-control" placeholder=" Fecha Inicio" name="fechaInicio" id="fechaInicio">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker6'>
                            <input type='text' class="form-control" placeholder=" Fecha Fin" id="fechaFin" name="fechaFin">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br><br><br>               
                     <button type="submit" class="btn btn-default  btn-lg btn-block"  title="" >Reportes Para Fungicidas</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 "><br>
                <form action="<?= base_url('Reportes')?>/MovimientoOtros" method="POST">
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker7'>
                            <input type='text' class="form-control" placeholder=" Fecha Inicio" name="fechaInicio" id="fechaInicio">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker8'>
                            <input type='text' class="form-control" placeholder=" Fecha Fin" id="fechaFin" name="fechaFin">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br><br><br>               
                     <button type="submit" class="btn btn-default  btn-lg btn-block"  title="" >Reportes Para Otros</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 "><br>
                <form action="<?= base_url('Reportes')?>/MovimientoJornales" method="POST">
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker9'>
                            <input type='text' class="form-control" placeholder=" Fecha Inicio" name="fechaInicio" id="fechaInicio">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker10'>
                            <input type='text' class="form-control" placeholder=" Fecha Fin" id="fechaFin" name="fechaFin">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br><br><br>               
                     <button type="submit" class="btn btn-default  btn-lg btn-block"  title="" >Reportes Para Jornales</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 "><br>
                <form action="<?= base_url('Reportes')?>/MovimientoVentas" method="POST">
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker11'>
                            <input type='text' class="form-control" placeholder=" Fecha Inicio" name="fechaInicio" id="fechaInicio">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class='input-group date' id='datetimepicker12'>
                            <input type='text' class="form-control" placeholder=" Fecha Fin" id="fechaFin" name="fechaFin">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br><br><br>               
                     <button type="submit" class="btn btn-default  btn-lg btn-block"  title="" >Reportes Para Ventas</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker2').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker3').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker4').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker5').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker6').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker7').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker8').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker9').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker10').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker11').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datetimepicker12').datetimepicker({
            format: 'YYYY-MM-DD'
            });
        });
    </script>