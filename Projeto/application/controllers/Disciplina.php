<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('Disciplina/CadastrarDisciplina_view');
	}

	public function validaDisciplina()
    {
        $this->load->model('Disciplina_model');
        $nome = $this->input->post('nome');
        $professor = $this->input->post('professor');
        $cargahoraria = $this->input->post('cargahoraria');
        $datacadastro = $this->input->post('datacadastro');
        $conceito = $this->input->post('conceito');
        $ementa = $this->input->post('ementa');
        $datainicio = $this->input->post('datainicio');
        $situacao = $this->input->post('situacaodisciplina');
        $universidade = $this->input->post('universidade');
        $modalidade = $this->input->post('modalidade');

        //formatando data para gravar no banco de dados
        $this->formatarData($datacadastro);
        $this->formatarData($datainicio);

        if($situacao == ativo){
            $situacao = true;
        }else{
            $situacao = false;
        }

        $dadosDisciplina = array(
            'nome' => $nome,
            'professor' => $professor,
            'cargahoraria' => $cargahoraria,
            'datacadastro' => $datacadastro,
            'conceito' => $conceito,
            'ementa' => $ementa,
            'datainicio' => $datainicio,
            'situacaodisciplina' => $situacao,
            'universidade' => $universidade,
            'modalidade' => $modalidade
        );

        $cadastrado = $this->Disciplina_model->CadastrarDisciplina($dadosDisciplina);

        if($cadastrado){
            redirect('Disciplina');
        }else{
            $this->load->view('Error_view');
        }
    }

    function formatarData($data){
        $rData = implode("-", array_reverse(explode("/", trim($data))));
        return $rData;
    }
}
