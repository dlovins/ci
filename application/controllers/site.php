<?php
class Site extends Controller {
	
	function index() {
		$this->load->model('data_model');
		$data['rows'] = $this->data_model->getAll();
		
		$this->load->view('home', $data);
	}
		
}

