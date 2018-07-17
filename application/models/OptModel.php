<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OptModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select * from opt")->result();
	}
	
	public function getById($id){
		$this->db->where("id",$id);
		$opt = $this->db->get("opt")->result();
		return $opt[0];
	}
	public function add(){
		$sqldata = array(			
			"lib_o" => $this->input->post("lib_o"),
			"prix_o" => $this->input->post("prix_o")
			);
		$this->db->insert("opt",$sqldata);
		
	}
	//-------------
	public function update($id){
		$sqldata = array(
			"lib_o" => $this->input->post("lib_o"),
			"prix_o" => $this->input->post("prix_o")
			);
		
		$this->db->where("id",$id);
		$this->db->update("opt",$sqldata);
		
	}
	//-------------------
	public function delete($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("opt");
	}
}