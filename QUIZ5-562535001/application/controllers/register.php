<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller
{
	function __construct()
		{
			parent::__construct();
	    	$this->load->helper('url');
			$this->load->library('form_validation');
		}
	public function index($number = 0)
	{
		$this->form_validation->set_rules('Name', 'ชื่อ', 'required|min_length[3]',
 			array(
					'required' => 'กรุณากรอก{field}',
 					'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า3ตัวอักษร {param} ตัวอักษร'
 		));
     $this->form_validation->set_rules('Lastname', 'นามสุกล', 'required|min_length[3]',
       array(
				 'required' => 'กรุณากรอก{field}',
         		 'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า3ตัวอักษร {param} ตัวอักษร'
     ));
       $this->form_validation->set_rules('Username', 'ชื่อผู้ใช้', 'required|min_length[5]|max_length[20]',
       array(
			     'required' => 'กรุณากรอก{field}',
			     'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
			     'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
         ));
				 $this->form_validation->set_rules('Password', 'ชื่อผู้ใช้', 'required|min_length[5]|max_length[20]',
				 array(
					 'required' => 'กรุณากรอก{field}',
					 'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
					 'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
					 ));
 		//$this->load->library('upload',$config);
 		if ($this->form_validation->run() == FALSE)
 		{
 			$this->load->model('admin');
			$this->admin->setUsername($this->input->post('username'));
			$this->admin->setPassword($this->input->post('password'));
			$this->admin->setName($this->input->post('name'));
			$this->admin->setLastname($this->input->post('lastname'));
			$this->admin->add();
 				
 		}
			$this->load->view('vw_register');
  }
}
?>