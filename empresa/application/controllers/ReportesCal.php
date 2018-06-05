<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReportesCal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//sessionActiva();
		$this->load->library("mypdf");
		$this->load->model('ReportesModelCal');
	}
	public function index()
	{
		$data=$this->ReportesModelCal->getmovimiento();
		$html='<!DOCTYPE html>
		<html lang="es">
	</style>
	<body>
		<img width=10%; height=10%;>
		<center><h1>Informe De Costos De Producción Para Cal</h1>
		<h3></h3></center>
		<table  class="table table-responsive">';
			$html.='<thead>
                     	<tr>
                            <th>Area Del Terreno</th>
                            <th>Nombre Cultivo</th>
                            <th>Fecha Del Movimiento</th>
                            <th>Valor Del Movimiento</th>
                            <th>Descripción Del Movimiento</th>
                        </tr>
                    </thead>';
			$html.='<tbody>';
				for ($i=0; $i < count($data); $i++) {
				$html.='
				<tr>
					 <td>'.$data[$i]->areaTerreno.'</td>	
					<td>'.$data[$i]->nombreCultivo.'</td>
					<td>'.$data[$i]->fechaMovimientoEntrada.'</td>
					<td>'.$data[$i]->valorMovimientoEntrada.'</td>
					<td>'.$data[$i]->detalleMovimientoEntrada.'</td>
				</tr>';
				}$html.='
				
			</tbody>
		</table>
	</body>
</html>';
$data=$this->ReportesModel->getmovimiento();
		$html='<!DOCTYPE html>
		<html lang="es">
	</style>
	<body>
		<img width=10%; height=10%;>
		<center><h1>Informe De Costos De Producción Para Abonos</h1>
		<h3></h3></center>
		<table  class="table table-responsive">';
			$html.='<thead>
                     	<tr>
                            <th>Area Del Terreno</th>
                            <th>Nombre Cultivo</th>
                            <th>Fecha Del Movimiento</th>
                            <th>Valor Del Movimiento</th>
                            <th>Descripción Del Movimiento</th>
                        </tr>
                    </thead>';
			$html.='<tbody>';
				for ($i=0; $i < count($data); $i++) {
				$html.='
				<tr>
					 <td>'.$data[$i]->areaTerreno.'</td>	
					<td>'.$data[$i]->nombreCultivo.'</td>
					<td>'.$data[$i]->fechaMovimientoEntrada.'</td>
					<td>'.$data[$i]->valorMovimientoEntrada.'</td>
					<td>'.$data[$i]->detalleMovimientoEntrada.'</td>
				</tr>';
				}$html.='
				
			</tbody>
		</table>
	</body>
</html>';
$this->dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$this->dompdf->setPaper('legal', 'portrait');
// Render the HTML as PDF
$this->dompdf->render();
// Output the generated PDF to Browser
$options = array('compress' => 1 ,'Attachment' => 0);
$filename = "mypdf";
$this->dompdf->stream($filename,$options);
}
public function errorPDF($mensajeError='')
{
$html='<!DOCTYPE html>
<html lang="es">
	<body>
		<center><h1>'.getAppName().'</h1></center>
		<center><h1>Algo ha salido mal</h1></center>
		<center><h1>'.$mensajeError.'</h1></center>
		<center><a href="'.base_url().'">Volver</a></center>
	</body>
</html>';
$this->dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$this->dompdf->setPaper('legal', 'portrait');
// Render the HTML as PDF
$this->dompdf->render();
// Output the generated PDF to Browser
$options = array('compress' => 1 ,'Attachment' => 0);
$filename = "mypdf";
$this->dompdf->stream($filename,$options);
}

public function ExpendioCarne($idActa){
}
public function PlazasMercado($idActa){
}
public function ExpendioBebidasAlcoholicas($idActa){
}
public function ExpendioAlimentosBebidas($idActa){
}
public function ReporteControlSanitarioBebidasAlcoholicas($idActa){
}
}