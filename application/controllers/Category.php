<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Category_model');
	}

	public function index($slug = '', $page = 1)
	{
		
		if($slug == 'tin-moi'){
			$this->tin_moi($slug, $page);
		}else{

			if(!$this->Category_model->check_exists(array('slug' => $slug))){
				$this->output->set_status_header('404');
				$this->data['temp'] = 'site/site404';
				$this->load->view('site/layout1', $this->data);
			}
			
			$this->khac_tin_moi($slug, $page);
		}
		
	}
	private function khac_tin_moi($slug, $page){
		// PHAN TRANG

		$limit = 10;
		$start = ($page - 1) * $limit;
		$feild = 'products.id, products.title, products.slug, products.order_,
		products.description, products.status, products.image, products.view, products.create_at, category.title as title_category';
		$input['join'] = array(
		 	array('category', 'category.id = products.category_id')
		);
		$input['where'] = array('products.status' => '1', 'category.slug' => $slug);
		$total_products = $this->Product_model->get_total($input);
		$this->data['number_page'] = ceil($total_products/$limit);

		// END PHAN TRANG

		$input['limit'] = array($limit, $start,);
		$products_detail = $this->Product_model->get_list($input,$feild);
		$this->data['page'] = $page;
		$this->data['slug'] = $slug;
		$this->data['products_by_category'] = $products_detail;
		// pre($this->data['products_by_category']); 
		$this->data['temp'] = 'site/category/index';
		$this->load->view('site/layout1', $this->data);
	}
	private function tin_moi($slug, $page){

		$page = 1;
		$limit = 10;
		$start = ($page - 1) * $limit;
		$feild = 'products.id, products.title, products.slug, products.order_,
		products.description, products.status, products.image, products.view, products.create_at, category.title as title_category';
		$input['join'] = array(
		 	array('category', 'category.id = products.category_id')
		);
		$input['where_in'] = array('category.slug', array('tin-tuc', 'su-kien'));
		$input['where'] = array('products.status' => '1');
		$total_products = $this->Product_model->get_total($input);
		$this->data['number_page'] = ceil($total_products/$limit);

		// END PHAN TRANG

		$input['limit'] = array($limit, $start,);
		$products_detail = $this->Product_model->get_list($input,$feild);

		$this->data['number_page'] = 1;
		$this->data['page'] = $page;
		$this->data['slug'] = $slug;
		$this->data['products_by_category'] = $products_detail;
		// pre($this->data['products_by_category']); 
		$this->data['temp'] = 'site/category/index';
		$this->load->view('site/layout1', $this->data);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */