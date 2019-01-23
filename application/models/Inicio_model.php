<?php

class Inicio_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_producto_destacado(){
        
        $this->db->where("destacado",true);
        
        $query=$this->db->get('producto');   
        return $query;
    }
    
}

