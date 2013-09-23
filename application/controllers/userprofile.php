<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfile extends CI_Controller {

	public function index()
	{
		$data['title'] = "My Profile";
		$this->load->helper('url');
		$this->load->view('layout.php', $data);
	}
}

/* End of file userprofile.php */
/* Location: ./application/controllers/userprofile.php */