<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NumberPhoneController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('AddNewNumberPhone');
	}

	public function addNewNumberPhone()
	{
		$number = $this->input->post('number');
		$price = $this->input->post('price');

		$this->load->model('NumberPhoneModel');
		if ($this->NumberPhoneModel->insertNew($number, $price)) {
			echo "insert ok";
			// $this->load->view('AddNumberPhoneSuccess');

		}else{
			echo "insert failed";
		}
	}

	public function detailNumberPhone($id)
	{
		$this->load->model('NumberPhoneModel');
		$data = array('detail' => $this->NumberPhoneModel->getDetailNumberSimbyID($id));
		$this->load->view('EditNumberPhone', $data);
	}

	public function editNumberPhone()
	{
		$id = $this->input->post('id');
		$number = $this->input->post('number');
		$price = $this->input->post('price');
		$this->load->model('NumberPhoneModel');
		if ($this->NumberPhoneModel->editNumberPhone($id, $number, $price)) {
			echo "ok";
		}else{
			echo "failed";
		}
	}
}

/* End of file TestController.php */
/* Location: ./application/controllers/TestController.php */