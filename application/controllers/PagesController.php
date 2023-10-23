<?php

class PagesController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('pages/index');
	}

	public function specialities($speciality){
		$this->load->view('specialities/demo_speciality');
	}
}
