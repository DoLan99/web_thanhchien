<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Slides_model');
		$this->load->library('Mobile_Detect');

	}
	public function download()
	{
		$detect = new Mobile_Detect();
		if($detect->isAndroidOS())
		{
			redirect('https://play.google.com/store/apps/details?id=com.thanhchien3q.congthanh');
		}else if($detect->isiOS())
		{
			redirect('https://apps.apple.com/us/app/th%C3%A0nh-chi%E1%BA%BFn-mobile/id1513122231');
		}else{
		    $this->data['temp'] = 'site/home/index1';
			$this->load->view('site/layout1', $this->data);
		}
		
	}
	public function index()
	{
		$this->data['seo'] = $this->get_seo();
		$this->data['slides'] = $this->get_slides();
		$this->data['tin_moi_s'] = $this->tin_moi();
		$this->data['tin_tuc_s'] = $this->tin_tuc_su_kien('tin-tuc');
		$this->data['su_kien_s'] = $this->tin_tuc_su_kien('su-kien');
	    $this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}
	
	private function tin_moi(){
		$feild = 'products.id, products.title, products.slug, products.order_, products.status, products.image, products.view, products.create_at, category.title as title_category, category.slug as slug_category';
		$input['join'] = array(
			array('category', 'category.id = products.category_id')
		);
		$input['where'] = array('products.status' => '1');
		$input['where_in'] = array('category.slug', array('tin-tuc', 'su-kien'));

		$input['limit'] = array(5, 0);
		$tin_moi = $this->Product_model->get_list($input,$feild);
		return $tin_moi;
	}
	private function tin_tuc_su_kien($slug){
		$feild = 'products.id, products.title, products.slug, products.order_, products.status, products.image, products.view, products.create_at, category.title as title_category';
		$input['join'] = array(
			array('category', 'category.id = products.category_id')
		);
		$input['where'] = array('products.status' => '1', 'category.slug' => $slug);

		$input['limit'] = array(5, 0);
		$tin_tuc_su_kien = $this->Product_model->get_list($input,$feild);
		return $tin_tuc_su_kien;
	}
	private function get_slides(){
		$input['where'] = array('status' => '1');
		$input['limit'] = array(5, 0);
		$slides = $this->Slides_model->get_list($input);
		return $slides;
	}
	private function get_seo(){
		$seo = array(
			'title' => 'Game chiến thuật mới - Bảng xếp hạng đua TOP chiến lực nhận xe tay ga SH',
			'author' => "Game chiến thuật mới",
			'description' => "Game chiến thuật mới, game hot nhât VN",
			'generator' => "Game chiến thuật mới",
			//site
			'property' => array(
				'site_name' => "Game chiến thuật mới",
				'type' => 'article',
				'url' => base_url(),
				'description' => "Game chiến thuật đỉnh cao",
				'image' => 'image share'
			),

			//google
			'itemprop' => array(
				'name' => 'Bảng xếp hạng đua TOP chiến lực nhận xe tay ga SH',
				'description' => 'Game chiến thuật Tam Quốc đỉnh cao. Bước lên con đường trở thành Đế Vương với vô số tính năng Hot Công thành chiến, Săn boss thế giới, Mỹ Nữ, Chiến đấu liên server',
				'image' => 'image share'
			),

		);
		return $seo;
	}
}
