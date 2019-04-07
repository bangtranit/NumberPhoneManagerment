<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NumberPhoneModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertNew($number, $price)
	{
		$data = array('number' => $number, 'price' => $price);
		$this->db->insert('numberphone', $data);
		return $this->db->insert_id();
	}

	public function getNumberPhones()
	{
		$this->db->select('*');
		$numberphones = $this->db->get('numberphone');
		$numberphones = $numberphones->result_array();// dua ket qua thanh 1 array data
		return $numberphones;
		// echo "<pre>";
		// var_dump($numberphones);
	}

	public function deleteNumberPhoneByID($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('numberphone');
		echo "delete ok";
	}

}

/* End of file SimModel.php */
/* Location: ./application/models/SimModel.php */