<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	     $data['title'] = "Users";

	     //js
		 $data['js'] = "admin";

	     $this->load->view('head', $data);
	     $this->load->view('nav', $data);
	     $this->load->view('admin', $data);
	     $this->load->view('scripts', $data);
	     $this->load->view('footer', $data);
	   }
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function load_all()
	{
		//load user model
		$this->load->model('user_model');

		//security check
		$session_data = $this->session->userdata('logged_in');
	    $admin = $session_data['privilege'];
	    if ($admin < 50) // security check
	    {
	    	return false;
	    }
	    else // if security cleared, then load the users
	    {
	    	$results = $this->user_model->load_all_users();
	    	header('Content-Type: application/json');
	    	echo json_encode($results);
	    }


	}
}

/* End of file admin.php */
/* Location: ./application/controllers/users.php */