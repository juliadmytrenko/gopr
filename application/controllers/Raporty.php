<?php
class Raporty extends CI_Controller {

	public function index() {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['raporty'] = $this->raport_model->get_raporty();

		$this->load->view('templates/header');
		$this->load->view('raporty/index', $data);
		$this->load->view('templates/footer');

	}

	public function dodaj() {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

  		$data['title'] = "Dodawanie formularza";

		$this->load->view('templates/header');
		$this->load->view('raporty/dodaj', $data);
		$this->load->view('templates/footer');

	}
}
