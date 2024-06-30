<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $this->load->view('view_form');
    }

    public function simpan_form() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_service' => $this->input->post('jenis_service')
        );
    
        // Simpan data ke dalam tabel sementara
        $this->db->insert('temporary_data', $data);
        
        // Salin data dari tabel sementara ke tabel bengkel
        $this->db->query('INSERT INTO bengkel (nama, jenis_service) SELECT nama, jenis_service FROM temporary_data');
        
        // Redirect kembali ke halaman form
        redirect('FormController');
    }
    

    
}
?>
