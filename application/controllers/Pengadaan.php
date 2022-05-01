<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengadaan extends CI_Controller
{   
    public function index()
    {   
        $this->load->model('adminmodel');
        $data['judulhlm'] = 'Pengadaan | BDIBOOKSTORE';
        $this->load->view('layout/header', $data);
        $data['listbuku'] = $this->adminmodel->get_buku2();
        $this->load->view('pengadaan',$data);
        $this->load->view('layout/footer');
    }    
}
