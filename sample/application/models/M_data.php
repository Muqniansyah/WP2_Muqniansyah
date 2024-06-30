<?php 

class M_data extends CI_Model{
	// function data yang berguna untuk mengambil data user dari record ke berapa sampai record ke berapa sesuai data yang di kirim melalui parameter pada function.
	function data($number,$offset){
		return $query = $this->db->get('user',$number,$offset)->result();		
	}

	// function jumlah_data bertujuan untuk mengambil jumlah seluruh record.
	function jumlah_data(){
		return $this->db->get('user')->num_rows();
	}
}