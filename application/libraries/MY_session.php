<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * Created on Apr, 2011
 * session exteds
 * CI sessions
 * MY_Session.php 
 */

class MY_Session extends CI_Session {

    public function __construct()
    {
        parent::__construct();
    }

	public function set_session($info = array())
	{
		$data['logged_in'] = FALSE;
		$data['USU_USUARIO'] = '';
		$data['ROL_ID'] = '';
		$data['USU_ID'] = '';
		foreach ($info as $key => $value) {
			if (array_key_exists($key, $data))
				$data[$key] = $value;
		}
		$this->set_userdata($data);
	}

	public function is_logged()
 	{
 		$logged = $this->userdata('logged_in');
 		return $logged;
 	}
	
	public function logout()
	{
		$this->unset_userdata('logged_in');
		$this->sess_destroy();
		$data['container'] = 'login_view';
		$data['menu'] = FALSE;
		$data['dataview'] = FALSE;
		return $data;
	}
 }
?>
