<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSiswa extends CI_Model {   
    public function simpanData($data) {
        //untuk memasukan data baru ke table siswa di dtabse dlemas, datanya diambil dari $data
        $this->db->insert('siswa',$data);
        // digunakan untuk mengembalikan ID dari baris yang baru saja disisipkan. 
        // Ini adalah ID yang secara otomatis dihasilkan oleh basis data (misalnya, kolom auto-increment dalam MySQL) untuk baris yang baru saja ditambahkan. 
        return $this->db->insert_id();
    }

    // method yang digunakan untuk mengambil semua data siswa dari tabel 'siswa' dalam database.
    public function alldata(){
        //  mengembalikan semua data siswa dari tabel 'siswa' dalam bentuk array asosiatif.
        return $this->db->get('siswa')->result_array();
    }
}