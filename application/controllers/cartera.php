<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cartera extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('insertar_usuario');
		$this->load->model('eliminar_usuario');
		$this->load->model('buscar_usuario');
	}

	public function index()
	{
        $result = $this->db->get('vaportes');
        $data = array('con' => $result);

		$this->load->view('menu_sistema');
		$this->load->view('aportes', $data);
	}

	public function ir_reporte()
	{
		$this->load->view('menu_sistema');
		$this->load->view('crear_reporte');
	}

	public function crear_reporte()
	{
			$datocedula = $this->input->post('cedula');
			$datobase = $this->input->post('base');
			$datodescuento = $this->input->post('descuento');
			$datomeses = $this->input->post('meses');
		

			$datos = array(
				'cedula' => $datocedula,
				'base' => $datobase,
				'descuento' => $datodescuento,
				'meses' => $datomeses,
				
			);
			if($this->insertar_usuario->insertar_reporte($datos) == true) 
			{
				echo "<script>alert('Se agrego correctamente.');</script>";
				$this->load->view('menu_sistema');
				$this->load->view('crear_reporte');
			}
	}

	public function ir_beneficios()
	{
		$result = $this->db->get('usuarios');
        $data = array('result' => $result);

        $this->load->view('menu_sistema');
		$this->load->view('beneficios', $data);
	}

	public function ir_retiroaporte()
	{
		$this->load->view('retirar_aporte');
	}

	public function retirar_aporte()
	{
		$id = $this->uri->segment(3);
     	$obtenerEnlace = $this->eliminar_usuario->obtenervaporte($id);
     	if($obtenerEnlace != FALSE)
     	{
     		foreach ($obtenerEnlace->result() as $row) {
     				$apellidos = $row->apellidos;
                    $nombres = $row->nombres;
                    $aportes = $row->aportes;
                    $saldo = $row->saldo;
     		}
     		$data = array(
     				'id' => $id,
     				'apellidos' => $apellidos,
                    'nombres' => $nombres,
                    'aportes' => $aportes,
                    'saldo' => $saldo
     			);
     	}else {
     		$data = '';
     		return FALSE;
     	}
     	$this->load->view('menu_sistema');
		$this->load->view('retirar_aporte', $data);
	}

	public function buscarusuario_beneficio()
	{
     	$data = array();
     	$query = $this->input->get('query');

     	if ($query) {
     		$result = $this->buscar_usuario->buscar_beneficio($query);
     		if ($result != FALSE) {
     			$data = array('result' => $result);
     		}else {
     			$data = array('result' => '');
     		}
     	}
     	$this->load->view('menu_sistema');
     	$this->load->view('beneficios', $data);
	}

	public function beneficio()
	{
		$id = $this->uri->segment(3);
		$obtenerEnlace = $this->eliminar_usuario->obtenerenlacevaporte($id);
		if($obtenerEnlace != FALSE)
     	{
     		foreach ($obtenerEnlace->result() as $row) {
     				$apellidos = $row->apellidos;
                    $nombres = $row->nombres;
     		}
     		$data = array(
     				'id' => $id,
     				'apellidos' => $apellidos,
                    'nombres' => $nombres,
     			);
     	}else {
     		$data = '';
     		return FALSE;
     	}
     	$this->load->view('menu_sistema');
		$this->load->view('beneficio_formulario', $data);
	}

	public function ir_creditos()
	{
		$result = $this->db->get('vaportes');
        $data = array('result' => $result);

		$this->load->view('menu_sistema');
		$this->load->view('usuarios_credito', $data);
	}

	public function retirar_credito()
	{
		$id = $this->uri->segment(3);
     	$obtenerEnlace = $this->eliminar_usuario->obtenervaporte($id);
     	if($obtenerEnlace != FALSE)
     	{
     		foreach ($obtenerEnlace->result() as $row) {
     				$apellidos = $row->apellidos;
                    $nombres = $row->nombres;
     		}
     		$data = array(
     				'id' => $id,
     				'apellidos' => $apellidos,
                    'nombres' => $nombres,
     			);
     	}else {
     		$data = '';
     		return FALSE;
     	}
     	$this->load->view('menu_sistema');
		$this->load->view('creditos', $data);
	}

}