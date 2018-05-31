<?php
class Usuario_Model extends CI_Model{
	
    public $data;
    public function __construct() {
        parent::__construct();
        $this->data['dataview'] = FALSE;
    }

	public function login($user = '', $pass = ''){
		if(isset($user) && isset($pass)){

		/* CREACION DE SESSIONES - FH */
            $query=$this->db->query('SELECT LATIN_USUARIOS.*, LATIN_ROL.CODIGO FROM LATIN_USUARIOS INNER JOIN LATIN_ROL ON LATIN_USUARIOS.ROL = LATIN_ROL.ID
            						WHERE LOGIN=? AND PASS=? ', 
            						array($user,  md5($pass))); 
	 		if ($query->num_rows() > 0) {
				$row = $query->result_array();

				foreach ($row as $r) {
					$data_user['logged_in'] = TRUE;
					$data_user['ID_USER'] = $r['ID_USER'];
					$data_user['LOGIN']   = $r['LOGIN'];
					$data_user['NOMBRE']  = $r['NOMBRE'];
					$data_user['SITE']    = $r['SITE'];
					$data_user['PAIS_ID'] = $r['PAIS_ID'];
					$data_user['ENTIDAD'] = $r['ENTIDAD'];
					$data_user['rol'] = $r['CODIGO'];

					$this->session->set_userdata($data_user);
					
					return TRUE;
				}
			}
			else
	 			return FALSE;
		}
	}

	public function get_cathlab($pais = ''){
		if( $pais ) {
			$this->db->where('SITE',$pais);
		}
		$this->db->select('TM_CATHLAB.ID_CATHLAB AS ID, TM_CATHLAB.NOMBRE');
		$this->db->order_by('NOMBRE');
		$query = $this->db->get('TM_CATHLAB');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}

	public function get_referencia($pais = ''){
		if( $pais ) {
			$this->db->where('TM_CLIENTE.SITE_LATIN',$pais);
		}
		$this->db->select('TM_CLIENTE.CLIE_ID AS ID, TM_CLIENTE.CLIE_NOMBRE AS NOMBRE');
		$this->db->from('TM_CLIENTE');
		$this->db->join('TM_CATHLAB','TM_CLIENTE.ID_CATHLAB_ASIG = TM_CATHLAB.ID_CATHLAB');
		$this->db->order_by('CLIE_NOMBRE');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	
	public function select_list($pais = '', $rol = '', $usuario = '', $pagina = 1, $limit = ''){
		if($pais) $this->db->where("SITE", $pais);
		if($rol) $this->db->where("ROL IN (".$rol.")"); else $this->db->where("ROL = -1");
		if($usuario) $this->db->where("(NOMBRE LIKE '%".$usuario."%' OR LOGIN LIKE '%".$usuario."%')");
		$this->db->select("LATIN_USUARIOS.*");
		if($limit) $this->db->limit($limit, ($pagina - 1) * $limit );
		$query = $this->db->get("LATIN_USUARIOS");
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}
	
	public function select($id = ''){
		if($id){
			$this->db->where("SHA1(ID_USER)",$id);
			$query = $this->db->get("LATIN_USUARIOS");
			if($query->num_rows() > 0){
				return $query->row_array();
			}
			else{
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	}
	
	public function checkuser($user = "", $pwd = "", $rol = ""){
		if($user && $pwd && $rol){
			if($rol == "spoke") $rol = 1;
			if($rol == "hub") $rol = 2;
			if($rol == "admin") $rol = 3;
			if($rol == "superadmin") $rol = 4;
			if($rol == "master") $rol = 5;
			$this->db->where("LOGIN",$user);
			$this->db->where("PASS",md5($pwd));
			$this->db->where("ROL",$rol);
			$query = $this->db->get("LATIN_USUARIOS");
			if($query->num_rows() > 0){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	}
	
	public function checkcreate($data = ""){
		if($data){
			$this->db->where("LOGIN",$data["LOGIN"]);
			$this->db->where("SITE",$data["SITE"]);
			if(array_key_exists("ID_USER",$data)) $this->db->where("SHA1(ID_USER) != ",$data["ID_USER"]);
			$query = $this->db->get("LATIN_USUARIOS");
			return ($query->num_rows()) ? TRUE : FALSE;
		}
		else{
			return FALSE;
		}
	}
	
	public function upd($data = "", $id = ""){
		if($data && $id){
			$this->db->where("SHA1(ID_USER)",$id);
			return $this->db->update("LATIN_USUARIOS",$data);
		}
		else{
			return FALSE;
		}
	}
	public function ins($data = ""){
		if($data){
			return $this->db->insert("LATIN_USUARIOS",$data);
		}
		else{
			return FALSE;
		}
	}
}
?>