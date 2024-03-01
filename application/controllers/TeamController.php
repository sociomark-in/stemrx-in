<?php

class TeamController extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	}

	public function home() {
		$this->load->load_view('pages/team/home');
	}
	
	public function doctor($name) {
		switch ($name) {
			case 'dr-anil-daxini':
				# code...
				$this->load->load_view('pages/team/dr-anil-daxini', $this->data);
				break;
			
			default:
				# code...
				$this->load->load_view('pages/team/team-details', $this->data);
				break;
		}
	}
}
