<?php 
 
class Crud_model extends CI_Model{
	function tampil_data(){
		return $this->db->get('peserta');
	}

    // input data
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    // hapus data
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    // edit data
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    // update data
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}