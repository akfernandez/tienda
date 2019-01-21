<?php

class Inicio_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_producto_destacado(){
        $this->db->select("nombre,imagen");
        $this->db->from("producto");
        $this->db->where("destacado",true);
        
        $query=$this->db->get();
        return $query;
    }
    
}

