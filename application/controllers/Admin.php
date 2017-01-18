<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $limit=10;
	var $offset=10;

	public function __construct(){
		parent:: __construct();
		$this->load->model('M_login');
		$this->load->model('M_berita');
		$this->load->model('M_kebudayaan');
		$this->load->library('form_validation');
		$this->load->helper(array('url'));

	}


	/* LOGIN CONTROL */

	function login(){
	    if ($this->session->userdata('Login')) {
	      redirect();
	    } else {
	      $this->form_validation->set_rules('username', 'Username', 'required');
	      $this->form_validation->set_rules('password', 'Password', 'required');

	      if($this->form_validation->run() === FALSE){
	        $this->template->load('template/template','admin/v_login' , array('error' => null));
	      } else {
	        $username = $this->input->post('username');
	        $password = $this->input->post('password');
	        $user = $this->M_login->cek($username, $password);
	        if ($password == $user['password']) {
	          $this->session->set_userdata(array(
	              'Login' => true,
	              'username' => $username,
	            ));
	          redirect('admin/index');
	        } else {
	          $error = array('error' => 'Username / Password salah');
	          $this->template->load('template/template','admin/v_login', $error);
	        }
	      }
	    }
	  }

	public function logout(){
	    $this->session->sess_destroy();
	    redirect('admin/login');
	}

	/* DASHBOARD */

	public function index(){
		if ($this->session->userdata('Login')) {
		$this->template->load('template/template_admin','admin/v_admin');
		} else {
		redirect('admin/login');
		}

	}

	/* DATA KEBUDAYAAN */

	public function data_kebudayaan(){
		if ($this->session->userdata('Login')) {
		$data['query'] = $this->M_kebudayaan->read_kebudayaan();
		$this->template->load('template/template_admin','admin/v_data_kebudayaan', $data);
		} else {
		redirect('admin/login');
		}
	}

	/* CRUD KEBUDAYAAN */

	public function in_kebudayaan() {
		if ($this->session->userdata('Login')) {
			$this->template->load('template/template_admin','admin/v_kebudayaan_tambah');

			if (isset($_POST['submit'])) {

				$this->load->library('upload');
		        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		        $config['upload_path'] = './assets/uploads/'; //path folder
		        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		        $config['max_size'] = '3072'; //maksimum besar file 3M
		        $config['max_width']  = '5000'; //lebar maksimum 5000 px
		        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
		        $config['file_name'] = $nmfile; //nama yang terupload nantinya

				$this->upload->initialize($config);

				if ($_FILES['filefoto']['name']) {
					if ($this->upload->do_upload('filefoto')) {
						$gbr = $this->upload->data();

						$nama = $_POST['nama'];
						$isi = $_POST['isi'];
						$katagori = $_POST['katagori'];

		                $data = array(
		                	'gambar' =>$gbr['file_name'],
							'nama' => $nama,
		  					'isi' => $isi,
		  					'katagori' => $katagori,);

						  $this->M_kebudayaan->insert($data); //akses model untuk menyimpan ke database

			                  $config2['image_library'] = 'gd2';
			                  $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			                  $config2['new_image'] = './assets/hasil_resize/'; // folder tempat menyimpan hasil resize
			                  $config2['maintain_ratio'] = TRUE;
			                  $config2['width'] = 170; //lebar setelah resize menjadi 100 px
			                  $config2['height'] = 170; //lebar setelah resize menjadi 100 px
			                  $this->load->library('image_lib',$config2);

			                  //pesan yang muncul jika resize error dimasukkan pada session flashdata
			                  if ( !$this->image_lib->resize()){
			                  $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));
			                }
			                  //pesan yang muncul jika berhasil diupload pada session flashdata
			                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
			                  redirect('admin/data_kebudayaan'); //jika berhasil maka akan ditampilkan view upload
			              }else{
			                  //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
			                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
			                  redirect('admin/data_kebudayaan'); //jika gagal maka akan ditampilkan form upload
			              }
			          }
					}
				} else {
				redirect('admin/login');
				}
			}




	public function up_kebudayaan($id){
		if ($this->session->userdata('Login')) {
			$data['query'] = $this->M_kebudayaan->read_kebudayaan_by_id($id);
			$this->template->load('template/template_admin','admin/v_kebudayaan_update',$data);

			if (isset($_POST['submit'])) {

				$this->load->library('upload');
		        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		        $config['upload_path'] = './assets/uploads/'; //path folder
		        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		        $config['max_size'] = '3072'; //maksimum besar file 3M
		        $config['max_width']  = '5000'; //lebar maksimum 5000 px
		        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
		        $config['file_name'] = $nmfile; //nama yang terupload nantinya

				$this->upload->initialize($config);

				if ($_FILES['filefoto']['name']) {
					if ($this->upload->do_upload('filefoto')) {
						$gbr = $this->upload->data();

						$nama = $_POST['nama'];
						$isi = $_POST['isi'];
						$katagori = $_POST['katagori'];

		                $data = array(
		                	'gambar' =>$gbr['file_name'],
							'nama' => $nama,
		  					'isi' => $isi,
		  					'katagori' => $katagori,);

							$this->db->where('id', $id);
							$query = $this->db->update('kebudayaan',$data); //akses model untuk menyimpan ke database

			                  $config2['image_library'] = 'gd2';
			                  $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			                  $config2['new_image'] = './assets/hasil_resize/'; // folder tempat menyimpan hasil resize
			                  $config2['maintain_ratio'] = TRUE;
			                  $config2['width'] = 170; //lebar setelah resize menjadi 100 px
			                  $config2['height'] = 170; //lebar setelah resize menjadi 100 px
			                  $this->load->library('image_lib',$config2);

			                  //pesan yang muncul jika resize error dimasukkan pada session flashdata
			                  if ( !$this->image_lib->resize()){
			                  $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));
			                }
			                  //pesan yang muncul jika berhasil diupload pada session flashdata
			                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
			                  redirect('admin/data_kebudayaan'); //jika berhasil maka akan ditampilkan view upload
			              }else{
			                  //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
			                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
			                  redirect('admin/data_kebudayaan'); //jika gagal maka akan ditampilkan form upload
			              }
			          }
					}
				} else {
				redirect('admin/login');
				}
	}

	public function del_kebudayaan($id){
		if ($this->session->userdata('Login')) {
			$this->M_kebudayaan->delete_kebudayaan($id);
			redirect('admin/data_kebudayaan');
		} else {
		redirect('admin/login');
		}
	}

	/* DATA BERITA */

	public function data_berita(){
		if ($this->session->userdata('Login')) {
			$data['query'] = $this->M_berita->read_berita();
			$this->template->load('template/template_admin','admin/v_data_berita', $data);
		} else {
		redirect('admin/login');
		}
	}

	/* CRUD BERITA */

	public function in_berita(){
		if ($this->session->userdata('Login')) {
			$this->template->load('template/template_admin','admin/v_berita_tambah');

			if (isset($_POST['submit'])) {

				$judul = $_POST['judul'];
				$artikel= $_POST['artikel'];

				$this->db->set('judul',$judul);
				$this->db->set('artikel',$artikel);

				$query = $this->db->insert('berita');

				if (!$query) {
					echo '<script>alert("Data gagal ditambahkan");</script>';
				}else{
					echo '<script>alert("Data berhasil ditambahkan");</script>';
				}
			}
		} else {
		redirect('admin/login');
		}
	}

	public function up_berita($id) {
		if ($this->session->userdata('Login')) {

			$data['query'] = $this->M_berita->read_berita_by_id($id);
			$this->template->load('template/template_admin','admin/v_berita_update', $data);

			if (isset($_POST['submit'])) {

				$judul = $_POST['judul'];
				$artikel= $_POST['artikel'];

				$data = array(
					'judul' => $judul,
					'artikel' => $artikel);

					$this->db->where('id_berita',$id);
					$query = $this->db->update('berita',$data);

					if (!$query) {
						echo '<script>alert("Data gagal diupdate");</script>';
					}else{
						redirect(base_url());
						echo '<script>alert("Data berhasil diupdate");</script>';
					}
			}
		} else {
		redirect('admin/login');
		}
	}

	public function del_berita($id){
		if ($this->session->userdata('Login')) {
			$this->M_berita->delete_berita($id);
			redirect('admin/data_berita');
		} else {
		redirect('admin/login');
		}
	}
}
