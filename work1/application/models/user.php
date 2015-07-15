<?php
class User extends CI_Model
{
		var $id; //
		var $username; //
		var $password; //

	function __construct()
	{
		parent::__construct();
		$this->load->database();
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

	public function checkLogin()
	{
		$sql = sprintf('SELECT id FROM users WHERE username = "%s" AND password ="%s"', $this->getUsername(), 
		$this->getPassword());
		$query = $this->db->query($sql);

		return $query->num_rows();
	}

}
?>