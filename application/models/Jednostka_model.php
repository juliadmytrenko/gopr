<?php
class Jednostka_model extends CI_Model {

	public function get_ratownicy_w_jednostce($id_jednostki) {

		$this->db->where('id_jednostki', $id_jednostki);
		$this->db->where('stanowisko', 'ratownik');
		$query = $this->db->get('pracownicy');

		return $query->result_array();
	}

	public function dodaj_do_jednostki($id_jednostki, $id_pracownika) {


		$data = array(
			'id_jednostki' => $id_jednostki
		);

		$this->db->where('id', $id_pracownika);
		return $this->db->update('pracownicy', $data);
	}

	public function usun_z_jednostki($id_pracownika) {

		$data = array(
			'id_jednostki' => null
		);

		$this->db->where('id', $id_pracownika);
		return $this->db->update('pracownicy', $data);
	}

}
