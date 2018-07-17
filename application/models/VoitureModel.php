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

	public function getAllByMarque()
	{
		$this->db->where("marque",$this->input->post("marque"));
		$Listmodele = $this->db->get("modele")->result();
		echo(json_encode($Listmodele));
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

		if(!empty($_FILES["images_v"]["name"])){
			$config['upload_path']   = 'upload/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$ext  = pathinfo($_FILES["images_v"]["name"], PATHINFO_EXTENSION);
			$file =md5($_FILES["images_v"]["name"]).time().".".$ext;
			$config['file_name'] = $file;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('images_v')) {
				$error = array('error' => $this->upload->display_errors()); 
			}
			else { 
				$data = array('upload_data' => $this->upload->data()); 
			}
			$sqldata["images_v"]=$file;
		}
		$this->db->insert("voiture",$sqldata);
	}
	public function addnew(){
		$sqldata = array(			
			"model_v" => $this->input->post("model_v"),
			"marque_v" => $this->input->post("marque_v"),
			"prix_v" => $this->input->post("prix_v"),
			"couleur_v" => $this->input->post("couleur_v"),
			"type_c" => $this->input->post("type_c"),
			"dat_mise_vente" => date("Y-m-d"),
			"option" => $this->input->post("option"),
			"anne_construction" => date("Y"),
			"description" => $this->input->post("description")
			);

		if(!empty($_FILES["images_v"]["name"])){
			$config['upload_path']   = 'upload/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$ext  = pathinfo($_FILES["images_v"]["name"], PATHINFO_EXTENSION);
			$file =md5($_FILES["images_v"]["name"]).time().".".$ext;
			$config['file_name'] = $file;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('images_v')) {
				$error = array('error' => $this->upload->display_errors()); 
			}
			else { 
				$data = array('upload_data' => $this->upload->data()); 
			}
			$sqldata["images_v"]=$file;
		}
		$this->db->insert("voiture",$sqldata);
	}
	//-------------
	public function update($id){
		$sqldata = array(
			
			"prix_v" => $this->input->post("prix_v"),
			"couleur_v" => $this->input->post("couleur_v"),
			"type_c" => $this->input->post("type_c"),
			//"dat_mise_vente" => date("Y-m-d"),
			"klm" => $this->input->post("klm")
			);
		if(!empty($_FILES["images_v"]["name"])){
			$config['upload_path']   = 'upload/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$ext  = pathinfo($_FILES["images_v"]["name"], PATHINFO_EXTENSION);
			$file =md5($_FILES["images_v"]["name"]).time().".".$ext;
			$config['file_name'] = $file;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('images_v')) {
				$error = array('error' => $this->upload->display_errors()); 
			}
			else { 
				$data = array('upload_data' => $this->upload->data()); 
			}
			$sqldata["images_v"]=$file;
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