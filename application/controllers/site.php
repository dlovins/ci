<?php
class Site extends Controller {

	function index() {
	 	$this->load->model('site_model');
		$data['records'] = $this->site_model->getAll();
	
		$this->load->view('home', $data);
		}
		


	}
?>
