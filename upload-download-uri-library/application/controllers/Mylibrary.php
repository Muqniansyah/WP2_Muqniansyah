<!-- mencoba library buatan sendiri -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mylibrary extends CI_Controller {
	
	function index(){
        // memanggil atau membuka terlebih dahulu library yang sudah kita buat tadi
		$this->load->library('create_library');

        // menggunakan function/method yang sudah kita buat tadi di dalam library create_library
		$this->create_library->nama_saya();
        echo "<br/>";
        $this->create_library->nama_kamu("remon");
	}

}

// jalankan dengan http://localhost/WP2_Muqniansyah/upload-download-uri-library/Mylibrary/