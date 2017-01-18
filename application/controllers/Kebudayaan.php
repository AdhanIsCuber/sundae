<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebudayaan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_kebudayaan');
	}

	function kesenian() {
		$data['kesenian'] = $this->M_kebudayaan->read_by_kesenian();
		$this->template->load('template/template','kebudayaan/v_kesenian', $data);
	}

	function kuliner() {
		$data['kuliner'] = $this->M_kebudayaan->read_by_kuliner();
		$this->template->load('template/template','kebudayaan/v_kuliner', $data);
	}

	function musik() {
		$data['musik'] = $this->M_kebudayaan->read_by_musik();
		$this->template->load('template/template','kebudayaan/v_musik', $data);
	}

	function tarian() {
		$data['tarian'] = $this->M_kebudayaan->read_by_tarian();
		$this->template->load('template/template','kebudayaan/v_tarian', $data);
	}


	function detail($id){
			$data['kesenian'] = $this->M_kebudayaan->read_by_kesenian($id);
			$this->template->load('template/template','kebudayaan/v_detail', $data);
		}

		public function up($id) {

				$data['query'] = $this->M_kebudayaan->read_kebudayaan_by_id($id);
				$this->template->load('template/template','kebudayaan/v_detail', $data);

				if (isset($_POST['submit'])) {

					$data = array(
						'nama' => $nama,
						'isi' => $isi,
						'gambar' => $gambar);

						$this->db->where('id',$id);
						$query = $this->db->get('kebudayaan',$data);

				}
			}
	}
