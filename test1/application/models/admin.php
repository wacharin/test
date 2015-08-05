<?php
class Admin extends CI_Model
{
		var $id; //
		var $username; //
		var $password; //
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	function login()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $this->getUsername());
		$this->db->where('password', $this->getPassword());
		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) 
		{
			return $data = $query->result();
		}
		else
		{
			return FALSE;
		}
	}



}
?>