<?php

class TeamController extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	}

	public function home() {
		$this->data['page'] = [
			'title' => "Team of Experts" . " - " . APP_NAME
		];
		$this->load->load_view('pages/team/home', $this->data);
	}
	
	public function doctor($name) {
		switch ($name) {
			case 'dr-anil-daxini':
				# code...
				$this->load->load_view('pages/team/dr-anil-daxini', $this->data);
				break;
			case 'dr-pallavi-lele':
				# code...
				$this->load->load_view('pages/team/dr-pallavi-lele', $this->data);
				break;
			
			default:
				# code...
				$this->load->load_view('pages/team/team-details', $this->data);
				break;
		}
	}
}
