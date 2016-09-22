<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index(){
        $this->load->view('uteis/cabecalho');
        $this->load->view('login/menu_view');
        $this->load->view('uteis/rodape');
	}
}
