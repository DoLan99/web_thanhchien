<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Game_model');
		$this->load->library('Upload_library');
	}

	public function index()
	{
		$input['limit'] = array(1,0);
		$game = $this->Game_model->get_row($input);
		// pre($game);

		if($this->input->post()){
			
			$path_upload = './public/file/';
			$dataIcon = $this->upload_library->upload($path_upload, 'icon');
			$icon = $game->icon;
			if(is_array($dataIcon)){
				if(file_exists($path_upload_icon . $game->icon)){
					unlink($path_upload_icon . $game->icon);
				}
				$icon = $dataIcon['file_name'];
			}
			//Upload file
			$path_upload = './public/file/';
			$txtLinkAndroid = $this->input->post('txtLinkAndroid');
			$txtLinkIos = $this->input->post('txtLinkIos');
			$txtLinkOrther = $this->input->post('txtLinkOrther');


			// $path_upload_android = $path_upload . 'android/';
			$dataAndroid = $this->upload_library->upload_file_game($path_upload, 'linkAndroid');
			$linkAndroid = is_array($dataAndroid) ? public_url() . 'file/' . $dataAndroid['file_name'] : $txtLinkAndroid;


			// $path_upload_ios = $path_upload . 'ios/';
			$dataIos = $this->upload_library->upload_file_game($path_upload, 'linkIos');
			$linkIos = is_array($dataIos) ? public_url() . 'file/' .$dataIos['file_name'] : $txtLinkIos;


			// $path_upload_orther = $path_upload . 'orther/';
			$dataOrther = $this->upload_library->upload_file_game($path_upload, 'linkWeb');
			$linkOrther = is_array($dataOrther) ? public_url() . 'file/' . $dataOrther['file_name'] : $txtLinkOrther;


			
			
			$name = $this->input->post('name');
			$data_update = array(
				'name' => $name,
				'icon' => $icon,
				'linkAndroid' => $linkAndroid,
				'linkIos' => $linkIos,
				'linkOrther' => $linkOrther,
			);
			// pre($data_update);

			if($this->Game_model->update($game->id,$data_update)){
				$this->session->set_flashdata('message', 'Update thành công!');
				redirect(admin_url('game'));
			}else{
				$this->session->set_flashdata('message', 'Update thất bại!');
				redirect(admin_url('game'));
			}
		}
		$this->data['game'] = $game;
		$this->data['title'] = "Quản lý thông tin game";
		$this->data['temp'] = 'admin/game/index';
		$this->load->view('admin/main', $this->data, FALSE);
	}

}

/* End of file Game.php */
/* Location: ./application/controllers/Game.php */