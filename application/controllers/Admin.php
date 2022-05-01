<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // ^ load model Adminmodel supaya bisa ambil data dari database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminmodel');
    }

    public function index()
    {
        // ^ mendefinisikan variabel dari tabel buku
        $data['listbuku'] = $this->adminmodel->get_buku();
        // ^ mendefinisikan variabel dari tabel penerbit
        $data['listpenerbit'] = $this->adminmodel->get_penerbit();
        // ^ membuat judul halaman
        $data['judulhlm'] = 'Admin | BDIBOOKSTORE';
        // ^ load header
        $this->load->view('layout/header', $data);
        // ^ load halaman admin
        $this->load->view('admin', $data);
        // ^ load header
        $this->load->view('layout/footer');
    }

    // ^membuat fungsi untuk menampilkan halaman add buku
    public function add_buku()
    {
        // ^ membuat judul halaman
        $data['judulhlm'] = 'Tambah Buku | BDIBOOKSTORE';
        // ^ load header
        $this->load->view('layout/header', $data);
        // ^ load halaman add buku
        $this->load->view('buku/add');
        // ^ load footer
        $this->load->view('layout/footer');
    }

    // ^membuat fungsi untuk menampilkan halaman add penerbit
    public function add_penerbit()
    {
        // ^ membuat judul halaman
        $data['judulhlm'] = 'Tambah Penerbit | BDIBOOKSTORE';
        // ^ load header
        $this->load->view('layout/header', $data);
        // ^ load halaman add penerbit
        $this->load->view('penerbit/add');
        // ^ load footer
        $this->load->view('layout/footer');
    }

    // ^ membuat fungsi insert buku ke database
    public function insert_buku()
    {
        // ^ menginput input GET ke fungsi insert_buku dalam admin model kalo berhasil maka akan kembali ke halaman admin jika gagal mengulangi lagi
        if ($this->adminmodel->insert_buku($this->input->post())) {
            $this->session->set_flashdata('pesan', ('Buku berhasil ditambahkan'));
            redirect(base_url('admin'));
        } else {
            $this->session->set_flashdata('pesan', ('Buku gagal ditambahkan'));
            redirect(base_url('admin/add_buku'));
        }
    }

    // ^ membuat fungsi insert pnerbit ke database
    public function insert_penerbit()
    {
        // ^ menginput input GET ke fungsi insert_penerbit dalam admin model kalo berhasil maka akan kembali ke halaman admin jika gagal mengulangi lagi
        if ($this->adminmodel->insert_penerbit($this->input->post())) {
            $this->session->set_flashdata('pesan', ('Penerbit berhasil ditambahkan'));
            redirect(base_url('admin'));
        } else {
            $this->session->set_flashdata('pesan', ('Penerbit gagal ditambahkan'));
            redirect(base_url('admin/add_penerbit'));
        }
    }

    // ^membuat fungsi untuk menampilkan halaman edit buku
    public function edit_buku($id = null)
    {
        // ^ mendefinisikan variabel dari tabel buku
        $data['listbuku'] = $this->adminmodel->get_detail_buku($id);
        // ^ membuat judul halaman
        $data['judulhlm'] = 'Edit Buku | BDIBOOKSTORE';
        // ^ load header
        $this->load->view('layout/header', $data);
        // ^ load halaman edit buku
        $this->load->view('buku/edit', $data);
        // ^ load footer
        $this->load->view('layout/footer');
    }

    // ^membuat fungsi untuk menampilkan halaman edit penerbit
    public function edit_penerbit($id = null)
    {
        // ^ mendefinisikan variabel dari tabel penerbit
        $data['listpenerbit'] = $this->adminmodel->get_detail_penerbit($id);
        // ^ membuat judul halaman
        $data['judulhlm'] = 'Edit Penerbit | BDIBOOKSTORE';
        // ^ load header
        $this->load->view('layout/header', $data);
        // ^ load halaman edit penerbit
        $this->load->view('penerbit/edit', $data);
        // ^ load footer
        $this->load->view('layout/footer');
    }

    // ^ membuat fungsi update buku ke database
    public function update_buku($id)
    {
        // ^ menginput input GET ke fungsi update_buku dalam admin model kalo berhasil maka akan kembali ke halaman admin jika gagal mengulangi lagi
        if ($this->adminmodel->update_buku($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', ('Buku berhasil diedit'));
            redirect(base_url('admin'));
        } else {
            $this->session->set_flashdata('pesan', ('Buku gagal diedit'));
            redirect(base_url('admin/edit_buku/' . $id));
        }
    }

    // ^ membuat fungsi update penerbit ke database
    public function update_penerbit($id)
    {
        // ^ menginput input GET ke fungsi insert_penerbit dalam admin model kalo berhasil maka akan kembali ke halaman admin jika gagal mengulangi lagi
        if ($this->adminmodel->update_penerbit($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', ('Penerbit berhasil diedit'));
            redirect(base_url('admin'));
        } else {
            $this->session->set_flashdata('pesan', ('Penerbit gagal diedit'));
            redirect(base_url('admin/edit_penerbit/' . $id));
        }
    }

    // ^membuat fungsi untuk delete buku
    public function delete_buku($id = null)
    {
        $this->adminmodel->delete_buku($id);
        $this->session->set_flashdata('pesan', 'Buku berhasil dihapus');
        redirect(base_url('admin'));
    }

    // ^membuat fungsi untuk delete penerbit
    public function delete_penerbit($id = null)
    {
        $this->adminmodel->delete_penerbit($id);
        $this->session->set_flashdata('pesan', 'Penerbit berhasil dihapus');
        redirect(base_url('admin'));
    }
}
