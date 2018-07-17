<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RDV extends Application  {


	public function index()
	{
		$this->bread["title"]="Consulter les rendez-vous";
		$this->bread["bread"]="Consulter les rendez-vous";
		$this->data["bread"]=$this->bread;

		$this->data["rdvs"]=$this->RdvModel->getAll();
		$this->data["page"]=$this->load->view("admin/rdv/list",$this->data,true);
		$this->load->view("admin/default",$this->data);
	}
}
