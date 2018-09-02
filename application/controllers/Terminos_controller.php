<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terminos_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->helper('url');
        	$this->load->database();
        	$this->load->helper('form');
	}

	public function index()
	{
		//$this->load->view('uso');
	}

	public function uso()
	{
		$this->load->view('terminos/uso');
	}

	public function responsable()
	{
		$this->load->view('terminos/responsable');
	}

	public function copyright()
	{
		$this->load->view('terminos/copyright');
	}

	//public function privacidad()
	//{
		//$this->load->view('terminos/privacidad');
	//}

}