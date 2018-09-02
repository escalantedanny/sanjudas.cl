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

	class Intro_model extends CI_Model {
	
	    public function __construct()
	    {
	        parent::__construct();
	    }
	    
	    // funcion que inserta los registros encontrados ap generar pdf 
	    public function index(){
	        
					}
		
		public function show(){
//			$sql="SELECT * FROM intro";
					$this->db->limit(1);
	    $query = $this->db->get("intro");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;

		}

		public function addMessage($titulo, $message, $detalle){
			$sql="INSERT INTO intro(titulo, descripcion, asunto, detalle) VALUES ('".$titulo."', '".$message."','".$detalle."')";
	    	$this->db->query($sql);
		}

	}
?>