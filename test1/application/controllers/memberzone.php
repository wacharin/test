<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MemberZone extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}


	public function index()
	{
	if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
	{
		$this->load->model('Admin');
		$this->Admin->setUsername($_COOKIE['username']);
		$this->Admin->setPassword($_COOKIE['password']);
		if(!$this->Admin->login())
		{
			redirect(base_url('index.php/memberzone')); //ต้องมี helper เท่านั้น
		}
	}
	else
	{
		redirect(base_url('index.php/memberzone'));
	}
		$this->load->view('data');
	}
}