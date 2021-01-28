<?php
class Zagrozenie_model extends CI_Model {

	public function get_zagrozenia() {
		$query = $this->db->get('zagrozenia_lawinowe');
		return $query->result_array();
	}
}
