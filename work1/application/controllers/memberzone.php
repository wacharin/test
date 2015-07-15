<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberZone extends CI_Controller {

	
	public function index()
	{
		echo 'สวัสดีฉันชื่อ'. $_COOKIE['username'];
	}

}
