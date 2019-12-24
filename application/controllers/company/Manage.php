<?php
Class Manage extends CI_Controller{    
    public function index(){
    }
    public function daftar_pelamar(){
        $this->load->view('design/company/lamaran/daftarpelamar_view');
    }

    public function proses(){
        $this->load->view('design/company/lamaran/proseslamaran_view');
    }

    public function pelamar_terpilih(){
        $this->load->view('design/company/lamaran/pelamarterpilih_view');
    }

    public function histori_pelamar(){
        $this->load->view('design/company/lamaran/historipelamar_view');
    }

    public function daftar_hitam(){
        $this->load->view('design/company/lamaran/daftarhitam_view');
    }

    public function daftar_perusahaan(){
        $this->load->view('design/company/admin/daftarperusahaan_view');
    }
    
    public function daftar_pengguna(){
        $this->load->view('design/company/admin/daftarpengguna_view');
    }

    public function statistik(){
        $this->load->view('design/company/admin/statistik_view');
    }

    
}
?>