<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Login_model'); //carregando o model
    }

    public function index()
    {
        $this->load->view('uteis/cabecalho');

        $this->load->view('login');

        $this->load->view('uteis/rodape');

    }

    public function logar()
    {
        //carregando o model Login_model


        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');

        //Regras de validação

        $this->form_validation->set_rules('usuario', 'Username', 'required');
        $this->form_validation->set_rules('senha', 'Password', 'required');
        $logado = $this->Login_model->logarSistema($usuario, $senha); //Adicionando a variavel logado a função que carrega o login


        if ($this->form_validation->run() == FALSE) {
            var_dump($logado);
        } else {
            if ($logado) { //se foi logado
                $this->session->set_userdata("usuario_logado", $usuario);
                echo $usuario . '<br>';
                $this->load->view('login/menu_view');
                //$this->load->view('formsuccess');
            } else {
                redirect('login');
            }
        }
    }

    function Cadastrar()
    {
        $this->load->view('uteis/cabecalho');

        $this->load->view('login/Cadastraraluno_view');

        $this->load->view('uteis/rodape');
    }

    function ValidaCadastro()
    {
        $this->load->model('Login_model');
        //Adicionando a variaveis o que veio do
        $data = date('yyyy-mm-dd');

        $tipousuario = $this->input->post('tipousuario');
        $dadosAluno = array(
            'usuario' => $this->input->post('usuario'),
            'senha' => $this->input->post('senha'),
            'datacadastro' => $data
        );

        $this->form_validation->set_rules('usuario', 'Username', 'required');
        $this->form_validation->set_rules('senha', 'Password', 'required');

        //Cadastrando aluno ou colaborador
        if ($tipousuario == 'alu') {
            $cadastrado = $this->Login_model->CadastrarAluno($dadosAluno);
        } elseif ($tipousuario == 'col') {
            $cadastrado = $this->Login_model->CadastrarColaborador($dadosAluno);
        }

        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {

            if ($cadastrado) {
                echo "Dados gravados com sucesso";
                $this->load->view('Pessoa/cadastrarPessoa_view');
                    echo("<script>
                    var resposta = (confirm('Desejas continuar cadastrando as informações restantes de usuário?'))
                    if (resposta == true){
                       window.location = 'http://localhost/CodeigniterBase/Projeto/Pessoa'; //Será redirecionado para o restante do cadastro
                    }
                    else
                    {
                       window.location = 'http://localhost/CodeigniterBase/Projeto/login';
                    }
               </script>");


            } else {
                redirect('login/Cadastrar');
            }
        }
    }


    function logout()
    {
        session_destroy();
        session_unset();
        redirect('Login');
    }
}


