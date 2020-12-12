<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('ViewCount_model');
	}

	public function index()
	{
		$this->data['total_view_day'] = $this->get_total_view_day();
		$this->data['total_products'] = $this->get_total_products();
		$this->data['temp'] = 'admin/home/index';
		$this->load->view('admin/main', $this->data, FALSE);
	}
	private function get_total_view_day(){
		$input['where'] = array('DATE(create_at)' => date('Y/m/d'));
		$total = $this->ViewCount_model->get_total($input);
		return $total;
	}
	private function get_total_products(){
		$total = $this->Product_model->get_total();
		return $total;
	}
	public function logout() {
        if ($this->session->userdata('login')) {
            $this->session->unset_userdata('admin');
            $this->session->unset_userdata('login');
        }
        redirect(base_url('admin/login'));
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */