<?php

class ProcedureController extends CI_Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("data/TherapeuticsModel", "TherapeuticsModel");
		$this->data['therapeutics'] = json_decode($this->TherapeuticsModel->get(), true);
	}

	public function home()
	{
		$this->load->load_view('treatments/treatment-home', $this->data);
	}
	public function procedure($procedure)
	{
		switch ($procedure) {
			case 'advanced-pain-management':
				$this->load->load_view('condition/advanced-pain-management');
				break;

			default:
				$this->load->load_view('treatments/details/treatment-details');
				break;
		}
	}
}
