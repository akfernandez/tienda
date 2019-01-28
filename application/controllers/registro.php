<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {

    public function index() {
        $this->load->model("registro_model");
        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'required|alpha'
            ),
            array(
                'field' => 'apellido',
                'label' => 'Apellidos',
                'rules' => 'required|alpha'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'direccion',
                'label' => 'Direccion',
                'rules' => 'required'
            ),
            array(
                'field' => 'cp',
                'label' => 'Codigo Postal',
                'rules' => 'required'
            ),
            array(
                'field' => 'provincia',
                'label' => 'Provincia',
                'rules' => 'required'
            ),
            array(
                'field' => 'dni',
                'label' => 'DNI',
                'rules' => 'required|max_length[9]'
            ),
            array(
                'field' => 'nombre_usuario',
                'label' => 'Nombre Usuario',
                'rules' => 'required|is_unique[usuario.nombre_usuario]'
            ),
            array(
                'field' => 'pass',
                'label' => 'Contraseña',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("login");
        } else {
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'apellidos' => $this->input->post('apellido'),
                'email' => $this->input->post('email'),
                'direccion' => $this->input->post('direccion'),
                'cp' => $this->input->post('cp'),
                'provincia' => $this->input->post('provincia'),
                'dni' => $this->input->post('dni'),
                'nombre_usuario' => $this->input->post('nombre_usuario'),
                'contraseña' => $this->input->post('pass')
            );

            $this->registro_model->añadir_usuario($data);
        }
    }

}
