<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarqueModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select * from marque ORDER BY lib_marque  ")->result();
	}
	public function getById($id){
		$this->db->where("id",$id);
		$marque = $this->db->get("marque")->result();
		return $marque[0];
	}
	public function add(){
		$sqldata = array(			
			"lib_marque" => $this->input->post("lib_marque")
			);
		$this->db->insert("marque",$sqldata);
	}
	//-------------
	public function update($id){
		$sqldata = array(
			"lib_marque" => $this->input->post("lib_marque")
			);
		$this->db->where("id",$id);
		$this->db->update("marque",$sqldata);
	}
	//-------------------
	public function delete($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("marque");
	}
}