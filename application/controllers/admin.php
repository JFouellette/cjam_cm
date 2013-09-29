<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = "Users";
		$this->load->helper('url');
		$this->load->view('head.php', $data);
		$this->load->view('layout.php', $data);
		$this->load->view('footer.php', $data);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/users.php */