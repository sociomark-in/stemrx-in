<?php

class TeamController extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	}

	public function home() {
		$this->load->load_view('pages/team');
	}
	
	public function doctor($name) {
		$this->load->load_view('pages/team-details', $this->data);
	}
}
