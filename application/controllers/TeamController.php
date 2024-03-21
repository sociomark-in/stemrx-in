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
				$this->data['page'] = [
					'title' => "Dr. Anil Daxini" . " - " . APP_NAME
				];
				$this->load->load_view('pages/team/dr-anil-daxini', $this->data);
				break;
			case 'dr-pallavi-lele':
				# code...
				$this->data['page'] = [
					'title' => "Dr. Pallavi Lele" . " - " . APP_NAME
				];
				$this->load->load_view('pages/team/dr-pallavi-lele', $this->data);
				break;
			case 'dr-pradeep-mahajan':
				# code...
				$this->data['page'] = [
					'title' => "Dr. Pradeep Mahajan" . " - " . APP_NAME
				];
				$this->load->load_view('pages/team/dr-pradeep-mahajan', $this->data);
				break;
			case 'dr-gauri-khanderao':
				# code...
				$this->data['page'] = [
					'title' => "Dr. Gauri Khandrao" . " - " . APP_NAME
				];
				$this->load->load_view('pages/team/dr-gauri-khanderao', $this->data);
				break;
			case 'dr-harry':
				# code...
				$this->data['page'] = [
					'title' => "Dr. Harry" . " - " . APP_NAME
				];
				$this->load->load_view('pages/team/dr-harry', $this->data);
				break;
			
			default:
				# code...
				$this->data['page'] = [
					'title' => "Team details" . " - " . APP_NAME
				];
				$this->load->load_view('pages/team/team-details', $this->data);
				break;
		}
	}
}
