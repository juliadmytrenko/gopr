<?php
class Zagrozenia extends CI_Controller {

	public function index() {
		$data['title'] = 'Zagrozenia';

//
//		$id_jednostki =  $this->session->userdata('id_jednostki');
////		die('lol'.$id_jednostki);
//		$data['ratownicy_w_jednostce'] = $this->jednostka_model->get_ratownicy_w_jednostce($id_jednostki);


		$this->load->view('templates/header');
		$this->load->view('zagrozenia/index', $data);
		$this->load->view('templates/footer');

	}
}
