<?php

class registro_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function añadir_usuario($array){
        
      $this->db->insert('usuario', $array);
    }
    
   
    
}

