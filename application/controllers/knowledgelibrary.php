<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KnowledgeLibrary extends CI_Controller {

	public function index()
	{
		$data['title'] = "Library CJAM";
		$this->load->helper('url');
		$this->load->view('layout.php', $data);
	}
}

/* End of file knowledgelibrary.php */
/* Location: ./application/controllers/knowledgelibrary.php */