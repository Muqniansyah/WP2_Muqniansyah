<?php
class Matakuliah extends CI_Controller {
    public function index() {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak() {
        // Rule nya berupa required dan min_length[3] yang artinya jika required maka harus diisi. Sedangkan min_length[3] maka minimal diisi 3 digit. 
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min_lenght' => 'Kode terlalu pendek'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            // jika data tidak benar
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
?>    

