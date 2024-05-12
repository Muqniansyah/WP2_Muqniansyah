<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelSiswa');
    }

    public function index() {
        $this->load->view('view-form');
    }

    public function cetak() {
         // Validasi Data
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nis', 'Nis Siswa', 'required|min_length[8]');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('tglhir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tmptlhir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');

        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, tampilkan kembali form
            $this->load->view('view-form');
        } else {
            // Ambil data dari form
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tglhir' => $this->input->post('tglhir'),
                'tmptlhir' => $this->input->post('tmptlhir'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
            ];

            // Simpan data ke database
            $insert_id = $this->ModelSiswa->simpanData($data);
            if ($insert_id) {
                // Jika penyimpanan berhasil, ambil semua data siswa
                $siswa_list = $this->ModelSiswa->alldata();

                // Tampilkan view-data dengan data siswa yang baru saja ditambahkan
                $this->load->view('view-data',['siswa_list' => $siswa_list]);
            } else {
                // Jika penyimpanan gagal
                echo "<p style='text-align: center; padding-top: 20px;'>Gagal menyimpan data.</p>";
            }
        }
    }
}

