<?php
Class Manage extends CI_Controller{    
    public function index(){
    }
    public function daftar_pelamar(){
        $this->load->view('design/company/daftarpelamar_view');
    }

    public function proses(){
        $this->load->view('design/company/proses_view');
    }

    public function pelamar_terpilih(){
        $this->load->view('design/company/pelamarterpilih_view');
    }

    public function histori_pelamar(){
        $this->load->view('design/company/historipelamar_view');
    }

    public function daftar_hitam(){
        $this->load->view('design/company/daftarhitam_view');
    }
}
?>