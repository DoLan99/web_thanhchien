<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends MY_Model {

	public $table = 'category';
	// Order mac dinh (VD: $order = array('id', 'desc'))
	var $order = array('order_', 'ASC');
	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */