<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/lowongan_view');
	}
}
