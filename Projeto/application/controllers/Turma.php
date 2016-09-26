<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('turma/turma_view');
	}

	public function validaTurma()
    {
        $this->load->model('Turma_model');

        $nome = $this->input->post('nome');

        $dadosTurma = array(
            'turmanome' => $nome
        );

        $cadastrado = $this->Turma_model->cadastrarTurma($dadosTurma);

        if($cadastrado){
            redirect('Turma');
        }else{
            $this->load->view('Erro_view');
        }

    }
}
