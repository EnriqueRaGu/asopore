<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public $variable;

	function __construct() 
	{
		parent::__construct();
	}

	public function login($username,$password)
	{
		/*si nos devuelve una fila es por que el usuario y la contraseña son correctos*/

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('login');
		if($q->num_rows()>0)
		{
			return true;
		}else{
			return false;
		}
	}
}