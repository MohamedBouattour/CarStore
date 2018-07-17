<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marque extends Application  {


	public function index()
	{
		$this->bread["title"]="Gestion des marques";
		$this->bread["bread"]="Consulter les marques";
		$this->data["bread"]=$this->bread;

		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["page"]=$this->load->view("admin/marque/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}	
	//------------
	public function add()
	{
		$this->bread["title"]="Gestion des marques";
		$this->bread["bread"]="Ajouter marque";
		$this->data["bread"]=$this->bread;

		$this->data["page"]=$this->load->view("admin/marque/insert",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function insert()
	{
		$this->MarqueModel->add();
		redirect("carstore/marque/index");
	}
	//--------------
	public function edit($id)
	{
		$this->bread["title"]="Gestion des marques";
		$this->bread["bread"]="Modifier marque";
		$this->data["bread"]=$this->bread;

		$this->data["marque"] = $this->MarqueModel->getById($id);
		$this->data["page"]=$this->load->view("admin/marque/edit",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function update($id)
	{
		$this->MarqueModel->update($id);
		redirect("carstore/marque/index");
	}
	//-----------
	public function delete($id)
	{
		$this->MarqueModel->delete($id);
		redirect("carstore/marque/index");
	}
}
