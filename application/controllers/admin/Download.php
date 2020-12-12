<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Download_model');
	}

	public function index()
	{
		$this->data['data_download'] = array();
		if($this->input->post()){
			$from = date('Y-m-d', strtotime($this->input->post('txtFrom')));
		    $to = date('Y-m-d', strtotime($this->input->post('txtTo')));
		    $type = $this->input->post('type');
		    $dateStart = date_create(" " . $from . " ");
		    $dateEnd = date_create(" " . $to . " ");
		    $diff = date_diff($dateStart, $dateEnd);
		    // echo $go;
		    $go = $diff->format("%a");
		    $this->data['go'] = $go;
		    if($go == 0){
		    	$this->data['data_download'] = $this->get_view_by_hour($from, $type);
		    }else{
		    	$this->data['data_download'] = $this->get_view_by_day($from, $to, $type);
		    }
			
		}
		$this->data['title'] = "Thống kê lượt click download";
		$this->data['temp'] = 'admin/download/index';
		$this->load->view('admin/main', $this->data, FALSE);
	}

	private function get_view_by_hour($dateStart, $type = 0){
		$where = '';
		if($type != 'all'){
			$where .= "AND type = '$type'";
		}

		$query = "SELECT 
					  COUNT(id) AS total,
					  DATE_FORMAT(create_at, '%H') AS `time` 
					FROM
					  download_count 
					WHERE DATE(create_at) = '$dateStart' $where 
					GROUP BY DATE_FORMAT(create_at, '%H')";
		$data = $this->Download_model->query($query);
		return $data;
	}
	private function get_view_by_day($dateStart, $dateEnd, $type = 0){
		$where = '';
		if($type != 'all'){
			$where .= "AND type = '$type'";
		}
		$query = "SELECT COUNT(id) AS total, DATE(create_at) As `time` FROM download_count WHERE DATE(create_at) >= '$dateStart' AND DATE(create_at) <= '$dateEnd' $where GROUP BY DATE(create_at) ASC";
		// echo $query;
		$data = $this->Download_model->query($query);
		return $data;
	}
}

/* End of file View_count.php */
/* Location: ./application/controllers/View_count.php */