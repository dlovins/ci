<?php
class Site extends Controller {

	function index() {
		$data['myValue'] = "Some string";
		$data['anotherValue'] = "Another string";

		$this->load->view('home', $data);
		}


	}
?>
