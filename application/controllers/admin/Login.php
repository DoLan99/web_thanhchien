<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');
		if ($this->input->post()) {
			$this->form_validation->set_rules('login', 'login', 'callback_check_login');
			if ($this->form_validation->run()) {
				$this->session->set_userdata('login', true);
				redirect(base_url('admin/home'));
			}
		}

		$this->load->view('admin/login/index');
	}

    /*
     * Kiem tra username va password co chinh xac khong
     */
    public function check_login()
    {
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    	$password = md5($password);
    	$this->load->model('admin_model');
    	$where = array('username' => $username, 'password' => $password);
    	if ($this->Admin_model->check_exists($where)) {
    		$this->load->model('admin_model');
    		$input = array();
    		$input['where']['username'] = $username;
    		$admin = $this->Admin_model->get_list($input, '', '');
    		$this->session->set_userdata('admin', $admin[0]);
    		return true;
    	}
    	$this->form_validation->set_message(__FUNCTION__, 'Sai Username hoặc Password !!!');
    	return false;
    }

    

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */