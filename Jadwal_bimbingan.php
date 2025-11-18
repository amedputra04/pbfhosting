<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_bimbingan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_jadwal_bimbingan');
        $this->load->model('model_peserta');
        $this->load->model('model_bimbingan');
        $this->load->model('model_isi2');
    }

    public function index() {
        $data['get_jadwal_bimbingan'] = $this->model_jadwal_bimbingan->view_data_jadwal_bimbingan();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('jadwal_bimbingan', $data);
        $this->load->view('template/footer');

        if (isset($_POST['submit'])) {
            $this->inputdata();
        }
    }

    public function hapus($kdjadwal) {
        $this->model_jadwal_bimbingan->hapus_jadwal_bimbingan($kdjadwal);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data jadwal_bimbingan Berisi2 Dihapus</div>');
        redirect('jadwal_bimbingan');
    }

    public function tambahjadwal_bimbingan()
{
    $this->db->select_max('kdjadwal');
    $datakode = $this->db->get('jadwal_bimbingan')->row_array();
    if ($datakode['kdjadwal'] != null) {
        $nilaikode = substr($datakode['kdjadwal'], 1);
        $kode = (int) $nilaikode;
        $kode+= 1;
        $isi2kode = "J" . str_pad($kode, 4, "0", STR_PAD_LEFT);
    } else {
        $isi2kode = "J001";
    }

    $data = [
        'menu' => 'Tambah peserta',
        'username' => $this->session->userdata('username'),
        'user_role' => $this->session->userdata('user_role'),
        'get_peserta' => $this->model_peserta->view_data_peserta(),
        'get_bimbingan' => $this->model_bimbingan->view_data_bimbingan(),
        'kdjadwal' => $isi2kode,
    ];

    if ($this->input->post("kdjadwal")) {
        $this->__process_tambah($isi2kode);
        die;
    }

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('tambahjadwal_bimbingan', $data);
    $this->load->view('template/footer');
}


private function _rules()
{
    $this->form_validation->set_rules('kdjadwal', 'kdjadwal', 'required|trim|xss_clean');
    $this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required|trim|xss_clean');
    $this->form_validation->set_rules('semester', 'semester', 'required|trim|xss_clean');
    $this->form_validation->set_rules('kd_peserta', 'kd_peserta', 'required|trim|xss_clean');
}

public function __process_tambah()
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->tambahjadwal_bimbingan();
    } else {
        $kdjadwal = $this->input->post('kdjadwal');
        $tahun_akademik = $this->input->post('tahun_akademik');
        $semester = $this->input->post('semester');
        $kd_peserta = $this->input->post('kd_peserta');

        $data = array(
            'kdjadwal' => $kdjadwal,
            'tahun_akademik' => $tahun_akademik,
            'semester' => $semester,
            'kd_peserta' => $kd_peserta
        );

        $this->model_jadwal_bimbingan->insert_data($data, 'jadwal_bimbingan');

        //tambahan untuk masuk ke tabel isi2
        $kd_bimbingan = $this->input->post('kd_bimbingan', true);
        $waktu_bimbingan = $this->input->post('waktu_bimbingan', true);
        $hari_bimbingan = $this->input->post('hari_bimbingan', true);
        $ruang_bimbingan = $this->input->post('ruang_bimbingan', true);
        foreach ($kd_bimbingan as $key => $value) {
            $data = array(
                'kdjadwal' => $kdjadwal,
                'kd_bimbingan' => $kd_bimbingan[$key],
                'waktu_bimbingan' => $waktu_bimbingan[$key],
                'hari_bimbingan' => $hari_bimbingan[$key],
                'ruang_bimbingan' => $ruang_bimbingan[$key]
            );
            $this->model_isi2->insert_data($data);
        }
        //akhir tambahan untuk masuk ke tabel isi2

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data jadwal_bimbingan Berisi2 Disi2mpan!!!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('jadwal_bimbingan');
    }
    }
public function editjadwal_bimbingan ($kdjadwal=0){
    $data['edit'] = $this->model_jadwal_bimbingan->get_jadwal_bimbingan_by_kdjadwal($kdjadwal);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('editjadwal_bimbingan',$data);
    $this->load->view('template/footer');

    if(isset($_POST['submit']))
    { $this->_prosesedit();}
}

private function _prosesedit(){
    $kdjadwal = $this->input->post('kdjadwal');
    $tahun_akademik = $this->input->post('tahun_akademik');
    $semester = $this->input->post('semester');
    $kd_peserta = $this->input->post('kd_peserta');
    $data = array(
        'kdjadwal' => $kdjadwal,
        'tahun_akademik' => $tahun_akademik,
        'semester' => $semester,
        'kd_peserta' => $kd_peserta
    );

    $where = array('kdjadwal' => $kdjadwal);
    $this->model_jadwal_bimbingan->edit_data_jadwal_bimbingan($where, $data);
    $this->session->set_flashdata('pesan','<div class="alert alert-success" roel="alert">Data Nota Jual Berhasil Diubah</div>');
    redirect('jadwal_bimbingan');
}
//function cetak jadwal
public function cetakbimbingan($kdjadwal = 0)
{
    $get_jadwal_bimbingan = $this->model_jadwal_bimbingan->get_jadwal_bimbingan_by_kdjadwal($kdjadwal);
    if(!$get_jadwal_bimbingan)
    redirect('jadwal');
    $get_isi2 = $this->model_isi2->get_isi2_by_kdjadwal($kdjadwal);
    $data = [
        'jadwal_bimbingan' => $get_jadwal_bimbingan,
        'get_isi2' => $get_isi2,
    ];
    $this->load->view('cetakbimbingan', $data);
}


}
?>
