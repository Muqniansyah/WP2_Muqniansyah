<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Tampildata extends CI_Controller {
    function __construct() {
        parent::__construct();
        // memanggil model ModelData dengan syntax $this->load->model(‘ModelData’) 
        $this->load->model('ModelData');
    }

    function user() {
        // $this->ModelData->ambil_data() untuk memanggil function ambil_data() pada model ModelData.
        // fungsi result() berguna untuk menjadikannya array.
        $data['user'] = $this->ModelData->ambil_data()->result();
        $this->load->view('v_user', $data);
    }
} 

// jalankan dengan http://localhost/WP2_Muqniansyah/menghubungkan-database/tampildata/user

?>