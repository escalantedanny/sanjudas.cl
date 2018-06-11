<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 05-06-18
 * Time: 23:02
 */
Class Auth_controller extends CI_CONTROLLER
{
    public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        //cargamos la base de datos por defecto
        $this->load->database();
        //cargamos el helper url y el helper form
        $this->load->helper(array('url','form'));
        //cargamos la librería form_validation
        $this->load->library(array('form_validation'));

        $this->load->model('auth_model');
    }

    public function index()
    {   
        $this->load->view('login');
    }

    public function login(){

        if(!isset($_POST['email'])){    //    Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.    
            $this->load->view('login');        //    Por lo tanto le presentamos la pantalla del formulario de ingreso.
        }
        else{//    Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
            $this->form_validation->set_rules('email','Email','required|valid_email');        //    Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
            $this->form_validation->set_rules('passw','Password','required');
            if(($this->form_validation->run()==FALSE)){//    Verificamos si el usuario superó la validación
                $this->load->view('login'); //    En caso que no, volvemos a presentar la pantalla de login
            }
            else{//    Si ambos campos fueron correctamente rellanados por el usuario,
                $this->load->model('auth_model');
                $result=$this->auth_model->loginValidation($_POST['email'],$_POST['passw']);    //    comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
                if($result == TRUE){    // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
                    $this->load->view('admin');    //    Si el usuario ingresó datos de acceso válido, imprimos un mensaje de validación exitosa en pantalla
                }
                else{    //    Si no logró validar
                    $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
                    $this->load->view('login',$data);    //    Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
                }
            }
        }
    }



}