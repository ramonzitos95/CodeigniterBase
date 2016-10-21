<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Auditoria_model');
        $this->load->model('Disciplina_model');
    }

    public function index(){
        $this->load->view('Disciplina/CadastrarDisciplina_view');
	}

	public function validaDisciplina()
    {
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
            //Gravando o log na base
            $textoLog = "Foi cadastrado a disciplina: " . $nome;
            $this->gravandoLog($textoLog);

            redirect('Disciplina');
        }else{
            $this->load->view('Error_view');
        }
    }

    public function formatarData($data){
        $rData = implode("-", array_reverse(explode("/", trim($data))));
        return $rData;
    }

    public function gravandoLog($texto)
    {
        $dadosLogin = array(
            'loghora' => time(),
            'logdata' => date('y-m-d'),
            'logtexto' => $texto
        );
        $this->Auditoria_model->logar($dadosLogin);
    }

    public function Consulta()
    {
        $dados['disciplinas'] = $this->Disciplina_model->listaDisciplinas();;
        $this->load->view('Disciplina/ConsultaDisciplina_view', $dados);
    }

    public function DeletarDisciplina($id)
    {
        $deletado = $this->Disciplina_model->DeletarDisciplina($id);
        if($deletado == false){
            echo base_url('Menu');
        } else {
            //Gravando log
            $nome = $this->Disciplina_model->RetornaNomeDisciplina($id);
            $texto = "O curso " .  $nome->cursonome . " foi deletado";
            //$this->Auditoria_model->gravandoLod($texto);
            echo '<script>alert("Curso excluido com sucesso")</script>';
            redirect('Disciplina/Consulta');
        }
    }

    public function Alteracao($id)
    {
        $dados['disciplina'] = $this->Disciplina_model->listaDisciplina($id);
        $this->load->View('Disciplina/AtualizarDisciplina_view', $dados);
    }


}
