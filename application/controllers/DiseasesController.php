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
