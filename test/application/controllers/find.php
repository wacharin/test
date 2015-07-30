<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	
	public function index()
	{
		if ($this->input->post('name')) 
		{
			$this->load->model('Book');
			$data['book']= $this->Book->findByName($this->input->post('name'));
			$this->Load->view('home', $data);
		}
		else
		{
			$data['book'] = '';
			$this->load->view('home', $data);
		}

	}
}

?>
