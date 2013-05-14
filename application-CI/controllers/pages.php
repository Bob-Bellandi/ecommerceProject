<?php

class Pages extends CI_Controller {

	public function view($page = 'about')
	{
		echo "function call successful";
		$this->load->view($page);
	}
}
?>