<?php
 class Post_model extends CI_Model {
 	public  function __construct() {
 		$this->load->database();
	}
//	I'm lost here
	public function get_posts($slug = FALSE) {
 		if($slug === FALSE) {
 			$query = $this->db->get('posts');
 			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('slug' => $slug));
		return $query->row_array();
	}

	public function get_latest_posts() {
		$query = $this->db->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5");
		return $query->result_array();
	}

	public function test() {
		echo "test";
		return "test";
	}
 }
