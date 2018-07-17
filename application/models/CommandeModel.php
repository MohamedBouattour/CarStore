<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommandeModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select commande.id,date,nom_cl,pren_cl,tot from commande join client on id_cl=client.id")->result();
	}
	public function getById($id){
		$this->db->where("id",$id);
		$commande = $this->db->get("commande")->result();
		return $commande[0];
	}
	/*public function add(){
		$sqldata = array(			
			"name" => $this->input->post("name"),
			"rank" => $this->input->post("rank"),
			"field" => $this->input->post("field")
			);
		}
		$this->db->insert("commande",$sqldata);
	}*/
}