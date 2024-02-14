<?php

class My_Loader extends CI_Loader
{
	public function load_view($view, $vars = array()){
		$this->view("layout/_1", $vars);
		$this->view($view, $vars);
		$this->view("layout/_2", $vars);
	}
	
	public function load_store($view, $vars = array()){
		$this->view("layout/_1", $vars);
		$this->view($view, $vars);
		$this->view("layout/_2", $vars);
	}
}
