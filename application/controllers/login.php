<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function index() {
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'nombre_usuario_inicio',
                'label' => 'Nombre Usuario',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass_inicio',
                'label' => 'Contraseña',
                'rules' => 'required'
            )
            
        );
        
         $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("login");
        } else {
        if ($this->input->post('nombre_usuario_inicio') && $this->input->post('pass_inicio')) {
            if ($this->login_model->loginok($this->input->post('nombre_usuario_inicio'), $this->input->post('pass_inicio'))) {
                $newdata = array(
                    'nombre_usuario' => $this->input->post('nombre_usuario_inicio'),
                    'pass' => $this->input->post('pass_inicio'),
                    'dentro' => TRUE
                );
                $this->session->set_userdata($newdata);


                redirect('Inicio');
            } else {
                echo "falso";
            }
        }

        $this->load->view("login");
    }
    }

}
