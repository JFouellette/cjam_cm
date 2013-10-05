<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];

     $data['title'] = "CJAM Case Manager";

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

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */