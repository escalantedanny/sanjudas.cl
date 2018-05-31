<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->database();
        $this->load->helper('form');
		$this->load->model( 'Creyente_model' );
	}

	public function index()
	{
		$this->load->view('main');
	}
	public function add_comentary_whit_db()
	{
	       	$nombre        = $this->input->post('nombre');
	       	$peticion      = $this->input->post('peticion');
           	$this->Creyente_model->addCreyente($nombre, $peticion);
	}

	public function login(){
		$this->load->view('login');
	}

	public function quienes_somos(){

		$this->load->view('nosotros_view');
	}

	public function show_sanjudas(){
	
		$this->load->view('sanjudas');
	}

	public function contacto(){
			$nombre        = $this->input->post('nombre');
			$email      = $this->input->post('email');
			$asunto        = $this->input->post('asunto');
	       	$mensaje      = $this->input->post('mensaje');
           	$this->Creyente_model->addContacto($nombre, $email,$asunto,$mensaje);
	}
}
