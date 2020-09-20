<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** La clase debe tener el mismo nombre que el archivo pero en mayúscula el primer caracter */
class A01Modelo extends CI_Controller {
	/** priemero llamo a la funcioon construct del padre, para que $this tenga sentido */
	function __construct(){
		parent::__construct();
		$this->load->helper('Modelo');
		$this->load->library('Menu', array('Inicio', 'Contactos', 'Curso'));
		/** Podría cargarla en una función 
		* en particular si la usara solo en esa función */
	}
	public function index()
	{
		/** Puedo utilizar un array dato[] para paasar datos a la vista */
		$dato['string']=' :-) Este es un modelo';
		$dato['mi_menu']= "No hay menú";
		/** la vista está en views */
		$this->load->view('g00encabezado');
		$this->load->view('Modelo',$dato);
		$this->load->view('g02retorno');
		$this->load->view('g03cierre');
	}

	public function funcion2(){
		$dato['string']=' Esta es la funcion2';
		$dato['mi_menu']= $this->menu->construirMenu();
		$this->load->view('g00encabezado');
		$this->load->view('Modelo',$dato);
		$this->load->view('g02retorno');
		$this->load->view('g03cierre');
	}
}
