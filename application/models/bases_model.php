<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** La clase debe tener el mismo nombre que el archivo pero en mayúscula el primer caracter */
class Bases_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function agregaNombre($data){
        $this->db->insert('tabla1',array('nombre'=>$data['nombre']));
    }
    function leerDatos(){
        $query=$this->db->get('tabla1');
        if($query->num_rows()>0) return $query;
        else return false;
    }
}
?>