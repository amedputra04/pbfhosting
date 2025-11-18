<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jadwal_bimbingan extends CI_Model {

    public function view_data_jadwal_bimbingan() {
        $this->db->select('*');
        $this->db->from('jadwal_bimbingan');
        $this->db->join('peserta', 'peserta.kd_peserta = jadwal_bimbingan.kd_peserta');
        return $this->db->get()->result_array();
    }

    public function hapus_jadwal_bimbingan($kdjadwal) {
        $this->db->where('kdjadwal', $kdjadwal);
        $this->db->delete('jadwal_bimbingan');
    }

     public function insert_data($data)
    {
        $this ->db->insert('jadwal_bimbingan',$data);
    }

    public function edit_data_jadwal_bimbingan($where,$data)
    {
        $this ->db->where($where);
        $this ->db->update('jadwal_bimbingan',$data);
    }

    public function get_jadwal_bimbingan_by_kdjadwal($kdjadwal)
{
    $this->db->from('jadwal_bimbingan');
    $this->db->join('peserta', 'peserta.kd_peserta = jadwal_bimbingan.kd_peserta');
    $this->db->where('kdjadwal', $kdjadwal);
    return $this->db->get()->row_array();
}


}
?>
