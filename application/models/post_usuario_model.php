<?php
class Post_usuario_model extends CI_Model{

    function buscar($campo) 
    {

        $this->db->where('cedula',$campo);
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0)
        {
            return $q;
        }else{
            return false;
        }


        /*
         $result = $this->db->get('usuarios');


        $query = $this->db->get('usuarios')->row();
        $this->db->like('cedula', $query);
        if($query->num_rows() > 0) {
            return $query;
        }else {
            return FALSE;
        }*/
    }
    
}