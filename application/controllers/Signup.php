<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/register_view');
	}

	public function pekerja(){
		$this->load->view('frontend/registerPekerja_view');
	}
}
