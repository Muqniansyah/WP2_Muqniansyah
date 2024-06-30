<?php 
class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('crud_model');
        $this->load->helper('url');
	}

	function index(){
		$data['peserta'] = $this->crud_model->tampil_data()->result();
		$this->load->view('view_tampil',$data);
	}

    // fungsi tambah / input data
    function tambah(){
		$this->load->view('view_input');
	}

    // method atau function untuk meng-handle inputan pada form
    function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->crud_model->input_data($data,'peserta');
		redirect('crud/index');
	}

    // fungsi hapus
    function hapus($id){
		$where = array('id' => $id);
		$this->crud_model->hapus_data($where,'peserta');
		redirect('crud/index');
	}

    // fungsi edit
    function edit($id){
        $where = array('id' => $id);
        $data['peserta'] = $this->crud_model->edit_data($where,'peserta')->result();
        $this->load->view('view_edit',$data);
    }

    // membuat aksi yang menghandle update data 
    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $where = array(
            'id' => $id
        );

        $this->crud_model->update_data($where,$data,'peserta');
        redirect('crud/index');
    }
}