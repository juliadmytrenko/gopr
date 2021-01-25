<?php
	class Employees extends CI_Controller {
		public function create() {
			$data['title'] = 'Dodaj nowego pracownika';

			// form_validation to library (autoload.php)
			$this->form_validation->set_rules('imie', 'Imię', 'required');
			$this->form_validation->set_rules('nazwisko', 'Nazwisko', 'required');
			$this->form_validation->set_rules('nr_telefonu', 'Numer telefonu', 'required');
			$this->form_validation->set_rules('stanowisko', 'Stanowisko', 'required');
			$this->form_validation->set_rules('id_jednostki', 'ID jednostki');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('employees/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->employee_model->create();

				// Ustaw wiadomość
				$this->session->set_tempdata('employee_created', 'Utworzono nowego pracownika.');

				redirect('home');
			}
		}

		public function check_email_exists($email) {
			$this->form_validation->set_message('check_email_exists', 'Pracownik o tym adresie email już istnieje.');

			return $this->employee_model->check_email_exists($email);
		}
	}
