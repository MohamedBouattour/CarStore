<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modele extends Application  {


	public function index()
	{
		$this->bread["title"]="Gestion des modéles";
		$this->bread["bread"]="Consulter les modéles";
		$this->data["bread"]=$this->bread;

		$this->data["modeles"]=$this->ModeleModel->getAll();
		$this->data["page"]=$this->load->view("admin/modele/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}	
	//------------
	public function add()
	{
		$this->bread["title"]="Gestion des modéles";
		$this->bread["bread"]="Ajouter modéle";
		$this->data["bread"]=$this->bread;

		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["page"]=$this->load->view("admin/modele/insert",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function insert()
	{
		$this->ModeleModel->add();
		redirect("carstore/modele/index");
	}
	//--------------
	public function edit($id)
	{
		$this->bread["title"]="Gestion des modéles";
		$this->bread["bread"]="Modifier modéle";
		$this->data["bread"]=$this->bread;

		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["modele"] = $this->ModeleModel->getById($id);
		$this->data["page"]=$this->load->view("admin/modele/edit",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function update($id)
	{
		$this->ModeleModel->update($id);
		redirect("carstore/modele/index");
	}
	//-----------
	public function delete($id)
	{
		$this->ModeleModel->delete($id);
		redirect("carstore/modele/index");
	}
}
