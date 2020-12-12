<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userad extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function change_pass()
	{
		$this->data['title'] = "Quản lý bài viết";
		$this->data['products'] = $products;
	}

}

/* End of file Userad.php */
/* Location: ./application/controllers/Userad.php */