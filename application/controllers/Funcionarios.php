<?php

class Funcionarios extends CI_controller
{
	
	public function listar(){
		$this->load->view('head.php');
		$this->load->model('Funcionarios_Model','FM',true);
		$datos['Funcionarios']=$this->FM->getAll();
		$this->load->view('funcionarioVista.php',$datos);
	}
	
}

?>