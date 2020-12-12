<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DieuKhoan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Web_model');
	}

	public function index()
	{
		$type = 'dieu-khoan';
		$input['where'] = array('type' => $type, 'status' => 1);
		$dieuKhoan = $this->Web_model->get_row($input);
		// pre($dieuKhoan);
		$this->data['dieu_khoan'] = $dieuKhoan;
		$this->data['temp'] = 'site/dieukhoan/index';
		$this->load->view('site/layout', $this->data);
	}

}

/* End of file DieuKhoan.php */
/* Location: ./application/controllers/DieuKhoan.php */