<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** La clase debe tener el mismo nombre que el archivo pero en mayúscula el primer caracter */
class A02Bases extends CI_Controller {
	/** priemero llamo a la funcioon construct del padre, para que $this tenga sentido */
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('bases_model');
	}
	function index(){
		$this->load->view('g00encabezado');
		$this->load->view('B00bases');
		$this->load->view('g02retorno');
		$this->load->view('g03cierre');
	}
	
	function cargarNombre(){
		$this->load->view('g00encabezado');
		$this->load->view('B01formulario');
		$this->load->view('g02retorno');
		$this->load->view('g03cierre');
	}
	function recibirDatos(){
		$data= array(
			/** input es el objeto que uso para manipular los datos de entrada */
			'nombre'=>$this->input->post('nombre'));
			$this->bases_model->agregaNombre($data);
			$this->mostrarDatos();
	}
	function mostrarDatos(){
		$data=array(
			'nombres'=>$this->bases_model->leerDatos()
		);
		$this->load->view('b02mostrarDatos',$data);
		$this->cargarNombre();	
	}
}
