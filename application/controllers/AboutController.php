<?php

class AboutController extends CI_Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();
	}
	public function about($content)
	{
		switch ($content) {
			case 'founder':
				$this->load->load_view('about/founder');
				break;

			default:
				$this->load->load_view('treatments/details/treatment-details');
				break;
		}
	}
}
