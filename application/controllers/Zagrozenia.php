<?php
class Zagrozenia extends CI_Controller {

	public function index() {
		// check login
		if(!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$data['title'] = 'Zagrozenia';

		$data['zagrozenia'] = $this->zagrozenie_model->get_zagrozenia();

		$this->load->view('templates/header');
		$this->load->view('zagrozenia/index', $data);
		$this->load->view('templates/footer');

	}
}
