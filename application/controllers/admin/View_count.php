<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View_count extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ViewCount_model');
		$this->load->model('Product_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$this->data['data_view'] = array();
		$this->data['products'] = $this->Product_model->get_list();
		$this->data['categories'] = $this->Category_model->get_list();
		if($this->input->post()){
			$from = date('Y-m-d', strtotime($this->input->post('txtFrom')));
		    $to = date('Y-m-d', strtotime($this->input->post('txtTo')));
		    $id_product = $this->input->post('id_product');
		    $thiet_bi = $this->input->post('thiet_bi');
		    $type = $this->input->post('type');
		    $dateStart = date_create(" " . $from . " ");
		    $dateEnd = date_create(" " . $to . " ");
		    $diff = date_diff($dateStart, $dateEnd);
		    // echo $go;
		    $go = $diff->format("%a");
		    $this->data['go'] = $go;
		    if($go == 0){
		    	$this->data['data_view'] = $this->get_view_by_hour($from, $id_product, $type);
		    }else{
		    	$this->data['data_view'] = $this->get_view_by_day($from, $to, $id_product, $type);
		    }
			
		}
		$this->data['title'] = "Thống kê lượt view";
		$this->data['temp'] = 'admin/view/index';
		$this->load->view('admin/main', $this->data, FALSE);
	}

	private function get_view_by_hour($dateStart, $id_product = 0, $type = 0){
		$where = '';
		if($id_product != 0){
			$where .= "AND id_product = '$id_product'";
		}
		if($type != 0){
			$where .= "AND type = '$type'";
		}
		$query = "SELECT 
					  COUNT(id) AS total,
					  DATE_FORMAT(create_at, '%H') AS `time` 
					FROM
					  view_count 
					WHERE DATE(create_at) = '$dateStart' $where 
					GROUP BY DATE_FORMAT(create_at, '%H')";
		$data = $this->ViewCount_model->query($query);
		return $data;
	}
	private function get_view_by_day($dateStart, $dateEnd, $id_product = 0, $type = 0){
		$where = '';
		if($id_product != 0){
			$where .= "AND id_product = '$id_product'";
		}
		if($type != 0){
			$where .="AND type = '$type'";
		}
		$query = "SELECT COUNT(id) AS total, DATE(create_at) As `time` FROM view_count WHERE DATE(create_at) >= '$dateStart' AND DATE(create_at) <= '$dateEnd' $where GROUP BY DATE(create_at) ASC";
		// echo $query;
		$data = $this->ViewCount_model->query($query);
		return $data;
	}
}

/* End of file View_count.php */
/* Location: ./application/controllers/View_count.php */