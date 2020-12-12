<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Web_model');
	}

	public function dieukhoan()
	{
		$input['limit'] = array(1,0);
		$input['where'] = array('type' => 'dieu-khoan');
		$dieu_khoan = $this->Web_model->get_row($input);

		if($this->input->post()){
			
			$data_update = array(
				'title' => $this->input->post('title'),
				'content' => trim($this->input->post('content')),
				'status' => $this->input->post('status')
			);
			if($this->Web_model->update($dieu_khoan->id, $data_update)){
				$this->session->set_flashdata('message', 'Update thành công!');
				redirect(admin_url('web/dieukhoan'));
			}else{
				$this->session->set_flashdata('message', 'Update thất bại!');
				redirect(admin_url('web/dieukhoan'));
			}
		}
		$this->data['dieu_khoan'] = $dieu_khoan;
		$this->data['title'] = "Quản lý điều khoản";
		$this->data['temp'] = 'admin/web/dieukhoan';
		$this->load->view('admin/main', $this->data, FALSE);
	}

}

/* End of file Dieukhoan.php */
/* Location: ./application/controllers/Dieukhoan.php */