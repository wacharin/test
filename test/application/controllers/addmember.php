<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addmember extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function adddata()
	{
		if(isset($COOKIE['username']) && isset($COOKIE['password'])) 
		{
			$this->load->model('Register');
			$this->Register->setUsername($_COOKIE['username']);
			$this->Register->setPassword($_COOKIE['password']);

			if(!$this->Register->login()) 
			{
				redirect(base_url('index.php/Checklogin'));
			}
		}
		else
		{
			redirect(base_url('index.php/Checklogin'));
		}

		$this->form_validation->set_rules('bookid','รหัสหนังสือ','required',
		array(
				'required' => 'กรุณากรอก{field}',
			));

		$this->form_validation->set_rules('bookname','ชื่อหนังสือ','required',
		array(
				'required' => 'กรุณากรอก{field}',
			));

		$this->form_validation->set_rules('bookauthor','ชื่อผู้แต่ง','required',
		array(
				'required' => 'กรุณากรอก{field}',
			));

		if($this->form_validation->run() == FALSE) 
		{
			$this->load->view('data');
		}
		else
		{
			$this->load->model('Book');
			$this->Book->setBookid($this->input->post('bookid'));
			$this->Book->setBookname($this->input->post('bookname'));
			$this->Book->setBookauthor($this->input->post('bookauthor'));

			$this->Book->add();

			$this->load->view('data');

		}

		//$this->load->view('welcome_message');
	}
}
