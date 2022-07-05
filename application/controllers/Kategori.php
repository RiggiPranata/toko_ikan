<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Kategori');
        $this->load->library('form_validation');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Kategori';
        $data['menu'] = 'kategori';
        $data['kategori'] = array();


        // set rules errors validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-admin', $data);
            $this->load->view('forms/form_kategori');
            $this->load->view('templates/footer-admin');
        } else {
            $this->Model_Kategori->tambahData();
            // $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('kategori/tambah');
        }
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Kategori';
        $data['menu'] = 'kategori';
        $data['kategori'] = $this->Model_Kategori->select_where($id)->result();

        // set rules errors validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-admin', $data);
            $this->load->view('forms/form_kategori', $data);
            $this->load->view('templates/footer-admin');
        } else {
            $data = $this->Model_Kategori->ubahData($id);
            // $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/kategori');
        }
    }

    public function hapus($id)
    {
        $this->Model_Kategori->hapusData($id);
        // $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/kategori');
    }
}
