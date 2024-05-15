<?php 

class BlogsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function home() {
		$this->data['page'] = [
			'title' => "Infertility" . " - " . APP_NAME
		];
		$this->load->load_view('blogs/home', $this->data);
	}

	public function blog_single($slug){
		switch ($slug) {
			case 'stem-cell-therapy-in-india-types-and-benefits':
				# code...
				$this->data['page'] = [
					'title' => "Stem Cell Therapy In India: Types & Benefits" . " - " . APP_NAME
				];
				$this->load->load_view('blogs/single', $this->data);
				break;
			
			default:
				# code...
				break;
		}
	}
}
