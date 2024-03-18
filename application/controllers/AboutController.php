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

	public function awards()
	{
		$this->data['page'] = [
			'title' => "Awards & Accolates" . " - " . APP_NAME
		];
		$this->load->load_view('pages/about/awards', $this->data);
	}

	public function research_genetic()
	{
		$this->data['page'] = [
			'title' => "Genetic Research" . " - " . APP_NAME
		];
		$this->load->load_view('pages/research/genetic', $this->data);
	}
	public function research_patents()
	{
		$this->data['page'] = [
			'title' => "Patents" . " - " . APP_NAME
		];
		$this->load->load_view('pages/research/patents', $this->data);
	}
	public function research_manuscripts()
	{
		$this->data['page'] = [
			'title' => "Clinical Manuscripts" . " - " . APP_NAME
		];
		$this->load->load_view('pages/research/manuscripts', $this->data);
		
	}
	public function academics()
	{
		$this->data['page'] = [
			'title' => "Awards & Accolates" . " - " . APP_NAME
		];
		$this->load->load_view('pages/about/academics', $this->data);
	}
}
