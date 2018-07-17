<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commande extends Application  {


	public function index()
	{
		$this->bread["title"]="Consulter les commandes";
		$this->bread["bread"]="Consulter les commandes";
		$this->data["bread"]=$this->bread;

		$this->data["commandes"]=$this->CommandeModel->getAll();
		$this->data["lignes"]=$this->LigneModel->getAll();
		$this->data["page"]=$this->load->view("admin/commande/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}	
	public function add()
	{
		$this->bread["title"]="Gestion des commandes";
		$this->bread["bread"]="Ajouter commande";
		$this->data["bread"]=$this->bread;

		$this->data["clients"]=$this->ClientModel->getAll();
		$this->data["voitures"]=$this->VoitureModel->getAll();
		$this->data["page"]=$this->load->view("admin/commande/insert",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function insert()
	{
		$this->CommandeModel->add();
		redirect("carstore/commande/index");
	}
	//--------------
	public function edit($id)
	{
		$this->bread["title"]="Gestion des commandes";
		$this->bread["bread"]="Modifier commande";
		$this->data["bread"]=$this->bread;

		$this->data["commande"] = $this->CommandeModel->getById($id);
		$this->data["page"]=$this->load->view("admin/commande/edit",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function update($id)
	{
		$this->CommandeModel->update($id);
		redirect("carstore/commande/index");
	}
	//-----------
	public function delete($id)
	{
		$this->CommandeModel->delete($id);
		redirect("carstore/commande/index");
	}
	
}
