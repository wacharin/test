<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addmember extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	
	public function index()
	{
		$isError = false;
		$data['error'] = array();
		$data['suscess'] = array();

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[1]|max_length[12]',
			array
			(
				'required' => 'ยังไม่ได้กรอก ชื้อสินค้า',
				'min_length' => 'ห้ามน้อยกว่า 1 ตัว',
				'max_length' => 'ห้ามมากกว่า 12 ตัว',
			)
		);

		$this->form_validation->set_rules('sell', 'Name', 'required|min_length[1]|max_length[12]',
			array
			(
				'required' => 'ยังไม่ได้กรอก ราคาขาย',
				'min_length' => 'ห้ามน้อยกว่า 1 ตัว',
				'max_length' => 'ห้ามมากกว่า 12 ตัว',
			)
		);

		$this->form_validation->set_rules('sellmember', 'Name', 'required|min_length[1]|max_length[12]',
			array
			(
				'required' => 'ยังไม่ได้กรอก ราคาสมาชิก',
				'min_length' => 'ห้ามน้อยกว่า 1 ตัว',
				'max_length' => 'ห้ามมากกว่า 12 ตัว',
			)
		);

		$this->form_validation->set_rules('insurance', 'Name', 'required|min_length[1]|max_length[12]',
			array
			(
				'required' => 'ยังไม่ได้กรอก ประกัน',
				'min_length' => 'ห้ามน้อยกว่า 1 ตัว',
				'max_length' => 'ห้ามมากกว่า 12 ตัว',
			)
		);

		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('data');
		}
		else
		{
			$this->load->model('Product');
			$this->Product->setName($this->input->post('name'));
			$this->Product->setSell($this->input->post('sell'));
			$this->Product->setSellmember($this->input->post('sellmember'));
			$this->Product->setInsurance($this->input->post('insurance'));
			$this->Product->add();
		}

	}

	
}
