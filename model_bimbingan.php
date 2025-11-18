<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bimbingan extends CI_Model {

    public function view_data_bimbingan()
    {
        $query = $this->db->get('bimbingan');
        return $query->result_array();
    }

    public function hapus_bimbingan($kd_bimbingan)
    {
    	$this->db->where('kd_bimbingan',$kd_bimbingan);
    	$this->db->delete('bimbingan');
    }
    
    public function input_data_bimbingan($data)
    {
        $this->db->insert('bimbingan',$data);
    }

    public function get_data_bimbingan($kd_bimbingan)
    {
        $this->db->where('kd_bimbingan',$kd_bimbingan);
        $query = $this->db->get('bimbingan');
        return $query->row_array();
    }

    public function edit_data_bimbingan($where, $data)
    {
        $this->db->where($where);
        $this->db->update('bimbingan', $data);
    }
             	
}
?>