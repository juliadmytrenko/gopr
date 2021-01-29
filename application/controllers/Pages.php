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
//				echo $this->post_model->test();
				//print_r ($this->post_model->get_pracownik());
				$data['zagrozenia'] = $this->zagrozenie_model->get_zagrozenia();
			}

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}
