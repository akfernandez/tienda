<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->model('Inicio_model');
        $result = $this->Inicio_model->get_producto_destacado();

        $this->load->view('inicio_plantilla', array(
            'destacados' => $result
            
        ));
    }

}
