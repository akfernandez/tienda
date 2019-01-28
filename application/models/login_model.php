<?php

class login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function loginok($nombre_usuario,$contra){
        
        $this->db->where("nombre_usuario",$nombre_usuario);
         $this->db->where("contraseña",$contra);
        
        $query=$this->db->get('usuario');   
        if($query->num_rows()>0){
            return true;
        }
        
        else{
            return false;
        }
    }
    
   
    
}