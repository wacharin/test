<?php
class Product extends CI_Model
{
		var $id; //
		var $name; //
		var $sell; //
		var $sellmember; //
		var $insurance; //
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
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
	public function setSell($sell)
	{
		$this->sell = $sell;
	}

	public function getSell()
	{
		return $this->sell;
	}
	public function setSellmember($sellmember)
	{
		$this->sellmember = $sellmember;
	}

	public function getSellmember()
	{
		return $this->sellmember;
	}
	public function setInsurance($insurance)
	{
		$this->insurance = $insurance;
	}

	public function getInsurance()
	{
		return $this->insurance;
	}

	public function add()
	{
		$array = array
		(
			'name' => $this->getName(),
			'sell' => $this->getSell(),
			'sellmember' => $this->getSellmember(),
			'insurance' => $this->getInsurance()
		);

		$this->db->insert('product', $array);
		return $this->db->insert_id(); 
	}

	public function findByAll()
	{
		$query = $this->db->query
		(
			'SELECT id,name,sell,sellmember,insurance FROM product' 
		);

		return $query->result_array();
	}

	public function update()
	{
		$data = array
		(
			'name' => $this->getName(),
			'sell' => $this->getSell(),
			'sellmember' => $this->getSellmember(),
			'insurance' => $this->getInsurance()
		);

		$this->db->where('id', $this->getId());
		$this->db->update('product', $data);

		return true;
	}

	public function delete()
	{
		$array = array
		(
			'id' => $this->getId()
		);

		$this->db->delete('product',$array);

		return true;
	}	






}
?>