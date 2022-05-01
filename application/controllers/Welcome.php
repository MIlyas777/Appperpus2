<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	// ^ Load Adminmodel supaya bisa ambil data dari database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminmodel');
	}

	public function index()
	{
		//^ mendefinisikan variabel dari tabel buku
		$data['listbuku'] = $this->adminmodel->get_buku();

		// ^ mencari buku
		$keyword = $this->input->get('keyword');
		$data['listkeyword'] = $this->adminmodel->cari_buku($keyword);

		// ^ membuat judul halaman
		$data['judulhlm'] = 'Halaman Utama | BDIBOOKSTORE';
		// ^ load header
		$this->load->view('layout/header', $data);
		// ^ load halaman index
		$this->load->view('index', $data);
		// ^ load header
		$this->load->view('layout/footer');
	}
}
