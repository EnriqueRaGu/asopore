<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('sistema');
		}
		if(isset($_POST['password'])){
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['username'],$_POST['password'])){
				$this->session->set_userdata('username', $_POST['username']);
				redirect('sistema');
			}else{
				echo "<script>alert('Usuario o Contraseña incorrecta.');</script>";
				redirect('login');
			}
		}
		$this->load->view('login');
	}

	public function cerrarsesion() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
