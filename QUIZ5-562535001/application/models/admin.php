<?php
class Admin extends CI_Model
{
		var $id; //
		var $username; //
		var $password; //
		var $name; //
		var $lastname; //

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
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
	}

	public function getLastname()
	{
		return $this->lastname;
	}

	public function add()
      	{
      		$array = array
      		(
      			'username'  => $this->getUsername(),
      			'password'=>$this->getPassword(),
      			'name'=>$this->getName(),
      			'lastname'=>$this->getLastname()
      		);
      		$this->db->insert('member', $array);
      		return $this->db->insert_id();
      	}




}
?>