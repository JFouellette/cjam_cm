<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

	public function index()
	{
		$this->load->helper(array('form'));
		$data['title'] = "Users";
		
		$this->load->view('head.php', $data);
		$this->load->view('login.php', $data);
		$this->load->view('footer.php', $data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */