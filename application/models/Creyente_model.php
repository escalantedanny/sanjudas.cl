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

	class Creyente_model extends CI_Model {
	
	    public function __construct()
	    {
	        parent::__construct();
	    }
	    
	    // funcion que inserta los registros encontrados ap generar pdf 
	    public function addCreyente($nombre, $peticion){
	        $sql="INSERT INTO creyente(nombre, peticion, log) VALUES ('".$nombre."', '".$peticion."',now())";
	    	$this->db->query($sql);
	    }

	}
?>