<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides_model extends MY_Model {

	public $table = 'slides';
	public $order = array('order_', 'ASC');

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file Slides_model.php */
/* Location: ./application/models/Slides_model.php */