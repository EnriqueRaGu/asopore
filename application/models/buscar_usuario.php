<?php
    class Buscar_usuario extends CI_Model{
     
     public function __construct()
     {
         parent::__construct();
     }

     function buscar($query)
    {
        $this->db->like('cedula', $query);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() > 0) {
            return $query;
        }else{
            return FALSE;
        }
    }

    function buscar_beneficio($query)
    {
        $this->db->like('cedula', $query);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() > 0) {
            return $query;
        }else{
            return FALSE;
        }
    }
}
?>