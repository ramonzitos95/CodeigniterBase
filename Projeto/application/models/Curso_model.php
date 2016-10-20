<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php

/**
 * Created by PhpStorm.
 * User: Ramon
 * Date: 17/09/2016
 * Time: 21:08
 */
class Curso_model extends CI_Model
{
    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        //Chamada o próprio construtor
        parent::__construct();
    }

    public function CadastrarCurso($dados)//Função para cadastrar Pessoa
    {
        If ($this->db->insert("curso", $dados)){
            return true;
        } else {
            return false;
        }
    }

    public function CadastrarAlunoCurso($dados)
    {
        If ($this->db->insert("alunocurso", $dados)){
            return true;
        } else {
            return false;
        }
    }

    public function listaCursos()
    {
        return $this->db->get("curso")->result();
    }

    public function DeletarCurso($id)
    {
        If($id != null){
            $this->db->where('cursoid', $id);
            $this->db->delete("curso");
            return $id;
        } else {
            Return False;
        }

    }

    public function RetornaNomeCurso($idcurso)
    {
        //Busca com condição
        $query = $this->db->get('curso', array('cursoid' => $idcurso));

        //Row_object() retorna direto o objeto curso e não array
        return $query->row_object();
    }

    public function atualizaCurso($dados){
        if($dados != null){
            $this->dbn-where("curso");
        }
    }
}