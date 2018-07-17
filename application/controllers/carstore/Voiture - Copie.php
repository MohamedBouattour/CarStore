<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voiture extends Application  {

	//methode par defaut affiche tous les voiture
	public function index()
	{
		$this->bread["title"]="Gestion des voitures";
		$this->bread["bread"]="Consulter les voitures";
		$this->data["bread"]=$this->bread;
		$this->data["voitures"]=$this->VoitureModel->getAll();
		$this->data["page"]=$this->load->view("admin/voiture/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	//appel au interface	
	public function add()
	{
		$this->data["bread"]=$this->bread;
		$this->data["modeles"]=$this->ModeleModel->getAll();
		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["page"]=$this->load->view("admin/voiture/insert",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	//appel au base donnée
	public function insert()
	{
		$this->VoitureModel->add();
		redirect("carstore/voiture/index");
	}
	//appel au interface	
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
	//appel au base donnée
	public function update($id)
	{
		$this->VoitureModel->update($id);
		redirect("carstore/voiture/index");
	}
	//appel au base donnée
	public function delete($id)
	{
		$this->VoitureModel->delete($id);
		redirect("carstore/voiture/index");
	}
}
