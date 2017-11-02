<?php
class Funcionarios_Model extends CI_MODEL
{

	public function getAll(){
		$result = $this->db->get("funcionarios");
		$funcionarios = $result->result_array();
		return $funcionarios;
	}


}

?>