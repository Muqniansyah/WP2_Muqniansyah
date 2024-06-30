<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HasilController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        // Ambil data form dari tabel sementara
        $query = $this->db->get('temporary_data');
        $data['hasil'] = $query->result_array();
        $this->load->view('view_hasil', $data);
    }
}
?>
