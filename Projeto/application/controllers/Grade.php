<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model(array('Curso_model', 'Disciplina_model'));
    }

    public function index(){
        $this->load->view('Grade/Grade_view');
	}
}
