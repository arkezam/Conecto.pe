<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('modelo');
		$this->load->database();

	}

	public function index()
	{
		
		$data  = array(
			'ini' => "inicio"
		);

		$this->load->view('headers/header',$data);
		
		$this->load->view('home');

		$this->load->view('footers/footer');

	}

	public function services(){

		$data  = array(
			'ini' => "Servicios"
		);

		$this->load->view('headers/header',$data);
		
		$this->load->view('services');

		$this->load->view('footers/footer');

	}
	
	public function contact(){

		if ($this->input->server("REQUEST_METHOD") == "POST"){
			$var = array(
				'correo' => $this->input->post('correo'),
				'nombre' => $this->input->post('nombre'),
				'distrito' => $this->input->post('distrito'),
				'celular' => $this->input->post('celular'),
				'direccion' => $this->input->post('direccion'),
				'comentario' => $this->input->post('comentario'),
			);
			$this->modelo->sendComent($var);
		}

		$data  = array(
			'ini' => "Contacto"
		);

		$this->load->view('headers/header',$data);
		
		$this->load->view('contact');

		$this->load->view('footers/footer');

	}

	public function us(){



		$data  = array(
			'ini' => "Nosotros"
		);

		$this->load->view('headers/header',$data);
		
		$this->load->view('us');

		$this->load->view('footers/footer');

	}
	public function send(){
				
	
	
		$var = array(
			'correo' => $this->input->post('correo'),
			'nombre' => $this->input->post('nombre'),
			'distrito' => $this->input->post('distrito'),
			'direccion' => $this->input->post('direccion'),
			'comentario' => $this->input->post('comentario'),

		);

		

	}


}
