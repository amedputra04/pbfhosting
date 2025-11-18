<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_isi2 extends CI_Model
{
    public function insert_data($data)
    {
        $this->db->insert('isi2', $data);
    }

     public function get_isi2_by_kdjadwal($kdjadwal)
{
    $this->db->from('isi2');
    $this->db->join('bimbingan', 'bimbingan.kd_bimbingan = isi2.kd_bimbingan');
    $this->db->where('kdjadwal', $kdjadwal);
    return $this->db->get()->result_array();
}
}
