<?php
    class Eliminar_usuario extends CI_Model{
     
     public function __construct()
     {
         parent::__construct();
     }

     public function eliminar($id)
     {
      $this->db->where('cedula', $id);
      $this->db->delete('usuarios');
    }

    public function obtenerEnlace($id)
    {
        $this->db->where('cedula', $id);
        $query = $this->db->get('usuarios');

        if($query->num_rows() > 0)
        {
            return $query;
        }else {
            return FALSE;
        }
    }

    public function obtenerenlacevaporte($id)
    {
        $this->db->where('cedula', $id);
        $query = $this->db->get('usuarios');

        if($query->num_rows() > 0)
        {
            return $query;
        }else {
            return FALSE;
        }
    }
     public function obtenervaporte($id)
    {
        $this->db->where('cedula', $id);
        $query = $this->db->get('vaportes');

        if($query->num_rows() > 0)
        {
            return $query;
        }else {
            return FALSE;
        }
    }


    public function editarEnlace($id, $data)
    {
        $this->db->where('cedula', $id);
        $this->db->update('usuarios', $data);
    }
}
?>