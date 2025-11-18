<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_peserta extends CI_Model {

    public function view_data_peserta()
    {
        $query = $this->db->get('peserta');
        return $query->result_array();
    }

    public function hapus_peserta($kd_peserta)
    {
    	$this->db->where('kd_peserta',$kd_peserta);
    	$this->db->delete('peserta');
    }
    
    public function input_data_peserta($data)
    {
        $this->db->insert('peserta',$data);
    }

    public function get_data_peserta($kd_peserta)
    {
        $this->db->where('kd_peserta',$kd_peserta);
        $query = $this->db->get('peserta');
        return $query->row_array();
    }

    public function edit_data_peserta($where, $data)
    {
        $this->db->where($where);
        $this->db->update('peserta', $data);
    }
             	
}
?>