<?php
class Raport_model extends CI_Model {

	public function get_raporty($id = FALSE) {
		if($id === FALSE) {
			$this->db->order_by('id', 'ASC');
			$query = $this->db->get('raporty');
			return $query->result_array();
		}

		$query = $this->db->get_where('raporty', array('id' => $id));
		return $query->row_array();
	}

	public function dodaj_raport() {
		//$query = $this->db->get('raporty');
		// dodawanie do bazy

		return $query->result_array();
	}

}
