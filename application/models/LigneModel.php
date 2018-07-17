<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LigneModel extends Ci_Model {
	
	public function getAll()
	{
		
		return $this->db->query("select * from lignecommande")->result();
	}
	public function getById($id){
		$this->db->where("id",$id);
		$team = $this->db->get("team")->result();
		return $team[0];
	}
}