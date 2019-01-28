<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->model('Inicio_model');
      

        $this->load->view('inicio_plantilla', array(
            'destacados' => $this->Inicio_model->get_producto_destacado(),
            'categorias' => $this->Inicio_model->get_categorias()
        ));
    }
    
     public function tienda() {
        $this->load->model('Inicio_model');
        

        $this->load->view('tienda', array(
            'destacados' => $this->Inicio_model->get_producto_destacado(),
            'categorias' => $this->Inicio_model->get_categorias()
        ));
    }

}
