
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Category_model');
	}

	public function index($slug_category, $slug_product)
	{
		$feild = 'products.id, products.title, products.category_id, products.slug, products.detail, products.tags, products.order_, products.status, products.image, products.view, products.create_at, category.title as title_category, category.slug as slug_category';
		$input['join'] = array(
			array('category', 'category.id = products.category_id')
		);
		$input['where'] = array('products.status' => '1','products.slug'=>$slug_product);

		$product_detail = $this->Product_model->get_row($input,$feild);
		// pre($product_detail);
		
		if(!isset($product_detail->id)){
			$this->output->set_status_header('404');
			$this->output->set_status_header('404');
			$this->data['temp'] = 'site/site404';
			$this->load->view('site/layout1', $this->data);
		}

		try {
			$this->update_view($product_detail->id, $product_detail->category_id,  $product_detail->view);
		} catch (Exception $e) {
			
		}

		$this->data['slug_category'] = $slug_category;
		$this->data['title_category'] = $product_detail->title_category;
		$this->data['product_detail'] = $product_detail;
		$this->data['list_products'] = $this->get_list($slug_category, $slug_product);
		$this->data['temp'] = 'site/detail/index';
		$this->load->view('site/layout1', $this->data);
	}

	private function get_list($slug_category, $slug_product){
		$limit = 4;
		$start = 0;
		$feild = "products.id, products.title, products.slug, products.detail, products.tags,, products.order_, products.status, products.image, products.view, DATE_FORMAT(products.create_at, '%d/%m/%Y') as create_at, category.title as title_category, category.slug as slug_category";
		$input['join'] = array(
			array('category', 'category.id = products.category_id')
		);
		$input['where'] = array('products.status' => '1' ,'category.slug' => $slug_category);
		$input['where_not_in'] = array('products.slug', array($slug_product));
		$input['limit'] = array($limit, $start);
		$data = $this->Product_model->get_list($input,$feild);
		return $data;
	}

	private function update_view($id_product, $id_category, $view = 0){
		$view = $view + 1;
		$input['view'] = $view;
		$where = array('id' => $id_product);
		$this->Product_model->update_rule($where,$input);

		$this->load->model('ViewCount_model');
		$input_insert = array();
		$input_insert['id_product'] = $id_product;
		$input_insert['id_category'] = $id_category;
		$input_insert['ip'] = $this->get_ip();
		$input_insert['create_at'] = $this->get_date();
		$this->ViewCount_model->create($input_insert);
	}

	

}

/* End of file Detail.php */
/* Location: ./application/controllers/Detail.php */