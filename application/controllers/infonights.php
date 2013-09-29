<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InfoNights extends CI_Controller {

	public function index()
	{
		$data['title'] = "Info Nights";
		$this->load->helper('url');
		$this->load->view('head.php', $data);
		$this->load->view('layout.php', $data);
		$this->load->view('footer.php', $data);
	}
}

/* End of file infonights.php */
/* Location: ./application/controllers/infonights.php */