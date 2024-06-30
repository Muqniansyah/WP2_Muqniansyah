<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller {

	public function index()
	{
		$this->load->model('SearchModel');
		$keyword = $this->input->get('keyword');
		$datas = $this->SearchModel->ambil_data($keyword);
		$data = array(
			'keyword'	=> $keyword,
			'data'		=> $datas
		);
		$this->load->view('view_search',$data);
	}

}