<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_berita');

	}

	public function index() {
		$this->template->load('template/template','index/v_beranda');
	}

	public function sejarah() {
		$this->template->load('template/template','index/v_sejarah');
	}

	public function berita() {
		$data['query'] = $this->M_berita->read_berita();

		$this->template->load('template/template','index/v_berita', $data);
	}

	public function detail() {
		$this->template->load('template/template','kebudayaan/v_detail');
	}


}
