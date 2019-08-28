<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultamodel extends CI_Model {

	function __construct() 
	{
		parent::__construct();
	}

	function getuser()
	{
		$query = $this->db->get('usuarios');
		return $query->result_array();
	}

	
}