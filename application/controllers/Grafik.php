<?php
class Grafik extends CI_Controller {

	public function index() {
		$data['title'] = 'Grafik';

		$id_pracownika = $this->session->userdata('user_id');
		$data['grafiki'] = $this->grafik_model->get_grafik();
//		if($data['grafik'][''])
//		$id_jednostki =  $this->session->userdata('id_jednostki');
////		die('lol'.$id_jednostki);
//		$data['ratownicy_w_jednostce'] = $this->jednostka_model->get_ratownicy_w_jednostce($id_jednostki);

//		die(print_r($data['grafiki']));
		$this->load->view('templates/header');
		$this->load->view('grafik/index', $data);
		$this->load->view('templates/footer');

	}
}
