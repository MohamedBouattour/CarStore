<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeleModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select * from modele order By marque")->result();
	}
	public function getAllc($critaire){
		
		return $this->db->query("select * from modele where marque='$critaire' ")->result();
	}
	public function getById($id){
		$this->db->where("id",$id);
		$modele = $this->db->get("modele")->result();
		return $modele[0];
	}
	public function add(){
		$sqldata = array(			
			"lib_m" => $this->input->post("lib_m"),
			"marque" => $this->input->post("marque"),
			);
		$this->db->insert("modele",$sqldata);
	}
	//-------------
	public function update($id){
		$sqldata = array(
			"marque" => $this->input->post("marque"),
			"lib_m" => $this->input->post("lib_m")
			);
		$this->db->where("id",$id);
		$this->db->update("modele",$sqldata);
	}
	//-------------------
	public function delete($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("modele");
	}

}