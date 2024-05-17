<?php

class Upload extends CI_Controller {
    function __construct() {
        parent::__construct();
        // meload helper
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        // tampilkan sebuah view v_upload, pada view v_upload ini untuk membuat form upload nya.
        $this->load->view('v_upload', array('error' => ' '));
    }

    public function aksi_upload() {
        // pengaturan upload file pada codeigniter.
        $config['upload_path'] = './gambar/'; // pengaturan kemana file akan di upload. yaitu kedalam folder ‘gambar’ dalam directory root codeigniter. 
        $config['allowed_types'] = 'gif|jpg|png'; // file yang di perbolehkan
        $config['max_size'] = '500'; // maksimal ukuran
        $config['max_width'] = '2000'; //lebar maksimal
        $config['max_height'] = '2000'; //tinggi maksimal

        // memanggil library upload codeigniter dengan menggunaan pengaturan yang sudah di buat tadi pada variabel $config.
        $this->load->library('upload', $config);

        // melakukan aksi upload.
        if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('v_upload_sukses', $data);
		}
    }
}

// jalankan dengan http://localhost/WP2_Muqniansyah/upload-download-uri-library/upload

?>