<?php

class DiseasesController extends CI_Controller
{
	public $data;
	public $diseases_group;

	public function __construct()
	{
		parent::__construct();
	}
	public function condition($group)
	{
		// echo "<pre>";
		// print_r($this->diseases_group);
		// echo "</pre>"; die;
		switch ($group) {
			case "neural":
				$this->load->load_view('diseases/conditions-group', $this->data);
				break;
			case "new-hope-clinic-group":
				$this->load->load_view('diseases/new-hope-clinic-group', $this->data);
				break;
			case "developmental-problem":
				$this->load->load_view('diseases/developmental-problem', $this->data);
				break;
			case "couple-clinic":
				$this->load->load_view('diseases/couple-clinic', $this->data);
				break;
			case "pain-care":
				$this->load->load_view('diseases/pain-care', $this->data);
				break;
			case "eye-care":
				$this->load->load_view('diseases/eye-care', $this->data);
				break;
			case "metabolic-diseases":
				$this->load->load_view('diseases/metabolic-diseases', $this->data);
				break;
			case "cosmatic-diseases":
				$this->load->load_view('diseases/cosmatic-diseases', $this->data);
				break;
			case "regenerative-clinic":
				$this->load->load_view('diseases/regenerative-clinic', $this->data);
				break;
			case "dermatology-care":
				$this->load->load_view('diseases/dermatology-care', $this->data);
				break;

			default:
				$this->load->load_view('diseases/conditions-group');
				break;
		}
	}
	public function condition_detail($group, $condition)
	{
		switch ($group) {
			case 'neural':
				switch ($condition) {
					case 'neural':
						# code...
						$this->load->load_view('diseases/condition/neural_new');
						break;

					default:
						$this->load->load_view('diseases/conditions-details');
						break;
				}
				break;
			case 'cerebral-palsy':
				switch ($condition) {
					case 'cerebral-palsy-detail':
						# code...
						$this->load->load_view('diseases/condition/cerebral-palsy-detail');
						break;

					default:
						$this->load->load_view('diseases/conditions-details');
						break;
				}
				break;

			case 'new-hope-clinic':
				switch ($condition) {
					case 'new-hope-clinic-detail':
						# code...
						$this->load->load_view('diseases/condition/new-hope-clinic-detail');
						break;
					case 'azoospermia-detail':
						# code...
						$this->load->load_view('diseases/condition/azoospermia-detail');
						break;
					case 'pcod-detail':
						# code...
						$this->load->load_view('diseases/condition/pcod-detail');
						break;

					default:
						$this->load->load_view('diseases/conditions-details');
						break;
				}
				break;

			default:
				switch ($condition) {
					case 'neural':
						# code...
						$this->load->load_view('diseases/condition/neural_new');
						break;

					default:
						$this->load->load_view('diseases/conditions-details');
						break;
				}
				break;
		}
	}
}
