<?php

class Something extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}

	public function index(){

		$data['api'] = "
			{info : 'ABout something',
			 specifics : 'Nothing',
			 filler : '0',
			}
		";
		
		$this->load->view("something/index", $data);
	}




	public function api(){
		$data['api'] = json_encode($this->input->post(NULL,TRUE));
		$this->load->view("something/api", $data);
	}
}


?>
