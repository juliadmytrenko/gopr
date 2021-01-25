<?php
class User_model extends CI_Model {


	public function login($login, $haslo) {
		// Walidacja

		$this->db->where('login', $login);
		$this->db->where('haslo', $haslo);

		$result = $this->db->get('loginy');

		if($result->num_rows() == 1) {
			return $result->row(0)->id_pracownika;
		} else {
			return false;
		}
	}
}
