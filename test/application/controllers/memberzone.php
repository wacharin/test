<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberZone extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	
	public function index()
	{

		if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
		{
			$this->load->model('Register');
			$this->Register->setUsername($_COOKIE['username']);
			$this->Register->setPassword($_COOKIE['password']);
			
				if(!$this->Register->login())
				{
					redirect(base_url('index.php/Checklogin')); //ต้องมี  helper เท่านั้น
				}
		}
		else
		{
			redirect(base_url('index.php/Checklogin'));
		}

		$this->load->view('data');
	}

}
