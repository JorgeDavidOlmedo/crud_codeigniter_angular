<?php

class Marcador extends CI_controller
{
	
	public function mostrar(){
		$this->load->view('head.php');
		$this->load->view('marcador.php');
	}
	
}

?>