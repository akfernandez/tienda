<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function index()
	{
              $this->load->model('Inicio_model');
              $a=$this->Inicio_model->get_producto_destacado();
              foreach ($a->result() as $row) {
                  echo $row->nombre;
              }
              $this->load->view('inicio');
	}
}
