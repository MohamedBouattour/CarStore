<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Application  {


	public function index()
	{
		$this->data["voitures"]=$this->VoitureModel->getAll();

		$this->data["page"]=$this->load->view("client/acceuil",$this->data,true);
		$this->load->view("client/default",$this->data);
	}
	public function login()
	{
		$this->data["page"]=$this->load->view("client/login",$this->data,true);
		$this->load->view("client/default",$this->data);
	}
}
