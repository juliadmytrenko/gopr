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

	public function view($id = NULL) {
		//$this->load->helper('url');
		$data['raport'] = $this->raport_model->get_raporty($id);

		if(empty($data['raport'])) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('raporty/view', $data);
		$this->load->view('templates/footer');
	}

	public function dodaj() {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$this->form_validation->set_rules('tytul', 'Login', 'required');
		$this->form_validation->set_rules('date', 'Data', 'required');
		$this->form_validation->set_rules('tresc', 'Treść', 'required');

		// dalej formularz. Dodawanie raportu

  		$data['title'] = "Dodawanie formularza";


		if($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('raporty/dodaj', $data);
			$this->load->view('templates/footer');
		} else {

			$tytul = $this->input->post('tytul');
			$data = $this->input->post('date');
			$tresc = $this->input->post('tresc');

			$this->raport_model->dodaj($tytul, $data, $tresc);
		}

	}
}
