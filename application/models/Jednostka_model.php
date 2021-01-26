<?php
class Jednostka_model extends CI_Model {

	public function get_ratownicy_w_jednostce($id_jednostki) {

		$this->db->where('id_jednostki', $id_jednostki);
		$this->db->where('stanowisko', 'ratownik');

		$query = $this->db->get('pracownicy');
//		$query = $this->db->get_where('pracownicy', array('id_jednostki' => $id_jednostki));
		return $query->result_array();
	}
}
