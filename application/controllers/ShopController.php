<?php

class ShopController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function home(){
		$this->load->load_store('pages/store/home');
	}
	public function product($product){
		$this->load->load_store('pages/store/shop-details');
	}
}
