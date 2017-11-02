<?php
class Personas_Model extends CI_MODEL
{

	public function getAll(){
		$result = $this->db->get("personas");
		$personas = $result->result_array();
		return $personas;
	}


}

?>