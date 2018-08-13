<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Imagenes_controller extends CI_Controller {

	public function __construct()
	{
	    	parent::__construct();
        	$this->load->database();
   			$this->load->library(array('form_validation','session'));
    		$this->load->helper('url');
		    //$this->load->model( 'imagenes' );
	}

	public function index()
	{
		$this->load->view('imagenes');
	}
	public function mostrar()
	{
	       	$this->load->view('imagenes');
	}

	public function virgen_view(){
		$this->load->view('paginas/inmaculada');
	}

	public function grupoJuvenil_view(){
		$this->load->view('paginas/grupoJuvenil');
	}

	public function vigilia_view(){
		$this->load->view('paginas/vigilia');
	}

	public function comunidad_view(){
		$this->load->view('paginas/comunidad');
	}

}

?>