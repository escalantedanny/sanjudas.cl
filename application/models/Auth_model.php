<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Agenda_Model
*
* Clase principal de la aplicacion de tipo modelo
* esta clase trabaja directamente con la base de datos
* y es ocupada por el controlador Agenda.
*
* @author Danny Ezequiel Escalante
*
* @package modelo creyente
*/

	class Auth_model extends CI_Model {
	
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function loginValidation($email, $pass)
 		{
                $query=$this->db->query('SELECT * FROM user WHERE correo=? AND password=? ', array($email,  md5($pass)) );

 		if ($query->num_rows() > 0) {
			$row = $query->result_array();
				return $row[0];
			}
			else{
	 			return FALSE;
			}
 		}


	    public function obtieneRol($correo)
    	{

    	$sql = "SELECT rol FROM user WHERE correo = '".$correo."'";
    	$query = $this->db->query($sql);
    	$email = "";
    	if ( $query->num_rows > 0 )
    		foreach ($query->result_array() as $row) {
    			$rol = $row['rol'];
    		}

    	return $rol;
    }
  } // fin de la funcion  del modelo principal

?>