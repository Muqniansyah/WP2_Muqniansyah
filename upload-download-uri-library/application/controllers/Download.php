<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        // meload helper
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('v_download');
	}

	public function lakukan_download(){				
        // force_download() adalah function yang sudah di sediakan oleh codeigniter untuk membuat aksi download.
		force_download('gambar/poto.jpg',NULL);
	}	

	// jalankan dengan http://localhost/WP2_Muqniansyah/upload-download-uri-library/download
}