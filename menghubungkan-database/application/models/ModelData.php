<?php 

class ModelData extends CI_Model {
    function ambil_data() {
        // $this->db->get() di gunakan untuk mengambil data dari database. dan nama table yang ingin di ambil data nya letakkan dalam parameternya
        // syntax return yang berfungsi untuk mengambalikan data yang di tangkap pada controller yang memanggil function ambil_data() ini.
        return $this->db->get('user');
    }
}

?>