<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('design/auth/register_view');
	}

	public function pekerja(){
		$this->load->view('design/auth/registerPekerja_view');
	}

	public function perusahaan(){
		$this->load->view('design/auth/registerPerusahaan_view');
	}
}
