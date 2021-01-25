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



			// Ustaw wiadomość
			$this->session->set_flashdata('user_loggedin', 'Zalogowano.');

			redirect('home');
		}
	}

}
