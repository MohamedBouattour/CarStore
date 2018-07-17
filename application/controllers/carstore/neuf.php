<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neuf extends Application,Voiture{


	public function index()
	{
		$this->bread["title"]="Gestion des voitures";
		$this->bread["bread"]="Consulter les voitures";
		$this->data["bread"]=$this->bread;

		$this->data["voitures"]=$this->VoitureModel->getAll();
		$this->data["page"]=$this->load->view("admin/voiture/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}	
	//------------
	public function addNew()
	{
		$this->bread["title"]="Gestion des voitures";
		$this->bread["bread"]="Ajouter voiture";
		$this->data["bread"]=$this->bread;

		$this->data["modeles"]=$this->ModeleModel->getAll();
		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["opts"]=$this->OptModel->getAll();
		$this->data["page"]=$this->load->view("admin/voiture/insertnew",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function insertnew()
	{
		$this->VoitureModel->addnew();
		redirect("carstore/voiture/index");
	}
	//--------------
	public function edit($id)
	{
		$this->bread["title"]="Gestion des voitures";
		$this->bread["bread"]="Modifier voiture";
		$this->data["bread"]=$this->bread;

		$this->data["modeles"]=$this->ModeleModel->getAll();
		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["opts"]=$this->OptModel->getAll();
		$this->data["voiture"] = $this->VoitureModel->getById($id);
		$this->data["page"]=$this->load->view("admin/voiture/edit",$this->data,true);
		$this->load->view("admin/default",$this->data);
		
	}
	public function update($id)
	{
		$this->VoitureModel->update($id);
		redirect("carstore/voiture/index");
	}
}
