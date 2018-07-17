<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VoitureModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select * from voiture order by id")->result();
	}
	public function getById($id){
		$this->db->where("id",$id);
		$voiture = $this->db->get("voiture")->result();
		return $voiture[0];
	}
	public function add()
	{
		$sqldata = array(
			"marque_v" => $this->input->post("marque_v"),
			"model_v" => $this->input->post("model_v"),
			"prix_v" => $this->input->post("prix_v"),
			"couleur_v" => $this->input->post("couleur_v"),
			"type_c" => $this->input->post("type_c"),
			"dat_mise_vente" => date("Y-m-d"),
			"klm" => $this->input->post("klm"),
			"anne_construction" => $this->input->post("anne_construction")
			);
		}
		$this->db->insert("voiture",$sqldata);
	}
	//-------------
	public function update($id){
		$sqldata = array(
			"prix_v" => $this->input->post("prix_v"),
			"couleur_v" => $this->input->post("couleur_v"),
			"type_c" => $this->input->post("type_c"),
			"klm" => $this->input->post("klm")
			);
		}
		$this->db->where("id",$id);
		$this->db->update("voiture",$sqldata);
	}
	//-------------------
	public function delete($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("voiture");
	}
}