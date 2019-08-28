<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('sistema');
		}else {
			redirect('login');
		}
	}
}