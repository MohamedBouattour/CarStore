<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RdvModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select voiture.id,date_et_heure,nom_cl,pren_cl,marque_v,model_v from rdv join client on id_cl=client.id join voiture on id_v=voiture.id")->result();
	}

	public function getById($id){
		$this->db->where("id",$id);
		$rdv = $this->db->get("rdv")->result();
		return $rdv[0];
	}
}