<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //sessionActiva();
        $this->load->library("mypdf");
        $this->load->model('ReportesModel');
    }

    public function index() {
        
    }

    public function errorPDF($mensajeError = '') {
        $html = '<!DOCTYPE html>
				<html lang="es">
					<body>
						<center><h1>' . getAppName() . '</h1></center>
						<center><h1>Algo ha salido mal</h1></center>
						<center><h1>' . $mensajeError . '</h1></center>
						<center><a href="' . base_url() . '">Volver</a></center>
					</body>
				</html>';
        $this->dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('legal', 'portrait');
        // Render the HTML as PDF
        $this->dompdf->render();
        // Output the generated PDF to Browser
        $options = array('compress' => 1, 'Attachment' => 0);
        $filename = "mypdf";
        $this->dompdf->stream($filename, $options);
    }

    public function MovimientoAbono() {
        $data = $this->ReportesModel->getmovimientoAbono($this->input->post('fechaInicio'), $this->input->post('fechaFin'), $this->session->userdata('id'));

        $html = '<!DOCTYPE html>
				<html lang="es">
					<body>
						<img width=10%; height=10%;>
						<center><h1>Informe De Costos De Producción Para Abonos </h1>		
						<table  class="table table-responsive">';
        $html.='<thead>
                     			<tr>
	                            	<th>Área Del Terreno</th>
	                            	<th>Nombre Del Cultivo</th>
	                           		<th>Fecha Del Movimiento</th>
	                           		<th>Valor Del Movimiento</th>
	                           		<th>Cantidad Del Movimiento</th>
	                           		<th>Descripción Del Movimiento</th>
                        		</tr>
                    		</thead>';
        $html.='<tbody>';
        for ($i = 0; $i < count($data); $i++) {
            $html.='
										<tr>
					 						<td>' . $data[$i]->areaTerreno . '</td>	
											<td>' . $data[$i]->nombreCultivo . '</td>
											<td>' . $data[$i]->fechaMovimientoEntrada . '</td>
											<td>' . $data[$i]->valorMovimientoEntrada . '</td>
											<td>' . $data[$i]->cantidadMovimientoEntrada . '</td>
											<td>' . $data[$i]->detalleMovimientoEntrada . '</td>
										</tr>';
        }
        $html.='				
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
        $options = array('compress' => 1, 'Attachment' => 0);
        $filename = "mypdf";
        $this->dompdf->stream($filename, $options);
    }

    public function MovimientoCal() {
        $data = $this->ReportesModel->getmovimientoCal($this->input->post('fechaInicio'), $this->input->post('fechaFin'), $this->session->userdata('id'));

        $html = '<!DOCTYPE html>
				<html lang="es">
					<body>
						<img width=10%; height=10%;>
						<center><h1>Informe De Costos De Producción Para Cal </h1>		
						<table  class="table table-responsive">';
        $html.='<thead>
                     			<tr>
	                            	<th>Área Del Terreno</th>
	                            	<th>Nombre Del Cultivo</th>
	                           		<th>Fecha Del Movimiento</th>
	                           		<th>Valor Del Movimiento</th>
	                           		<th>Cantidad Del Movimiento</th>
	                           		<th>Descripción Del Movimiento</th>
                        		</tr>
                    		</thead>';
        $html.='<tbody>';
        for ($i = 0; $i < count($data); $i++) {
            $html.='
										<tr>
					 						<td>' . $data[$i]->areaTerreno . '</td>	
											<td>' . $data[$i]->nombreCultivo . '</td>
											<td>' . $data[$i]->fechaMovimientoEntrada . '</td>
											<td>' . $data[$i]->valorMovimientoEntrada . '</td>
											<td>' . $data[$i]->cantidadMovimientoEntrada . '</td>
											<td>' . $data[$i]->detalleMovimientoEntrada . '</td>
										</tr>';
        }
        $html.='				
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
        $options = array('compress' => 1, 'Attachment' => 0);
        $filename = "mypdf";
        $this->dompdf->stream($filename, $options);
    }

    public function MovimientoFungicidas() {
        $data = $this->ReportesModel->getmovimientoFungicidas($this->input->post('fechaInicio'), $this->input->post('fechaFin'), $this->session->userdata('id'));

        $html = '<!DOCTYPE html>
				<html lang="es">
					<body>
						<img width=10%; height=10%;>
						<center><h1>Informe De Costos De Producción Para Fungicidas </h1>		
						<table  class="table table-responsive">';
        $html.='<thead>
                     			<tr>
	                            	<th>Área Del Terreno</th>
	                            	<th>Nombre Del Cultivo</th>
	                           		<th>Fecha Del Movimiento</th>
	                           		<th>Valor Del Movimiento</th>
	                           		<th>Cantidad Del Movimiento</th>
	                           		<th>Descripción Del Movimiento</th>
                        		</tr>
                    		</thead>';
        $html.='<tbody>';
        for ($i = 0; $i < count($data); $i++) {
            $html.='
										<tr>
					 						<td>' . $data[$i]->areaTerreno . '</td>	
											<td>' . $data[$i]->nombreCultivo . '</td>
											<td>' . $data[$i]->fechaMovimientoEntrada . '</td>
											<td>' . $data[$i]->valorMovimientoEntrada . '</td>
											<td>' . $data[$i]->cantidadMovimientoEntrada . '</td>
											<td>' . $data[$i]->detalleMovimientoEntrada . '</td>
										</tr>';
        }
        $html.='				
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
        $options = array('compress' => 1, 'Attachment' => 0);
        $filename = "mypdf";
        $this->dompdf->stream($filename, $options);
    }

    public function MovimientoOtros() {
        $data = $this->ReportesModel->getmovimientoOtros($this->input->post('fechaInicio'), $this->input->post('fechaFin'), $this->session->userdata('id'));

        $html = '<!DOCTYPE html>
				<html lang="es">
					<body>
						<img width=10%; height=10%;>
						<center><h1>Informe De Costos De Producción Para Otras Cosas </h1>		
						<table  class="table table-responsive">';
        $html.='<thead>
                     			<tr>
	                            	<th>Área Del Terreno</th>
	                            	<th>Nombre Del Cultivo</th>
	                           		<th>Fecha Del Movimiento</th>
	                           		<th>Valor Del Movimiento</th>
	                           		<th>Cantidad Del Movimiento</th>
	                           		<th>Descripción Del Movimiento</th>
                        		</tr>
                    		</thead>';
        $html.='<tbody>';
        for ($i = 0; $i < count($data); $i++) {
            $html.='
										<tr>
					 						<td>' . $data[$i]->areaTerreno . '</td>	
											<td>' . $data[$i]->nombreCultivo . '</td>
											<td>' . $data[$i]->fechaMovimientoEntrada . '</td>
											<td>' . $data[$i]->valorMovimientoEntrada . '</td>
											<td>' . $data[$i]->cantidadMovimientoEntrada . '</td>
											<td>' . $data[$i]->detalleMovimientoEntrada . '</td>
										</tr>';
        }
        $html.='				
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
        $options = array('compress' => 1, 'Attachment' => 0);
        $filename = "mypdf";
        $this->dompdf->stream($filename, $options);
    }

    public function MovimientoJornales() {
        $data = $this->ReportesModel->getmovimientoJornales($this->input->post('fechaInicio'), $this->input->post('fechaFin'), $this->session->userdata('id'));

        $html = '<!DOCTYPE html>
				<html lang="es">
					<body>
						<img width=10%; height=10%;>
						<center><h1>Informe De Costos De Producción Para Jornales </h1>		
						<table  class="table table-responsive">';
        $html.='<thead>
                     			<tr>
	                            	<th>Área Del Terreno</th>
	                            	<th>Nombre Del Cultivo</th>
	                           		<th>Fecha Del Movimiento</th>
	                           		<th>Valor Del Movimiento</th>
	                           		<th>Cantidad Del Movimiento</th>
	                           		<th>Descripción Del Movimiento</th>
                        		</tr>
                    		</thead>';
        $html.='<tbody>';
        for ($i = 0; $i < count($data); $i++) {
            $html.='
										<tr>
					 						<td>' . $data[$i]->areaTerreno . '</td>	
											<td>' . $data[$i]->nombreCultivo . '</td>
											<td>' . $data[$i]->fechaMovimientoEntrada . '</td>
											<td>' . $data[$i]->valorMovimientoEntrada . '</td>
											<td>' . $data[$i]->cantidadMovimientoEntrada . '</td>
											<td>' . $data[$i]->detalleMovimientoEntrada . '</td>
										</tr>';
        }
        $html.='				
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
        $options = array('compress' => 1, 'Attachment' => 0);
        $filename = "mypdf";
        $this->dompdf->stream($filename, $options);
    }

    public function MovimientoVentas() {
        $data = $this->ReportesModel->getmovimientoVentas($this->input->post('fechaInicio'), $this->input->post('fechaFin'), $this->session->userdata('id'));

        $html = '<!DOCTYPE html>
                <html lang="es">
                    <body>
                        <img width=10%; height=10%;>
                        <center><h1>Estados De Resultados Total</h1>     
                        <table  class="table table-responsive">';
        $html.='<thead>
                                <tr>
                                    
                                    <th>Utilidad Del Cultivo</th>
                                    <th></th>
                                </tr>
                            </thead>';
        $html.='<tbody>';
        foreach ($data as $filas) {
            $html.='
                                 <tr>
                                    <td>' . $filas->Valor  . '</td>  
                                </tr>';                                    
        }
        $html.='                
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
        $options = array('compress' => 1, 'Attachment' => 0);
        $filename = "mypdf";
        $this->dompdf->stream($filename, $options);
    }

}

/* End of file Reportes.php */
/* Location: ./application/controllers/Reportes.php */