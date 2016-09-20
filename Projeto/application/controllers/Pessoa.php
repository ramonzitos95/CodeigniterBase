<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Pessoa_model');
    }

    function cadastro()
    {
        $turma = $this->input->post('turma');
        $nome = $this->input->post('nome');
        $cpf = $this->input->post('cpf');
        $rg = $this->input->post('rg');
        $endereco = $this->input->post('endereco');
        $email = $this->input->post('email');
        $cidade = $this->input->post('cidade');
        $bairro = $this->input->post('bairro');
        $estado = $this->input->post('estado');
        $telefone = $this->input->post('telefone');
        $celular = $this->input->post('celular');
        $cep = $this->input->post('cep');
        $estadocivil = $this->input->post('estadocivil');
        $datanascimento = $this->input->post('datanascimento');
        $grauescolaridade = $this->input->post('grauescolar');
        $disciplinaextra = $this->input->post('extra');
        $naturalidade = $this->input->post('naturalidade');
        $matricula = $this->input->post('matricula');

        $dadosPessoa = array(
            'turma_turmaid' => $turma,
            'colaborador_idcolaborador' => 1,
            'aluno_idaluno' => 1,
            'nome' => $nome,
            'cpf' => $cpf,
            'rg' => $rg,
            'endereco' => $endereco,
            'email' => $email,
            'cidade' => $cidade,
            'bairro' => $bairro,
            'estado' => $estado,
            'telefone' => $telefone,
            'celular' => $celular,
            'cep' => $cep,
            'estadocivil' => $estadocivil,
            'datanascimento' => $datanascimento,
            'grauescolaridade' => $grauescolaridade,
            'disciplinaextra' => $disciplinaextra,
            'naturalidade' => $naturalidade,
            'matricula' => $matricula
        );

        //Validando formulário
        $this->form_validation->set_rules('turma', 'required');
        $this->form_validation->set_rules('cpf', 'required');
        $this->form_validation->set_rules('rg', 'required');
        $this->form_validation->set_rules('email', 'required', 'valid_email');
        $this->form_validation->set_rules('telefone', 'required');
        $this->form_validation->set_rules('celular', 'required');
        $this->form_validation->set_rules('datanascimento', 'required');
        $this->form_validation->set_rules('matricula', 'required');

        //Cadastrando a pessoa
        $foiCadastradoPessoa = $this->Pessoa_model->CadastrarPessoa($dadosPessoa);

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        }
        else
        {
            if($foiCadastradoPessoa)
            {
                echo ("<script>alert('Usuário foi cadastrado com sucesso')</script>");
                redirect('login');
            }
            else
            {
                echo "Houve algum erro ao cadastrar a pessoa";
            }
        }

    }


}


