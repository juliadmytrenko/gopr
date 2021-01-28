<?php
class Ratownik_model extends CI_Model {

	public function get_ratownicy() {
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get_where('pracownicy', array('stanowisko' => 'ratownik'));
		return $query->result_array();
	}
}
