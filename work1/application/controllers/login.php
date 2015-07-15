<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function logout()
	{
		$this->load->helper('url');

		setcookie('username','', (time()-3600),"/");
		setcookie('password','', (time()-3600),"/");
		redirect(base_url('index.php/login'));
	}

	
	public function index()
	{
		$this->load->helper('url');

	if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
	{
		$this->load->model('User');
		$this->User->setUsername($_COOKIE['username']);
		$this->User->setPassword($_COOKIE['password']);
		
			if($this->User->CheckLogin())
			{
				redirect(base_url('index.php/memberzone')); //ต้องมี  helper เท่านั้น
			}
	}

	if($this->input->post())
	{
		$this->load->model('User');
		$this->User->setUsername($this->input->post('username'));
		$this->User->setPassword($this->input->post('password'));
		
			if($this->User->CheckLogin())
			{
				//ถ้า login ผ่าน
				echo 'Pass';
				setcookie('username', $this->input->post('username'), (time()+3600),"/");
				setcookie('password', $this->input->post('password'), (time()+3600),"/");
				redirect(base_url('index.php/memberzone')); //ต้องมี  helper เท่านั้น
			}

			else
			{
				//ถ้า login ไม่ผ่าน
				echo 'Fail';
			}
	}

		$this->load->view('login');
	}
}
