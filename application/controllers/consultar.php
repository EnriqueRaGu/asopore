<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('eliminar_usuario');
	}

	public function index()
	{
        $result = $this->db->get('usuarios');
        $data = array('con' => $result);

		$this->load->view('menu_sistema');
          $this->load->view('afiliados', $data);
	}

     public function eliminar()
     {
     	$id = $this->uri->segment(3);
     	$this->eliminar_usuario->eliminar($id);
     	redirect('consultar/index');
     }

     public function editar()
     {
     	$id = $this->uri->segment(3);
     	$obtenerEnlace = $this->eliminar_usuario->obtenerEnlace($id);
     	if($obtenerEnlace != FALSE)
     	{
     		foreach ($obtenerEnlace->result() as $row) {
     			$apellidos = $row->apellidos;
                    $nombres = $row->nombres;
                    $direccion = $row->direccion;
                    $telefono = $row->telefono;
                    $celular = $row->celular;
                    $correo = $row->correo;
                    $estadocivil = $row->estadocivil;
                    $nacimiento = $row->nacimiento;
                    $lugarexp = $row->lugarexp;
                    $fechaexp = $row->fechaexp;
     		}
     		$data = array(
     			'id' => $id,
     			'apellidos' => $apellidos,
                    'nombres' => $nombres,
                    'direccion' => $direccion,
                    'telefono' => $telefono,
                    'celular' => $celular,
                    'correo' => $correo,
                    'estadocivil' => $estadocivil,
                    'nacimiento' => $nacimiento,
                    'lugarexp' => $lugarexp,
                    'fechaexp' => $fechaexp,
     			);
     	}else {
     		$data = '';
     		return FALSE;
     	}
          $this->load->view('menu_sistema');
     	$this->load->view('modificar_afiliado', $data);
     }

     public function editarEnlace()
     {
     	$id = $this->uri->segment(3);
     	
		$data = array(
				'apellidos' => $this->input->post('apellidos', true),
                    'nombres' => $this->input->post('nombres', true),
                    'direccion' => $this->input->post('direccion', true),
                    'telefono' => $this->input->post('telefono', true),
                    'celular' => $this->input->post('celular', true),
                    'correo' => $this->input->post('correo', true),
                    'estadocivil' => $this->input->post('estadocivil', true),
                    'nacimiento' => $this->input->post('nacimiento', true),
                    'lugarexp' => $this->input->post('lugarexp', true),
                    'fechaexp' => $this->input->post('fechaexp', true),
		);

		$this->eliminar_usuario->editarEnlace($id, $data);
		redirect('consultar');
          
	}

     

}