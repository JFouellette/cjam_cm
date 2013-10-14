<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfile extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user_model');
 }

	public function index()
	{
	if($this->session->userdata('logged_in'))
   		{
	     //load basic stuff
	     $session_data = $this->session->userdata('logged_in');
		 $userid = $session_data['id'];
		 $this->load->helper(array('form'));

	     // retrieve user data
	     $this->load->model('user_model');
	     $obj = $this->user_model->loaddata($userid);
	     $data['name'] = $obj[0]->name;
	     $data['email'] = $obj[0]->email;
		 $data['phone'] = $obj[0]->phone;
		 $data['initial_values'] = json_encode($obj[0]);

		 //js
		 $data['js'] = "userprofile";

	     //other stuff for the views
		 $data['username'] = $session_data['username'];
	     $data['privilege'] = $session_data['privilege'];
	     $data['title'] = $session_data['username'] . " Profile";
	     
	     //load Flashdata
	     $data['flashsuccess'] = $this->session->flashdata('success'); // in case of success
	     $data['flashfailure'] = $this->session->flashdata('failure'); // in case of failure
	     $data['flash_pass_success'] = $this->session->flashdata('pass_success'); // in case of success
	     $data['flash_pass_failure'] = $this->session->flashdata('pass_failure'); // in case of failure

	     //load views
	     $this->load->view('head', $data);
	     $this->load->view('nav', $data);
	     $this->load->view('userprofile', $data);
	     $this->load->view('scripts', $data);
	     $this->load->view('footer', $data);
	   }
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	public function load_user_data()
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

	public function update_user_data()
	{
		if($_POST):

			//load the basics
			$session_data = $this->session->userdata('logged_in');
			$userid = $session_data['id'];

			//pass data in variables
			$data = array(
						'name' => $_POST['inputName'],
						'email' => $_POST['inputEmail'],
						'phone' => $_POST['inputPhone']
				);

			//update the db using user model
			$up = $this->user_model->update_user_database($userid, $data);

			//refresh session infos
			$sess_array = array(
					         'id' => $userid,
					         'username' => $_POST['inputName'],
					         'privilege' => $privilege
	       					);
	       	$this->session->set_userdata('logged_in', $sess_array);

	       	// send message to view
	       	if ($up == false) {
				$this->session->set_flashdata('failure', 'Database error. Please contact coordinator');
			} else {
				$this->session->set_flashdata('success','Your changes have been saved.'); 	
			}
			return true;

		endif;
	}

	public function change_user_password()
	{

		// warning if there is a problem with post request
		if(!$_POST)
		{
			$this->session->set_flashdata('pass_failure','No POST function. Contact admin!');
			return false;
		}
		

		//make sure the new password is not empty
		if(!$this->input->post('inputNewPassword'))
		{
			$this->session->set_flashdata('pass_failure', 'You forgot to enter a new password.');
		}
		//check both new passwords are the same
		else if ($this->input->post('inputNewPassword') != $this->input->post('inputNewPassword2'))
		{
		    $this->session->set_flashdata('pass_failure','Password confirmation does not match.');      
		}
		//it should be good at this point!
		else
		{
		    //vars used to update database
		    $session_data = $this->session->userdata('logged_in');
			$user_id = $session_data['id'];

			//check that old password is valid
			$old_password = $this->user_model->check_password($user_id, $this->input->post('inputOldPassword'));

			// if yes, then hourra, updata database and throw a party
			if ($old_password)
			{

				$new = array('password' => md5($this->input->post('inputNewPassword')));

				$p = $this->user_model->update_user_database($user_id, $new);
				if ($p == true) // simple check for database errors
				{$this->session->set_flashdata('pass_success', 'Password changed!');}
				else
				{$this->session->set_flashdata('pass_failure', 'Database error, try again or contact admin.');}
				
			}
			else // if old password is not good
			{
				$this->session->set_flashdata('pass_failure', 'Wrong password.');
			}

		}

	}

}

/* End of file userprofile.php */
/* Location: ./application/controllers/userprofile.php */