<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

	public function index()
	{
		
		$this->load->helper(array('form'));
		$data['title'] = "CJAM Login";
		$data['css'] = '<link rel="stylesheet" href="css/login.css">';		
		$this->load->view('head', $data);
		
		$this->load->view('login', $data);
		$this->load->view('scripts', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */