<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = "Users";
		$this->load->helper('url');
		$this->load->view('head.php', $data);
		$this->load->view('login.php', $data);
		$this->load->view('footer.php', $data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */