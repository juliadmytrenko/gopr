<?php
class Users extends CI_Controller {
	public function login() {
		$data['title'] = 'Zaloguj się';

		// form_validation to library (autoload.php)
			$this->form_validation->set_rules('login', 'Login', 'required');
			$this->form_validation->set_rules('haslo', 'Hasło', 'required');

		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		} else {

			// Pobierz nazwę użytkownika (login)
			$login = $this->input->post('login');
			// Pobierz zaszyfrowane hasło
//			$password = md5($this->input->post('password'));
			// tymczasowo bez szyfrowania hasła
			$haslo = $this->input->post('haslo');
			// Zaloguj usera
			$user_id = $this->user_model->login($login, $haslo);

			if($user_id) {
				// Stwórz sesje
				$user_data = array(
					'user_id' => $user_id,
					'login' => $login,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				// Ustaw wiadomość
				$this->session->set_tempdata('user_loggedin', 'Zalogowano.', 1);
				redirect('home');
			} else {
				// Ustaw wiadomość
				$this->session->set_tempdata('login_failed', 'Błędne dane logowania.', 1);
				redirect('users/login');
			}
		}
	}

	public function logout() {
		// unset userdata
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('login');

		$this->session->set_tempdata('user_logout', 'Wylogowano.', 1);
		redirect('users/login');
	}

}
