<?php
class Grafik_model extends CI_Model {

	public function get_grafik() {
//		$dane = array();
//		// Pobieramy dane aktualnego pracownika i jego grafik
//		$pracownik = $this->db->get_where('pracownicy', array('id' => $id_pracownika));
//		$dane = array_merge($dane, $pracownik->result_array());
//
//		$grafik = $this->db->get_where('grafiki', array('id_pracownika' => $id_pracownika));
//		$dane = array_merge($dane, $grafik->result_array());
//		die(print_r($grafik->result_array()));

//		zamiast robić dwoch zapytan chyba jednym tak sie da:
		$query = $this->db->query("SELECT * FROM grafiki INNER JOIN pracownicy ON grafiki.id_pracownika=pracownicy.id");


		//$query = $this->db->get_where('pracownicy', array('stanowisko' => 'ratownik'));
		return $query->result_array();
	}
}
