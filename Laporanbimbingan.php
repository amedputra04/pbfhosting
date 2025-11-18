<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporanbimbingan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_laporanbimbingan');
    }

    public function index()
    {
        $isi2_laporanbimbingan = $this->model_laporanbimbingan->view_data_isi2_laporanbimbingan();

        $data = [
            'username' => $this->session->userdata('username'),
            'user_role' => $this->session->userdata('user_role'),
            'get_tahun_akademik' => $this->model_laporanbimbingan->view_tahun_akademik(),
            'get_semester' => $this->model_laporanbimbingan->view_semester(),
            'data_isi2' => $isi2_laporanbimbingan
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('cetaklaporanbimbingan', $data);
        $this->load->view('template/footer');
    }

    public function cetakbimbingan()
    {
        $tahun_akademik = $this->input->get('tahun_akademik');
        $semester = $this->input->get('semester');
        $result = $this->model_laporanbimbingan->get_laporanbimbingan($tahun_akademik, $semester);
        if (!$result) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data tahun yang dipilih tidak tersedia</div>');
            redirect('laporanbimbingan');
        }

        $data = [
            'daftar_laporanbimbingan' => $result,
            'tahun_akademik' => $tahun_akademik,
            'semester' => $semester
        ];
        $this->load->view('laporanbimbingan', $data);
    }
}
