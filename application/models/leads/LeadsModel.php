<?php

class LeadsModel extends CI_Model
{
	public $data;
	public function __construct()
	{
		parent::__construct();
	}

	public function new_appointment($form_data) {

		// if($this->db->insert($this->table['appointment'])){

		// }

		return true;
		
	}
	
	public function new_enquiry($form_data) {
		
		// if($this->db->insert($this->table['appointment'])){
			
		// }
		return true;
	}
	

}
