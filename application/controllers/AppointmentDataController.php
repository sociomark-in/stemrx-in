<?php

class AppointmentDataController extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	}

	public function new_contact()
	{
		print_r($this->input->post());
	}
	public function new()
	{
		print_r($this->input->post());
	}

	public function thank_you()
	{
		$this->data['page'] = [
			'title' => APP_NAME
		];
		$this->load->view('pages/thank-you', $this->data);
	}
}
