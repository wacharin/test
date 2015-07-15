<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		if($this->input->post())
		{
			$this->load->model('User');
			$this->User->setUsername($this->input->post('username'));
			$this->User->setPassword($this->input->post('password'));
		
		if($this->User->CheckLogin())
		{
			//ถ้า login ผ่าน
			echo 'Pass';
		}
		else
		{
			//ถ้า login ไม่ผ่าน
			echo 'Fail';
		}
	}


		$this->load->helper('url');
		$this->load->view('login');
	}
}
