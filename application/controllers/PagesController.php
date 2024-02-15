<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PagesController extends CI_Controller
{

	public $data;

	/* 
	$route['about-us'] = 'PagesController/about';
	$route['contact-us'] = 'PagesController/contact';
	$route['appointment'] = 'PagesController/appointment';
	$route['blogs'] = 'PagesController/blogs';
	$route['projects'] = 'PagesController/projects';
	$route['services'] = 'PagesController/services';
	$route['teams'] = 'PagesController/teams';
	$route['shop'] = 'PagesController/shop';


	$route['team-detail'] = 'PagesController/team_detail';
	$route['shop-detail'] = 'PagesController/shop_detail';
	$route['blog/(:any)'] = 'PagesController/blog_detail/$1';
	$route['service/(:any)'] = 'PagesController/service_detail/$1';
	*/

	public function index()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/new/index', $this->data);
	}

	public function blogs()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/blog', $this->data);
	}
	public function about()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/about', $this->data);
	}
	public function contact()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/contact', $this->data);
	}
	public function gallery()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/gallery', $this->data);
	}
	public function appointment()
	{
		$this->data['page']['title'] = "";
	}
	public function projects()
	{
		$this->data['page']['title'] = "";
	}
	public function services()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/service', $this->data);
	}
	public function service_detail()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/service-details', $this->data);
	}
	public function service_single($service)
	{
		switch ($service) {
			case 'cosmetic-gynecology':
				$this->data['page']['title'] = "";
				$this->load->load_view('treatments/cosmatic-gynac', $this->data);
				break;
			case 'infertility':
				$this->data['page']['title'] = "";
				$this->load->load_view('treatments/infertility', $this->data);
				break;

			case 'hairfall':
				$this->data['page']['title'] = "";
				$this->load->load_view('treatments/hairfall', $this->data);
				break;

			default:
				$this->data['page']['title'] = "";
				$this->load->load_view('pages/service-details', $this->data);
				break;
		}
	}
	public function media($media)
	{
		switch ($media) {
			case 'instagram-media':
				$this->data['page']['title'] = "";
				$this->load->load_view('media/instagram-media', $this->data);
				break;
			case 'youtube-media':
				$this->data['page']['title'] = "";
				$this->load->load_view('media/youtube-media', $this->data);
				break;

			default:
				$this->data['page']['title'] = "";
				$this->load->load_view('pages/service-details', $this->data);
				break;
		}
	}
	public function condition($condition)
	{
		switch ($condition) {
			case 'advanced-pain-management':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/advanced-pain-management', $this->data);
				break;
			case 'orthopedic-conditions':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/orthopedic-conditions', $this->data);
				break;
			case 'auto-immune-diseases':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/auto-immune-diseases', $this->data);
				break;
			case 'neurological-diseases':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/neurological-diseases', $this->data);
				break;
			case 'infertility':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/infertility', $this->data);
				break;
			case 'advanced-pain-management':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/advanced-pain-management', $this->data);
				break;
			case 'metabolic-diseases':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/metabolic-diseases', $this->data);
				break;
			case 'eye-conditions':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/eye-conditions', $this->data);
				break;
			case 'dentistry':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/dentistry', $this->data);
				break;
			case 'respiratory-diseases':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/respiratory-diseases', $this->data);
				break;
			case 'breast-cancer':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/breast-cancer', $this->data);
				break;
			case 'chronic-kidney-disease':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/chronic-kidney-disease', $this->data);
				break;
			case 'cosmetic-conditions':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/cosmetic-conditions', $this->data);
				break;
			case 'gastrointestinal-diseases':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/gastrointestinal-diseases', $this->data);
				break;
			case 'genetic-disorders':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/genetic-disorders', $this->data);
				break;
			case 'orphan-diseases':
				$this->data['page']['title'] = "";
				$this->load->load_view('condition/orphan-diseases', $this->data);
				break;
			default:
				$this->data['page']['title'] = "";
				$this->load->load_view('pages/service-details');
				break;
		}
	}
	public function teams()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/teams');
	}
	public function shop()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/shop');
	}
	public function privacy_policy()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('footer/privacy_policy');
	}
	public function terms_condition()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('footer/terms_condition');
	}
	public function return_policy()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('footer/return_policy');
	}
	public function shop_details()
	{
		$this->data['page']['title'] = "";
		$this->load->load_view('pages/shop-detail');
	}
	public function page($url)
	{
		switch ($url) {
			case 'contact':
				# code...
				break;

			default:
				$this->load->load_view('pages/' . $url);
				break;
		}
	}
}
