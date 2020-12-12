<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$controllers = $this->uri->segment(1);
		$message = $this->session->flashdata('message');
        $this->data['message'] = $message;
		switch ($controllers) {
			case 'admin':
				$this->check_login_admin();
				break;
			
			default:
				// code...
				$this->data['info_game'] = $this->get_info_game();
				$this->data['categories'] = $this->get_categories();
				break;
		}
		
	}

	private function get_info_game(){
		$this->load->model('Game_model');
		$info_game = $this->Game_model->get_row();
		return $info_game;
	}
	private function get_categories(){
		$this->load->model('Category_model');
		$array['where'] = array('parent_id' => 0, 'status' => '1');
		$array['where_in'] = array('id', array(1,2,3));
		$array['limit'] = array('4' ,'0'); 
		$categories = $this->Category_model->get_list($array);
		return $categories;
	}
	private function check_login_admin(){
		$controllers = $this->uri->segment(2);
		$controllers = strtolower($controllers);
		$login = $this->session->userdata('login');
		if(!$login && $controllers != 'login'){
			redirect(admin_url('login'),'refresh');
		}
		if($login && $controllers == 'login'){
			redirect(admin_url('home'),'refresh');
		}
	}
	private function check_login_nguoi_dung(){
		$controllers = $this->uri->segment(2);
		$controllers = strtolower($controllers);
		$nguoi_dung = $this->session->userdata('nguoi_dung');
		if(!empty($nguoi_dung)){
			$this->data['nguoi_dung'] = $this->session->userdata('nguoi_dung');
			if ($controllers == 'dangnhap' || $controllers == 'dangky') {
				redirect(base_url());
			}
		}
	}
	protected function get_date()
    {
        return date('Y/m/d H:i:s');
        // return now(); 
    }
    protected function slug($str = '')
    {
        $str = trim(strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
	    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
	    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
	    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
	    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
	    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
	    $str = preg_replace('/(đ)/', 'd', $str);
	    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
	    $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
    protected function get_ip(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
}

/* End of file My_Controller.php */
/* Location: ./application/controllers/My_Controller.php */