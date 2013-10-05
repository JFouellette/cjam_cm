<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfile extends CI_Controller {

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

	     $data['title'] = $session_data['username'] . " Profile";

	     $this->load->view('head', $data);
	     $this->load->view('nav', $data);
	     $this->load->view('userprofile', $data);
	     //$this->load->view('ajax/loaduserdata',$data);
	     $this->load->view('footer', $data);
	   }
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function loaduserdata()
	{
		$this->load->model('user_model');
		$session_data = $this->session->userdata('logged_in');
		$userid = $session_data['id'];
		if($this->session->userdata('logged_in'))
		{
			$check = $this->user_model->loaddata($userid); //return array of objects
			echo json_encode($check[0]);			// return objects in json

		}
		else
		{
			//If no session, unauthorize
			echo "error";
		}
		
	}
}

/* End of file userprofile.php */
/* Location: ./application/controllers/userprofile.php */