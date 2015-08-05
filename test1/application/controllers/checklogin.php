<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checklogin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function logout()
	{
		setcookie('username','', (time()-3600),"/");
		setcookie('password','', (time()-3600),"/");
		redirect(base_url('index.php/Checklogin'));
	}

	public function index()
	{
		if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
		{
			$this->load->model('Admin');
			$this->Admin->setUsername($_COOKIE['username']);
			$this->Admin->setPassword($_COOKIE['password']);
			if($this->Admin->login())
			{
				redirect(base_url('index.php/memberzone')); //ต้องมี helper เท่านั้น
			}
		}
		if($this->input->post())
		{
			$this->load->model('Admin');
			$this->Admin->setUsername($this->input->post('username'));
			$this->Admin->setPassword($this->input->post('password'));
			if($this->Admin->login())
		{
			//ถ้า login ผ่าน
			echo 'Pass';
			setcookie('username', $this->input->post('username'), (time()+3600),"/");
			setcookie('password', $this->input->post('password'), (time()+3600),"/");
			redirect(base_url('index.php/memberzone')); //ต้องมี helper เท่านั้น
		}
		else
		{
			echo "<script language='javascript'>alert('username,password ไม่ถูกต้อง');</script>";
		}
	}
		$this->load->view('login');
	}
}