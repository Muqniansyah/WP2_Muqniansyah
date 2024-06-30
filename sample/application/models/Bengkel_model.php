<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bengkel_model extends CI_Model {

    public function simpan_data($data) {
        // Simpan data ke dalam tabel 'bengkel'
        $this->db->insert('bengkel', $data);
    }

    public function ambil_data() {
        // Ambil semua data dari tabel 'bengkel'
        $query = $this->db->get('bengkel');
        return $query->result_array();
    }
}
?>
