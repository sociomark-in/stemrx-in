<?php

class LeadsModel extends CI_Model
{
	public $active_tables;
	public $error;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('core/ApplicationModel');
		$this->active_tables = json_decode($this->ApplicationModel->load('tables'), true);
		// $this->table = (in_array('registrations', $this->db->list_tables())? 'registrations': null);

		$this->error = [
			'status' => 'Failed',
			'message' => "Unknown Error Occurred",
			'source' => __FILE__
		];
	}

	public function get($table, $columns = null, $where = null)
	{
		$results = [];
		if (!is_null($columns) && count($columns) > 0) {
			$this->db->select($columns);
		}
		if (!is_null($where) && count($where) > 0) {
			$this->db->where($where);
		}
		if (!is_null($table)) {
			if (!in_array($table, $this->active_tables['tables'])) {
				$this->error['message'] = "Database Table " . $table . " is not mapped with the Application!";
				return json_encode($this->error);
			} else {
				$results = $this->db->get($table)->result_array();
			}
			return json_encode($results);
		} else {
			return json_encode($this->error);
		}
	}

	public function get_labels()
	{
	}

	public function get_visible_columns()
	{
		$fields = [];
		$db_fields = $this->db->list_fields($this->active_tables);
		for ($i = 0; $i < count($db_fields); $i++) {
			$fields[$i]['db'] = $db_fields[$i];
			$fields[$i]['label'] = ucwords(str_replace('_', ' ', $db_fields[$i]));
		}
		return $fields;
	}
}
