<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {

	public function index()
	{
		$this->load->view('design/lowongan/lowongan_view');
	}

	public function tambah()
	{
		$this->load->view('design/lowongan/pasangLowongan_view');
	}	
}
