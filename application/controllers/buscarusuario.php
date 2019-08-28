<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscarusuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
          $this->load->model('buscar_usuario');
     }
	
	public function index()
	{
          $this->load->view('menu_sistema');
		$this->load->view('buscar_afiliado');
	}

	public function buscar()
     {
     	$data = array();
     	$query = $this->input->get('query');

     	if ($query) {
     		$result = $this->buscar_usuario->buscar($query);
     		if ($result != FALSE) {
     			$data = array('result' => $result);
     		}else {
     			$data = array('result' => '');
     		}
     	}
          $this->load->view('menu_sistema');
     	$this->load->view('buscar_afiliado', $data);
     	
     }

    
}