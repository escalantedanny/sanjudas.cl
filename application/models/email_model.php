<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email_model extends CI_Model
{
	
    public function insert($data = ''){
		if($data){
			$values = array(
				'nombre' => $data['nombre'],
				'email' => $data['email'],
				'asunto' => $data['asunto'],
				'mensaje' => $data['mensaje']
			);
			
			return $this->db->insert('comentarios',$values);
		}
		else{
			return FALSE;
		}
	}
	public function delete($where = ''){
		if($where){
			$this->db->where($where);
			return $this->db->delete('LATIN_CONTACTO');
		}
		else{
			return FALSE;
		}
	}
}