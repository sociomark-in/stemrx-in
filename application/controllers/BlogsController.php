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
		$this->data['page'] = [
			'title' => "Infertility" . " - " . APP_NAME
		];
		$this->load->load_view('blogs/single', $this->data);
	}
}
