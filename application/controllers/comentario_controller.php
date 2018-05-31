<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class comentario_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_model');
        $this->load->helper('url');
		
	}

	public function index()
	{
		$this->load->view('main');
		$nombre = (isset($_POST['nombre']));
		$this->stemi_model->insert($nombre);
	}

	public function add_comentary_whit_db(){
			echo "hola agregar comentario";
	}

	public function login(){
		echo 'funcion de login';
	}

	public function quienes_somos(){

		$this->load->view('nosotros_view');
	}

}
