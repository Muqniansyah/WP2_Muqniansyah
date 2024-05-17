<!-- kegunaan membuat library sendiri di codeigniter adalah terkadang kita banyak menuliskan syntax yang sama secara berulang2. 
tetapi dengan membuat library kita dapat dengan mudah memanggil function yang sudah kita buat sendiri dalam library yang kita buat. -->

<?php 
 
class create_library{
 
	function nama_saya(){
		echo "Nama saya adalah Muqniansyah !";
	}
 
	function nama_kamu($nama){
		echo "Nama kamu adalah ". $nama ." !";
	}
}

//  untuk mencoba library buatan sendiri ini siapkan sebuah controller untuk memanggil library ini. 