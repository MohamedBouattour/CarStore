<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends Application  {


	public function index()
	{
		$this->bread["title"]="Gestion d'équipe";
		$this->bread["bread"]="Consulter l'équipe";
		$this->data["bread"]=$this->bread;

		$this->data["teams"]=$this->TeamModel->getAll();
		$this->data["page"]=$this->load->view("admin/team/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}	
	//------------
	public function add()
	{
		$this->bread["title"]="Gestion d'équipe";
		$this->bread["bread"]="Ajouter personnel";
		$this->data["bread"]=$this->bread;

		$this->data["page"]=$this->load->view("admin/team/insert",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function insert()
	{
		$this->TeamModel->add();
		redirect("restofast/team/index");
	}
	//--------------
	public function edit($id)
	{
		$this->bread["title"]="Gestion d'équipe";
		$this->bread["bread"]="Modifier personnel";
		$this->data["bread"]=$this->bread;

		$this->data["team"] = $this->TeamModel->getById($id);
		$this->data["page"]=$this->load->view("admin/team/edit",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function update($id)
	{
		$this->TeamModel->update($id);
		redirect("restofast/team/index");
	}
	//-----------
	public function delete($id)
	{
		$this->TeamModel->delete($id);
		redirect("restofast/team/index");
	}
}
