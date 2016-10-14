<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cep extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

	}

    public function consulta(){

        $cep = $this->input->post('cep');

        $this->load->library('curl');

        echo $this->curl->consulta($cep);

    }
}
