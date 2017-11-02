<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Persona extends CI_controller
{

	public function listar(){
		$this->load->view('head.php');
		$this->load->model('Personas_Model','PM',true);
		$datos['Personas']=$this->PM->getAll();
		$this->load->view('vista_personas.php',$datos);
	}

	public function index()
	{
		$this->listar();
	}
	
}

?>