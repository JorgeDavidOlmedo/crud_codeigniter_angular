<?php

class Persona_Model extends CI_MODEL
{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function getAll(){
		$result = $this->db->get("personas");
		$personas = $result->result_array();
		return $personas;
	}

	public function buscarPersona($id = null){
		$this->db->select('*');
        $this->db->from('personas');
        $this->db->where('personas.id',$id);
        $query = $this->db->get();
        return $this->build_json($query->result());
	}

	public function personas(){
		$this->db->select('*');
        $this->db->from('personas');
        $query = $this->db->get();
        return $this->build_json($query->result());
	}

	public function guardar(){
		$data = json_decode(file_get_contents('php://input'), true);
		$nombre = $data['nombre'];
		$apellido = $data['apellido'];
        
		$arrayDatos = array(
           'nombre' => $nombre,
           'apellido' => $apellido
        );
        $this->db->insert('personas',$arrayDatos);
		
	}

	public function modificar(){
		$data = json_decode(file_get_contents('php://input'), true);
		$nombre = $data['nombre'];
		$apellido = $data['apellido'];
		$id = $data['id'];
        
		$arrayDatos = array(
           'nombre' => $nombre,
           'apellido' => $apellido
        );
        $this->db->where('id', $id);
		$this->db->update('personas', $arrayDatos);
		
	}

	public function borrar($id = null ){
        $this->db->where('id', $id);
		$this->db->delete('personas');
	
		
	}

	public function build_json($valor_propiedades = null){
         $propiedades = array();
                    
        foreach ($valor_propiedades as $value){
            
            $head_propiedad['id'] = $value->id;
            $head_propiedad['nombre'] =$value->nombre;
            $head_propiedad['apellido'] =$value->apellido;
            array_push($propiedades,$head_propiedad);       
        }
        return $propiedades;
         
    }


}

?>