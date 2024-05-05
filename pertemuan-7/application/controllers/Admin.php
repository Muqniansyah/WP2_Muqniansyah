<?php
class Admin extends CI_Controller {
    public function index() {
        $this->load->view('view-form');
    }

    public function cetak() {
        // Validasi Data
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', [
            'required' => 'Nama Siswa Harus diisi',
        ]);

        $this->form_validation->set_rules('nis', 'Nis Siswa', 'required|min_length[8]', [
            'required' => 'Nis Siswa Harus diisi',
            'min_lenght' => 'Nis Siswa pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('tglhir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('tmptlhir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');

        if ($this->form_validation->run() != true) {
            // jika data tidak benar
            $this->load->view('view-form');
        } else {
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
            $this->load->view('view-data', $data);

            // Panggil model untuk menyimpan data
            $insert_id = $this->ModelSiswa->simpanData($data);

            if ($insert_id) {
                echo "<p style='text-align: center; padding-top: 20px;'>Berhasil menyimpan data dengan ID: $insert_id </p>";
            } else {
                echo "<p style='text-align: center; padding-top: 20px;'>Gagal menyimpan data.</p>";
            }
        }
    }
}
?>