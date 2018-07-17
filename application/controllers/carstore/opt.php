<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opt extends Application  {


	public function index()
	{
		$this->bread["title"]="Gestion des options";
		$this->bread["bread"]="Consulter les options";
		$this->data["bread"]=$this->bread;

		$this->data["opts"]=$this->OptModel->getAll();
		$this->data["page"]=$this->load->view("admin/opt/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}	
	//------------
	public function add()
	{
		$this->bread["title"]="Gestion des options";
		$this->bread["bread"]="Ajouter option";
		$this->data["bread"]=$this->bread;

		$this->data["page"]=$this->load->view("admin/opt/insert",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function insert()
	{
		$this->OptModel->add();
		redirect("carstore/opt/index");
	}
	//--------------
	public function edit($id)
	{
		$this->bread["title"]="Gestion des options";
		$this->bread["bread"]="Modifier option";
		$this->data["bread"]=$this->bread;

		$this->data["opt"] = $this->OptModel->getById($id);
		$this->data["page"]=$this->load->view("admin/opt/edit",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function update($id)
	{
		$this->OptModel->update($id);
		redirect("carstore/opt/index");
	}
	//-----------
	public function delete($id)
	{
		$this->OptModel->delete($id);
		redirect("carstore/opt/index");
	}
}
