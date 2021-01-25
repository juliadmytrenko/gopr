<?php
	class Employee_model extends CI_Model {
		public function create() {
			// Tablica z danymi użytkownika


			$pracownik = array(
				'imie' => $this->input->post('imie'),
				'nazwisko' => $this->input->post('nazwisko'),
				'nr_telefonu' => (int)$this->input->post('nr_telefonu'),
				'stanowisko' => $this->input->post('stanowisko'),
				'email' => $this->input->post('email'),
			);

			if($this->input->post('id_jednostki')) {
				$pracownik['id_jednostki'] = $this->input->post('id_jednostki');
			}


			//aby stworzyć login muszę najpier mieć id pracownika
//			$login_pracownika = array(
//				'login' => $this->input->post('login'),
//				'haslo' => $enc_password
//			);

			print_r($pracownik);
			// Wprowadź użytkownika do bazy
			return $this->db->insert('pracownicy', $pracownik);
		}

		public function check_email_exists($email) {
			$query = $this->db->get_where('pracownicy', array("email" => $email));

			return empty($query->row_array());
		}
	}
