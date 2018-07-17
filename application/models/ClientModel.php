<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select * from client")->result();
	}
	
	public function getById($id){
		$this->db->where("id",$id);
		$client = $this->db->get("client")->result();
		return $client[0];
	}
	public function authentifier($username,$password)
	{
		return $this->db->query("select * from client where mail='$username' and password='$password'")->result();
	}
	/*public function add(){
		$sqldata = array(			
			"name" => $this->input->post("name"),
			"rank" => $this->input->post("rank"),
			"field" => $this->input->post("field")
			);
		}
		$this->db->insert("client",$sqldata);
	}*/
}