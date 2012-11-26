<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paginas extends CI_Controller {


	public function index() {

        $this->load->helper('url');
        $this->load->helper('html');
                
		$this->load->view('templates/header');
		$this->load->view('paginas/home');
		$this->load->view('templates/footer');
	}

	public function view($pagina) {
            
        $this->load->helper('url');
        $this->load->helper('html');

		$this->load->view('templates/header');
		$this->load->view('paginas/'.$pagina);
		$this->load->view('templates/footer');
	}

}