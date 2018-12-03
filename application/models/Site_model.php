<?php

class Site_model extends CI_Model {
	
	public	function loginUser($data)
	{
		$this->db->select("*");
		$this->db->from("profesores");
		$this->db->where("username",$data['username']);
	    $this->db->where("password",$data['password']);

	    $query=$this->db->get();
	    if ($query->num_rows()>0) {
	    	return $query->result();
	    	# code...
	    } else{
	    	$this->db->select("*");
	    	$this->db->from("alumno");
	    	$this->db->where("username",$data['username']);
	        $this->db->where("password",$data['password']);
	        $queryalumno=$this->db->get();
	        if ($queryalumno->num_rows()>0) {
	        	# code...
	        	return $queryalumno->result();
	        }


	    	return NULL;

	        
	    }

	}
	/*public function insertProfesor()
	{
		$array=array
		(
			"nombre"=>"David",
			"apellido"=>"Navaro",
			"curso"=>"6to",
			
		);
		$this->db->insert("profesores",$array); 
		
	} 
	public function getProfesores()
	{
		$this->db->select("*");
		$this->db->from("profesores");
		
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result();
		} else { return NULL}
	}
 */
  
 
}