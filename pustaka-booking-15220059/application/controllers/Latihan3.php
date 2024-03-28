<?php

// menggunakan Controller, View dan Model
class Latihan3 extends CI_Controller{
    public function index(){
        echo "Selamat Datang.. selamat belajar Web Programming";
        // $this->load->view('view_latihan3');
    }

    public function penjumlahan($n1, $n2){
        $this->load->model('Model_latihan3');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan3->jumlah($n1, $n2);
        $this->load->view('view_latihan3', $data);
    }
}

?>

<!-- buka di browser : http://localhost/WP2_Muqniansyah/pustaka-booking-15220059/index.php/Latihan3/penjumlahan/2/9 -->