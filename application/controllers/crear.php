<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crear extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('insertar_usuario');
	}

	public function index()
	{
		$this->load->view('menu_sistema');
		$this->load->view('afiliar_asociado');
	}

	public function insertarDatos()
		{
			$datosnombres = $this->input->post('nombres');
			$datoapellidos = $this->input->post('apellidos');
			$datocedula = $this->input->post('cedula');
			$datotipo = $this->input->post('tipo');
			
			$datodireccion = $this->input->post('direccion');
			$datotelefono = $this->input->post('telefono');
			$datocelular = $this->input->post('celular');

			$datocorreo = $this->input->post('correo');
			$datoestadocivil = $this->input->post('estadocivil');
			$datonacimiento = $this->input->post('nacimiento');
			$datolugarexp = $this->input->post('lugarexp');
			$datofechaexp = $this->input->post('fechaexp');

			$datos = array(
				'nombres' => $datosnombres,
				'apellidos' => $datoapellidos,
				'cedula' => $datocedula,
				'tipo_asociado' => $datotipo,
				
				'direccion' => $datodireccion,
				'telefono' => $datotelefono,
				'celular' => $datocelular,

				'correo' => $datocorreo,
				'estadocivil' => $datoestadocivil,
				'nacimiento' => $datonacimiento,
				'lugarexp' => $datolugarexp,
				'fechaexp' => $datofechaexp
			);

			if($this->insertar_usuario->insertar($datos) == true) 
			{
				echo "<script>alert('Se agrego correctamente.');</script>";
				$this->load->view('menu_sistema');
				$this->load->view('afiliar_asociado');
			}
		}
}