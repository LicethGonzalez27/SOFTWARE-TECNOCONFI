<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class consultas_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function consulCuenta($id = false)    {
        if($id === false) {
            $this->db->select('idCuentas, codigoCuenta, nombreCuenta, Descripcion_Cuenta, fechaCuentas, Estado_idEstado');
            $this->db->from('cuentas');
            $this->db->where('nombreCuenta=caja general');
        }
        else  {
        }

        $query = $this->db->get();
        if($query->num_rows() > 0 ) {
            return $query->result();
        }
    }
 
}
/*
 * end of application/models/consultas_model.php
 */