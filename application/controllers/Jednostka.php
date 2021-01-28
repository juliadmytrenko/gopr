<?php
class Jednostka extends CI_Controller {

	public function index() {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['title'] = 'Jednostka';


		$id_jednostki =  $this->session->userdata('id_jednostki');
		$data['ratownicy_w_jednostce'] = $this->jednostka_model->get_ratownicy_w_jednostce($id_jednostki);


		$this->load->view('templates/header');
		$this->load->view('jednostka/index', $data);
		$this->load->view('templates/footer');

	}


	public function dodaj($id_ratownika = NULL) {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$id_jednostki = $this->session->userdata('id_jednostki');

		if($id_jednostki) {
			$this->jednostka_model->dodaj_do_jednostki($id_jednostki, $id_ratownika);
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			echo "Wystąpił błąd przy dodawaniu.";
		}
	}

	public function usun($id_ratownika = NULL) {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$this->jednostka_model->usun_z_jednostki($id_ratownika);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
