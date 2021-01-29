<?php
	class Grafik extends CI_Controller {

		public function index() {
			// check login
			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}

			$data['title'] = 'Grafik';

			$data['grafiki'] = $this->grafik_model->get_grafik();

			$this->load->view('templates/header');
			$this->load->view('grafik/index', $data);
			$this->load->view('templates/footer');

		}
}
