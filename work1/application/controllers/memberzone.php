<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberZone extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');

		if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
		{
			$this->load->model('User');
			$this->User->setUsername($_COOKIE['username']);
			$this->User->setPassword($_COOKIE['password']);
			
				if(!$this->User->CheckLogin())
				{
					redirect(base_url('index.php/login')); //ต้องมี  helper เท่านั้น
				}
		}
		else
		{
			redirect(base_url('index.php/login'));
		}

		echo 'สวัสดีฉันชื่อ'. $_COOKIE['username'] . 
		'<a href = "'. base_url('index.php/login/logout').'"> ออกจากระบบ</a>';
	}

}
