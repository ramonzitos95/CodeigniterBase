<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php

/**
 * Created by PhpStorm.
 * User: Ramon
 * Date: 17/09/2016
 * Time: 21:08
 */
class Login_model extends CI_Model
{
    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        //Chamada o próprio construtor
        parent::__construct();
    }

    //Validando o login do aluno
    public function logarSistema($usuario, $senha)
    {
        if (is_null($usuario) OR is_null($senha))
            return false;

        $this->db->where("usuario", $usuario);
        $this->db->where("senha", $senha);
        $logado = $this->db->get("aluno")->row_array();
        return $logado;
    }

    //Validando o login do administrador
    public function loginAdm($usuario, $senha)
    {
        if (is_null($usuario) OR is_null($senha))
            return false;

        $this->db->where("usuario", $usuario);
        $this->db->where("senha", $senha);
        $logado = $this->db->get("colaborador")->row_array();
        return $logado;
    }

    public function GetAluno($id)
    {
        if (!is_null($id)) {
            $this->db->where("id", $id);
            $id = $this->db->get("aluno")->row_array();
            return $id;
        } else {
            return false;
        }

    }

    public function CadastrarAluno($dados)//Cadastrando aluno
    {

        if ($this->db->insert("aluno", $dados)) {
            return true;
        } else {
            return false;
        }
    }
}