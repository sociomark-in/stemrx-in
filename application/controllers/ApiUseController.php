<?php

class ApiUseController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function check_duplicate_leads()
	{
		$this->load->model('leads/LeadsModel', 'LeadsModel');
		// $column = $this->input->post('column');
		// $value = $this->input->post('value');
		$entity = 'id';
		switch ($this->input->get('column')) {
			case 'email':
				$entity = 'enq_email';
				break;
			case 'contact':
				$entity = 'enq_contact';
				break;

			default:
				# code...
				break;
		}

		if (count(json_decode($this->LeadsModel->get(["id"], [$this->input->get('column') => $this->input->get($entity)]), true)) > 0) {
			$this->output->set_content_type('application/json')->set_output("false");
		} else {
			$this->output->set_content_type('application/json')->set_output("true");
		}
	}
}
