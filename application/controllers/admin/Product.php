<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->library('Upload_library');
	}

	public function index()
	{
		if ($this->input->post('dellCheck')) {
			$checkBox = $this->input->post('checkbox');
			$id_del = implode(", ", $checkBox);
			$input_dels['where_in'] = array('id', $checkBox);
			if($this->Product_model->del_rules($input_dels)){
				$this->session->set_flashdata('message', 'Xóa thành công! ID: ' . $id_del);
                redirect(admin_url('product'));
			}else{
				$this->session->set_flashdata('message', 'Xóa thất bại! ID: ' . $id_del);
                redirect(admin_url('product'));
			}
		}

		
		$feild = 'products.id, products.title, products.order_, products.status, products.image, products.view, products.create_at, category.title as title_category';
		$input['join'] = array(
		 	array('category', 'category.id = products.category_id')
		);
		$products = $this->Product_model->get_list($input, $feild);
		// pre($products);
		$this->data['title'] = "Quản lý bài viết";
		$this->data['products'] = $products;
		$this->data['add'] = "product/add";
		$this->data['temp'] = 'admin/product/index';
		$this->load->view('admin/main', $this->data, FALSE);
	}

	public function add(){
		if($this->input->post()){
			$path = './public/images/product/';
			$image = $this->upload_library->upload($path, 'image');
			if(!is_array($image)){
				$input['image'] = 'noImage.jpg';
			}else{
				$input['image'] = $image['file_name'];
			}
			$input['title'] = $this->input->post('title');
			$input['description'] = $this->input->post('description');
			$input['detail'] = $this->input->post('detail');
			$input['category_id'] = $this->input->post('category_id');
			$input['tags'] = $this->input->post('tags');
			$input['view'] = 0;
			$input['slug'] = $this->slug($this->input->post('title'));
			$input['create_at'] = $this->get_date();

			if($this->Product_model->create($input)){
				$this->session->set_flashdata('message', 'Thêm mới thành công!');
                redirect(admin_url('product'));
			}else{
				$this->session->set_flashdata('message', 'Thêm mới thất bại!');
                redirect(admin_url('product'));
			}
		}

		$array['where'] = array('parent_id' => 0);
		$categories = $this->Category_model->get_list($array);
		$this->data['categories'] = $categories;
		$this->data['title'] = 'Thêm mới bài viết';
		$this->data['temp'] = 'admin/product/add';
		$this->load->view('admin/main', $this->data, FALSE);
	}
	function edit($id)
	{
		$product = $this->Product_model->get_info($id);
		$this->data['product'] = $product;
		if(!$id || !is_numeric($id) ){
			redirect(admin_url('product'));
			exit();
		}
		if($this->input->post()){
			$path = './public/images/product/';
			$image = $this->upload_library->upload($path, 'image');
			if(is_array($image)){
				if(file_exists($path . $product->image)){
					unlink($path . $product->image);
				}
				$input['image'] = $image['file_name'];
			}
			
			$input['title'] = $this->input->post('title');
			$input['description'] = $this->input->post('description');
			$input['detail'] = $this->input->post('detail');
			$input['category_id'] = $this->input->post('category_id');
			$input['tags'] = $this->input->post('tags');
			$input['view'] = 0;
			$input['slug'] = $this->slug($this->input->post('title'));
			// pre($input);
			if($this->Product_model->update($id,$input)){
				$this->session->set_flashdata('message', 'Update thành công!');
                redirect(admin_url('product'));
			}else{
				$this->session->set_flashdata('message', 'Update thất bại!');
                redirect(admin_url('product'));
			}
		}

		$array['where'] = array('parent_id' => 0);
		$categories = $this->Category_model->get_list($array);
		$this->data['categories'] = $categories;
		$this->data['temp'] = 'admin/product/edit';
		$this->load->view('admin/main', $this->data, FALSE);

	}

	function del($id)
	{
		if(!$id){
			redirect(admin_url('product'));
			exit();
		}else{
			if($this->Product_model->delete($id)){
				$this->session->set_flashdata('message', 'Xóa thành công! ID: ' . $id);
                redirect(admin_url('product'));
			}else{
				$this->session->set_flashdata('message', 'Xóa thất bại! ID: ' . $id);
                redirect(admin_url('product'));
			}
		}
	}
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */