<?php
class Raport_model extends CI_Model {

	public function get_raporty() {
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('raporty');
		return $query->result_array();
	}
}
