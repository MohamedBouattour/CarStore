<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends Application  {


	public function index()
	{
		$this->bread["title"]="Gestion les clients";
		$this->bread["bread"]="Consulter les clients";
		$this->data["bread"]=$this->bread;

		$this->data["clients"]=$this->ClientModel->getAll();
		$this->data["page"]=$this->load->view("admin/client/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}	
	//------------
	public function add()
	{
		$this->bread["title"]="Gestion des clients";
		$this->bread["bread"]="Ajouter client";
		$this->data["bread"]=$this->bread;

		$this->data["modeles"]=$this->ModeleModel->getAll();
		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["page"]=$this->load->view("admin/client/insert",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function addNew()
	{
		$this->bread["title"]="Gestion des clients";
		$this->bread["bread"]="Ajouter client";
		$this->data["bread"]=$this->bread;

		$this->data["modeles"]=$this->ModeleModel->getAll();
		$this->data["marques"]=$this->MarqueModel->getAll();
		$this->data["opts"]=$this->OptModel->getAll();
		$this->data["page"]=$this->load->view("admin/client/insertnew",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function insert()
	{
		$this->ClientModel->add();
		redirect("carstore/client/index");
	}
	//--------------
	public function edit($id)
	{
		$this->bread["title"]="Gestion des clients";
		$this->bread["bread"]="Modifier client";
		$this->data["bread"]=$this->bread;

		$this->data["client"] = $this->ClientModel->getById($id);
		$this->data["page"]=$this->load->view("admin/client/edit",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
	public function update($id)
	{
		$this->ClientModel->update($id);
		redirect("carstore/client/index");
	}
	//-----------
	public function delete($id)
	{
		$this->ClientModel->delete($id);
		redirect("carstore/client/index");
	}
	public function login()
	{
		$username = $this->input->post('mail');	
		$password = $this->input->post('mdp');
		$res=$this->clientModel->authentifier($username,$password);
		if (isset($res[0]))
		{
			echo($res[1]);
		}
	}
}
