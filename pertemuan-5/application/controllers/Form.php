<?php 
class Form extends CI_Controller {

    function __construct(){
        parent::__construct();
        // memanggil library form_validation
        $this->load->library('form_validation');
    }

    // function index merupakan fungsi yang pertama kali diakses, dan merupakan fungsi default.
    function index() {
        $this->load->view('v_form');
    }

    function aksi() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('konfir_email', 'Konfirmasi Email', 'required');

        if($this->form_validation->run() != false) {
            // jika form yang diisikan benar / tidak salah
            echo "Form validation oke";
        } else {
            $this->load->view('v_form');
        }
    }
}





?>