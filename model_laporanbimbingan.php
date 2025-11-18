<?php
class Model_laporanbimbingan extends CI_Model
{
    public function view_data_isi2_laporanbimbingan()
    {
        $this->db->select("*");
        $this->db->distinct('tahun_akademik');
        $this->db->distinct('semester');
        $this->db->from('jadwal_bimbingan');
        $this->db->join('peserta', 'peserta.kd_peserta = jadwal_bimbingan.kd_peserta');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function view_tahun_akademik()
    {
        $this->db->select('distinct (jadwal_bimbingan.tahun_akademik)');
        $this->db->from('jadwal_bimbingan');
        $this->db->order_by('kdjadwal', 'ASC');
        return $this->db->get()->result_array();
    }

    public function view_semester()
    {
        $this->db->select('distinct (jadwal_bimbingan.semester)');
        $this->db->from('jadwal_bimbingan');
        $this->db->order_by('kdjadwal', 'ASC');
        return $this->db->get()->result_array();
    }

    public function get_laporanbimbingan($tahun_akademik, $semester)
    {
        $this->db->select('jadwal_bimbingan.*,peserta.*,isi2.hari_bimbingan,isi2.waktu_bimbingan,isi2.ruang_bimbingan,bimbingan.*');
        $this->db->from('jadwal_bimbingan');
        $this->db->join('peserta', 'peserta.kd_peserta = jadwal_bimbingan.kd_peserta');
        $this->db->join('isi2', 'isi2.kdjadwal = jadwal_bimbingan.kdjadwal');
        $this->db->join('bimbingan', 'bimbingan.kd_bimbingan = isi2.kd_bimbingan');
        $this->db->where('jadwal_bimbingan.tahun_akademik', $tahun_akademik);
        $this->db->where('jadwal_bimbingan.semester', $semester);
        $query = $this->db->get();
        return $query->result_array();
    }
}
