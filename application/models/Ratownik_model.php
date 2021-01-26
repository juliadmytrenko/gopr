<?php
class Ratownik_model extends CI_Model {

	public function get_ratownicy() {
		$query = $this->db->get_where('pracownicy', array('stanowisko' => 'ratownik'));
		return $query->result_array();
	}
}
