<?php
class LeadsModel extends CI_Model
{

    public $result = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
		$this->db->select(['parent_name', 'parent_number', 'location', 'school', 'utm_source', 'utm_medium', 'utm_campaign', 'attempt', 'status', 'registered_on']);
		$this->db->order_by('registered_on', 'DESC');
        $this->result = $this->db->get('registrations')->result_array();
        return json_encode($this->result);
    }
}
