<?php
class Jednostka extends CI_Controller {

	public function index() {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['title'] = 'Jednostka';


		$id_jednostki =  $this->session->userdata('id_jednostki');
//		die('lol'.$id_jednostki);
		$data['ratownicy_w_jednostce'] = $this->jednostka_model->get_ratownicy_w_jednostce($id_jednostki);


		$this->load->view('templates/header');
		$this->load->view('jednostka/index', $data);
		$this->load->view('templates/footer');

	}

//	public function dodaj() {
//		// check login
//		if(!$this->session->userdata('logged_in')) {
//			redirect('users/login');
//		}
//
//		$id_jednostki = $this->session->userdata('id_jednostki');
//		$id_pracownika = // pobrac id z buttona
//
//		$this->jednostka_model->dodaj_do_jednostki();
//		redirect('ratownicy/index');
//	}


	public function usun($id_ratownika = NULL) {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

//		$id_jednostki = $this->session->userdata('id_jednostki');

		$this->jednostka_model->usun_z_jednostki($id_ratownika);
		redirect('ratownicy/index');
	}
}
