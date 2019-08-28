<?php
class Insertar_usuario extends CI_Model{
   public function __construct(){
       parent::__construct();
   }
   public function insertar($datos)
   {
       $this->db->insert('usuarios', $datos);
       if($this->db->affected_rows() > 0){
           return true;
       }else{
           return false;
       }
   }

   public function insertar_reporte($datos)
   {
     $this->db->insert('aportes', $datos);
       if($this->db->affected_rows() > 0){
           return true;
       }else{
           return false;
       }
   }
}
?>