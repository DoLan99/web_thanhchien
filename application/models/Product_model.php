<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends MY_Model {

	public $table = 'products';

	public function __construct()
	{
		parent::__construct();
		
	}
	function get_id()
	{
		$sql="SELECT * FROM products Where category_id=3 and id=27 ";
		$row=$this->db->query($sql);
		return $row->result();
	}

}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */