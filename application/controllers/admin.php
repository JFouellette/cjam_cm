<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = "Users";
		$this->load->helper('url');
		$this->load->view('layout.php', $data);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/users.php */