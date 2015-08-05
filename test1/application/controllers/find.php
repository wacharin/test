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

			$this->load->model('product');
			$data['product'] =$this->product->findByAll();
			$this->load->view('home');

		}
		else
		{
			$data['product'] = '';
			$this->load->view('home');

		}
	}
}
