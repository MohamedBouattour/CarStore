<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamModel extends Ci_Model {
	
	public function getAll(){
		
		return $this->db->query("select * from team")->result();
	}
	public function getById($id){
		$this->db->where("id",$id);
		$team = $this->db->get("team")->result();
		return $team[0];
	}
	public function add(){
		$sqldata = array(			
			"name" => $this->input->post("name"),
			"rank" => $this->input->post("rank"),
			"field" => $this->input->post("field")
			);
		if(!empty($_FILES["thumbnail"]["name"])){
			$config['upload_path']   = 'upload/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$ext  = pathinfo($_FILES["thumbnail"]["name"], PATHINFO_EXTENSION);
			$file =md5($_FILES["thumbnail"]["name"]).time().".".$ext;
			$config['file_name'] = $file;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('thumbnail')) {
				$error = array('error' => $this->upload->display_errors()); 
			}
			else { 
				$data = array('upload_data' => $this->upload->data()); 
			}
			$sqldata["thumbnail"]=$file;
		}
		$this->db->insert("team",$sqldata);
	}
	//-------------
	public function update($id){
		$sqldata = array(
			"name" => $this->input->post("name"),
			"rank" => $this->input->post("rank"),
			"field" => $this->input->post("field")
			);
		if(!empty($_FILES["thumbnail"]["name"])){
			$config['upload_path']   = 'upload/'; 
			$config['allowed_types'] = 'gif|jpg|png'; 
			$ext  = pathinfo($_FILES["thumbnail"]["name"], PATHINFO_EXTENSION);
			$file =md5($_FILES["thumbnail"]["name"]).time().".".$ext;
			$config['file_name'] = $file;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('thumbnail')) {
				$error = array('error' => $this->upload->display_errors()); 
			}
			else { 
				$data = array('upload_data' => $this->upload->data()); 
			}
			$sqldata["thumbnail"]=$file;
		}
		$this->db->where("id",$id);
		$this->db->update("team",$sqldata);
	}
	//-------------------
	public function delete($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("team");
	}
}