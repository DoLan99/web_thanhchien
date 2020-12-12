<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// public function index()
	// {
	// 	$useragent = $_SERVER['HTTP_USER_AGENT'];
	// 	$info = get_browser($useragent);
	// 	// pre($info);
	// }
	public function count_download(){
		if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) 
		{
			$this->load->model('Download_model');
			$input_insert = array();
			$input_insert['name_device'] = '';
			$input_insert['type'] = $this->input->post('type');
			$input_insert['ip'] = $this->get_ip();
			$input_insert['create_at'] = $this->get_date();
			if($this->Download_model->create($input_insert)){
				echo json_encode(1);
			}else{
				echo json_encode(0);
			}
		}else{
			die();
		}
	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */