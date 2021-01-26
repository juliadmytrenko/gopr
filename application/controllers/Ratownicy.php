<?php
class Ratownicy extends CI_Controller {

	public function index() {
		$data['title'] = 'Ratownicy';

		$data['ratownicy'] = $this->ratownik_model->get_ratownicy();

		$this->load->view('templates/header');
		$this->load->view('ratownicy/index', $data);
		$this->load->view('templates/footer');

	}
}
