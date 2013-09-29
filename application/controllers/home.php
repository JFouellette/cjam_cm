<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$data['title'] = "Test";
		$data['thissession'] = $this->session->userdata;
		$this->load->helper('url');
		$this->load->view('layout.php', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */