<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSiswa extends CI_Model {
    public function simpanData($data) {
        // Simpan data ke dalam tabel 'siswa'
        $this->db->insert('siswa', $data);

        // Kembalikan hasil operasi insert
        //  digunakan untuk mendapatkan ID dari record yang baru saja dimasukkan ke dalam database
        return $this->db->insert_id();



    }
}
