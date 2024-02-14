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
