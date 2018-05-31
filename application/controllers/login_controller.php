<?php
class Login_controller extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('usuario_model');	
		
	}

	public function index()
	{
		if($this->session->userdata("ID_USER")){
			redirect("login");
		}
	}
	
	public function iniciar($email, $password){

        $user = $_POST['$email'];
        $pass = $_POST['$password'];

		if($_POST){
			if($this->usuario_model->login($_POST['user'], $_POST['pass'])){
				echo TRUE;
			}
			else{
				echo FALSE;
			}
		}
		else{
			echo FALSE;
		}
	}
	public function cerrarsesion(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('ID_USER');
		$this->session->unset_userdata('LOGIN');
		$this->session->unset_userdata('NOMBRE');
		$this->session->unset_userdata('SITE');
		$this->session->unset_userdata('PAIS_ID');
		$this->session->unset_userdata('ENTIDAD');
		$this->session->unset_userdata('ROL');
		redirect('login');
	}
}
?>