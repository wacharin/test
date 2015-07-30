<?php
class Book extends CI_Model
{
		var $id; //
		var $bookname; //
		var $bookid; //
		var $bookauthor; //

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
	public function setBookname($bookname)
	{
		$this->bookname = $bookname;
	}

	public function getBookname()
	{
		return $this->bookname;
	}
	public function setBookid($bookid)
	{
		$this->bookid = $bookid;
	}

	public function getBookid()
	{
		return $this->bookid;
	}
	public function setBookauthor($bookauthor)
	{
		$this->bookauthor = $bookauthor;
	}

	public function getBookauthor()
	{
		return $this->bookauthor;
	}

	public function add()
	{
		$array = array
		(
			'bookid' => $this->getBookid(),
			'bookname' => $this->getBookname(),
			'bookauthor' => $this->getBookauthor()

		);

		$this->db->insert('books', $array);
	}

	function findByName($name)
	{
		$query=$this->db->query
		(
			'SELECT bookname,bookid,bookauthor FROM books WHERE bookname LIKE "%'.$name.'%" OR bookid LIKE "%'.$name.'%" OR bookauthor LIKE "%'.$name.'%" ORDER BY bookname'
		);
	}






}
?>