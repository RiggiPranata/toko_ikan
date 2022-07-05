<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ads extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Ads');
        $this->load->library('form_validation');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Ads';
        $data['menu'] = 'ads';
        $data['ads'] = array();

        // set rules errors validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-admin', $data);
            $this->load->view('forms/form_ads');
            $this->load->view('templates/footer-admin');
        } else {
            $this->Model_Ads->tambahData();
            // $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('ads/tambah');
        }
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Ads';
        $data['menu'] = 'ads';
        $data['ads'] = $this->Model_Ads->select_where($id)->result();

        // set rules errors validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('image', 'Picture', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-admin', $data);
            $this->load->view('forms/form_ads', $data);
            $this->load->view('templates/footer-admin');
        } else {
            $data = $this->Model_Ads->ubahData($id);
            // $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/ads');
        }
    }

    public function hapus($id)
    {
        $this->Model_Ads->hapusData($id);
        // $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/ads');
    }
}
