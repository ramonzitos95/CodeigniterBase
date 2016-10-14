<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turma extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Turma_model', 'Auditoria_model');
    }

    public function index(){
        $this->load->view('turma/turma_view');
	}

	public function validaTurma()
    {
        $nome = $this->input->post('nome');

        $dadosTurma = array(
            'dados' => 'exemplo',
            'turmanome' => $nome
        );

        $cadastrado = $this->Turma_model->cadastrarTurma($dadosTurma);

        if($cadastrado){
            $textoLog = "Foi cadastrado a turma: " + $nome;
            $this->gravandoLog($textoLog);
            redirect('Turma');
        }else{
            $this->load->view('Erro_view');
        }

    }
    function gravandoLog($texto)
    {
        $dadosLogin = array(
            'loghora' => time(),
            'logdata' => date('y-m-d'),
            'logtexto' => $texto
        );
        $this->Auditoria_model->logar($dadosLogin);
    }


}
