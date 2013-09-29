<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends CI_Controller {

	public function index()
	{
		$data['title'] = "Cases";
		$this->load->helper('url');
		$this->load->view('head.php', $data);
		$this->load->view('layout.php', $data);
		$this->load->view('footer.php', $data);
	}
}

/* End of file cases.php */
/* Location: ./application/controllers/cases.php */