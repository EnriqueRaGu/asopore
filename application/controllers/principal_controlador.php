<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_controlador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('menu');
		$this->load->view('principal');
    }
    public function mision()
	{
		$this->load->view('menu');
		$this->load->view('mision');
    }
    public function vision()
	{
		$this->load->view('menu');
		$this->load->view('vision');
    }
    public function valores()
	{
		$this->load->view('menu');
		$this->load->view('valores');
	}
}