<?php

class Persona extends CI_controller
{

	 function __construct() {
        parent::__construct();
        $this->load->model('Persona_Model');
       
      }

	public function listar(){
		$this->load->view('head.php');
		$datos['Personas']=$this->Persona_Model->getAll();
		$this->load->view('vista_personas.php',$datos);
	}


	public function index()
	{
		$this->listar();
	}

	 public function persona($id = null){
         $persona_detail = 'Sin resultados';
         $persona_detail = $this->Persona_Model->buscarPersona($id);
          echo json_encode($persona_detail);  
     }

     public function personas(){
         $personas= 'Sin resultados';
         $personas = $this->Persona_Model->personas();
          echo json_encode($personas);  
     }

     public function guardar(){
         $personas= 'Sin resultados';
         $personas = $this->Persona_Model->guardar();
         echo json_encode($personas);  
     }

     public function modificar(){
         $personas= 'Sin resultados';
         $personas = $this->Persona_Model->modificar();
         echo json_encode($personas);  
     }

     public function borrar($id = null){
         $personas= 'Sin resultados';
         $personas = $this->Persona_Model->borrar($id);
         echo json_encode($personas);  
     }


	
}
