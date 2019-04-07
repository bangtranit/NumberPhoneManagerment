<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListNumberPhoneController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('NumberPhoneModel');
		$numberPhones = array('numberphones' => $this->NumberPhoneModel->getNumberPhones()); //chuyen data thanh array voi key = numberphones
		$this->load->view('ListNumberPhones', $numberPhones);
	}

	public function delete($id)
	{
		$this->load->model('NumberPhoneModel');
		if ($this->NumberPhoneModel->deleteNumberPhoneByID($id)) {
			$test_alert = "<script type='text/javascript'>alert('削除できました。');</script>";
			echo $test_alert;
		}else{
			$test_alert = "<script type='text/javascript'>alert('エラーが発生しました。');</script>";
			echo $test_alert;
		}
	}
}

/* End of file ListNumberPhoneController.php */
/* Location: ./application/controllers/ListNumberPhoneController.php */