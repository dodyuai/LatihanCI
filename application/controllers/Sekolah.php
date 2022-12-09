<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data['halaman'] = "f-sekolah";
		$this->load->view('template-sbadmin2', $data);
	}

}
