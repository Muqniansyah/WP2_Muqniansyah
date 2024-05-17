<!-- URI adalah singkatan dari Uniform Resource Identifier. bisa kita bilang URI yang membantu kita dalam mengambil data melalui url codeigniter. 
cara penyebutan uri segment pada codeigniter sendiri misalnya segment 1, segment 2, segment 3 dan seterusnya. -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urisegment extends CI_Controller {
	
	public function warna(){		
		echo "Mobil itu berwarna " . $this->uri->segment('3');
        echo "<br>";

        echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>";		
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>";		
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>";		
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>";		
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>";
		
	}

}

// URI segment codeigniter,  yang di katakan sebagai segment 1 pada codeigniter adalah nama class atau controller yang sedang anda jalankan. segment ke 2 adalah nama method atau function pada dari class/controller anda. dan segment 3 berupa data berbentuk id yang di kirim. 
// jadi segment codeigniter di hitung dari setelah index.php pada codeigniter.

// untuk memberikan penjelasan yang lebih detail berikut ini adalah rumus cara mudah mengerti tentang url codeigniter
// 	http://localhost/nama-folder/index.php/controller/method/id

// untuk mengakses uri segment bisa menggunakan syntax ” $this->uri->segment(‘ urutan segment keberapa ‘)


// jalankan dengan http://localhost/WP2_Muqniansyah/upload-download-uri-library/urisegment/warna/hitam/merah/kuning/