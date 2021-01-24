<?php
	class Users extends CI_Controller {
		public function register() {
			$data['title'] = 'Sign Up';

			// form_validation to library (autoload.php)
			$this->form_validation->set_rules('login', 'Login', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('haslo', 'Hasło', 'required');
			$this->form_validation->set_rules('potwierdzenie_hasla', 'Powtórz hasło', 'matches[haslo]');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				die('continue');
				// Szyfrowanie hasła w formacie md5

			}

		}
	}
