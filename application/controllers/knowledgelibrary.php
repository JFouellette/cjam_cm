<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KnowledgeLibrary extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

	public function index()
	{
	if($this->session->userdata('logged_in'))
	   	{
	     $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['username'];
	     $data['privilege'] = $session_data['privilege'];

	     $data['title'] = "Library";

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

/* End of file knowledgelibrary.php */
/* Location: ./application/controllers/knowledgelibrary.php */