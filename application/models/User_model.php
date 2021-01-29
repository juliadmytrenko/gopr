<?php
class User_model extends CI_Model {
	// w pierwszym wczytywanym modelu musi byc konstruktor
	public  function __construct() {
		$this->load->database();
	}

	public function login($login, $haslo) {
		// Walidacja

		$this->db->where('login', $login);
		$this->db->where('haslo', $haslo);

		$result = $this->db->get('loginy');

		if($result->num_rows() == 1) {
			$id_pracownika = $result->row(0)->id_pracownika;
			$pracownik = $this->employee_model->get_employee_data($id_pracownika);

			return $pracownik;
		} else {
			return false;
		}
	}
}
