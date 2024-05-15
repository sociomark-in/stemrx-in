<?php

class UsersController extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	}

	public function home(){
		$this->load->admin_dashboard('users/home', $this->data);
	}
	
	public function new(){
		$this->load->admin_dashboard('users/new', $this->data);
	}
}
