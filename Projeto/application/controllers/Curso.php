<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('Curso/cadastroCurso_view');
    }

    public function validaCurso()
    {
        $this->load->model('Curso_model');

        $cursonome = $this->input->post('cursonome');
        $cargahoraria = ($this->input->post('cargahoraria'));
        $ementa = $this->input->post('ementa');
        $bibliografia = $this->input->post('bibliografia');
        $modocurso = $this->input->post('modocurso');
        $origem = $this->input->post('origem');
        $situacao = $this->input->post('situacao');

        $dadosCurso = array(
            'cursonome' => $cursonome,
            'cargahoraria' => $cargahoraria,
            'ementa' => $ementa,
            'bibliografia' => $bibliografia,
            'modocurso' => $modocurso,
            'origemcurso' => $origem,
            'situacao' => true
        );

        $this->form_validation->set_rules('cursome', 'required');
        $this->form_validation->set_rules('cargahoraria', 'required');
        $this->form_validation->set_rules('ementa', 'required');
        $this->form_validation->set_rules('situacao', 'required');
        $cadastrado = $this->Curso_model->CadastrarCurso($dadosCurso);


        if ($this->form_validation->run() == FALSE) {
            var_dump($dadosCurso);
            Echo "Houve erros no formulário";
        } else {

            if ($cadastrado) {
                redirect('Menu');
            } else {

            }
        }


    }
}
