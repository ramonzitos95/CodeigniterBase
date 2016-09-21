<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdm extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('uteis/cabecalho');

        $this->load->view('loginadm_view');
    }

    public function logar()
    {
        //carregando o model Login_model


        $usuario = $this->input->post('usuario');
        $senha = md5($this->input->post('senha'));

        //echo $nome. ' - '. $senha;

        //Regras de validação

        $this->form_validation->set_rules('usuario', 'Username', 'required');
        $this->form_validation->set_rules('senha', 'Password', 'required');
        $logado = $this->Login_model->loginAdm($usuario, $senha); //Adicionando a variavel logado a função que carrega o login


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('welcome_message');
        } else {
            if ($logado) { //se foi logado
                var_dump($logado);
                $this->session->set_userdata("usuario_logado", $usuario);
                $this->session->set_userdata("id", $usuario);
                echo $usuario . '<br>';

            } else {
                redirect('login');
            }
        }
    }

    public function cadastrar()
    {

    }
}
