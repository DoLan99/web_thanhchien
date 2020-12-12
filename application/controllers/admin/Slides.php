<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slides_model');
		$this->load->library('Upload_library');
	}

	public function index()
	{
		// $input['limit'] = array(3, 0);
		$slides = $this->Slides_model->get_list();
		$this->data['slides'] = $slides;
		$this->data['title'] = "Quản lý carousel";
		$this->data['add'] = "slides/add";
		$this->data['temp'] = 'admin/slides/index';
		$this->load->view('admin/main', $this->data, FALSE);
	}

	public function add(){
		if($this->input->post()){
			$path = './public/images/carousel/';
			$image = $this->upload_library->upload($path, 'image');
			if(!is_array($image)){
				$input['image'] = 'noImage.jpg';
			}else{
				$input['image'] = $image['file_name'];
			}
			$input['name'] = $this->input->post('name');
			$input['link'] = $this->input->post('link');
			$input['order_'] = $this->input->post('order_');
			$input['status'] = $this->input->post('status');
			$input['create_at'] = $this->get_date();

			if($this->Slides_model->create($input)){
				$this->session->set_flashdata('message', 'Thêm mới thành công!');
                redirect(admin_url('slides'));
			}else{
				$this->session->set_flashdata('message', 'Thêm mới thất bại!');
                redirect(admin_url('slides'));
			}
		}

		$this->data['title'] = 'Thêm mới carousel';
		$this->data['temp'] = 'admin/slides/add';
		$this->load->view('admin/main', $this->data, FALSE);
	}
	public function edit($id)
	{
		$slide = $this->Slides_model->get_info($id);
		$this->data['slide'] = $slide;

		if(!$id || !is_numeric($id) ){
			redirect(admin_url('slides'));
			exit();
		}
		if($this->input->post()){
			$path = './public/images/carousel/';
			$image = $this->upload_library->upload($path, 'image');
			if(is_array($image)){
				if(file_exists($path . $slide->image)){
					unlink($path . $slide->image);
				}
				$input['image'] = $image['file_name'];
			}
			
			$input['name'] = $this->input->post('name');
			$input['link'] = $this->input->post('link');
			$input['order_'] = $this->input->post('order_');
			$input['status'] = $this->input->post('status');
			// pre($input);
			if($this->Slides_model->update($id,$input)){
				$this->session->set_flashdata('message', 'Update thành công!');
                redirect(admin_url('slides'));
			}else{
				$this->session->set_flashdata('message', 'Update thất bại!');
                redirect(admin_url('slides'));
			}
		}
		$this->data['title'] = 'Cập nhật carousel';
		$this->data['temp'] = 'admin/slides/edit';
		$this->load->view('admin/main', $this->data, FALSE);

	}

	public function del($id)
	{
		if(!$id){
			redirect(admin_url('slides'));
			exit();
		}else{
			if($this->Slides_model->delete($id)){
				$this->session->set_flashdata('message', 'Xóa thành công! ID: ' . $id);
                redirect(admin_url('slides'));
			}else{
				$this->session->set_flashdata('message', 'Xóa thất bại! ID: ' . $id);
                redirect(admin_url('slides'));
			}
		}
	}
}

/* End of file Slides.php */
/* Location: ./application/controllers/Slides.php */