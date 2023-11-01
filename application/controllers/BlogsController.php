<?php 

class BlogsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function blog_single(){
		$this->load->view('blogs/blog_template');
	}
}
