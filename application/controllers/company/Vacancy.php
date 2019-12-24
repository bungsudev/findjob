<?php
Class Vacancy extends CI_Controller{
    public function tambah_lowongan(){
        $this->load->view('design/company/lowongan/tambahlowongan_view');
    }

    public function lowongan_aktif(){
        $this->load->view('design/company/lowongan/lowonganaktif_view');
    }

    public function histori_lowongan(){
        $this->load->view('design/company/lowongan/historilowongan_view');
    }
}
?>