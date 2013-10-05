<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
	   if($this->session->userdata('logged_in'))
	   {
	     $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['username'];

	     $data['title'] = "Users";

	     $this->load->view('head', $data);
	     $this->load->view('nav', $data);
	     $this->load->view('layout', $data);
	     $this->load->view('scripts', $data);
	     $this->load->view('footer', $data);
	   }
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/users.php */