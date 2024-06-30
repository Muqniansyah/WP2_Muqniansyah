<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pagination extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
	}
 
	public function index(){
		$this->load->database();
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'pagination/index/';
		$config['total_rows'] = $jumlah_data; // jumlah dari seluruh record.
		$config['per_page'] = 10; // jumlah record yang di tampilkan per halaman
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['user'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('view_pagination',$data);
	}
}