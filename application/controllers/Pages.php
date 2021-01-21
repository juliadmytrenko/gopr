<?php
	class Pages extends CI_Controller {
		public function view($page = 'home') {
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}

			$this->load->helper('url');

			$data['title'] = ucfirst($page);

			if($page === 'home') {

//				$data['latest_posts'] = $this->post_model->get_latest_posts();
				echo $this->post_model->test();
			}

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}
