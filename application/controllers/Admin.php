<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Produk');
        $this->load->model('Model_Kategori');
        $this->load->model('Model_Ads');
    }
    public function index()
    {
        $data['title'] = "Administator";
        $data['menu'] = "produk";
        $data['produk'] = $this->Model_Produk->select_all()->result_array();
        $this->load->view('templates/header-admin', $data);
        $this->load->view('master/produk', $data);
        $this->load->view('templates/footer-admin', $data);
    }
    public function kategori()
    {
        $data['title'] = "Administator";
        $data['menu'] = "kategori";
        $data['kategori'] = $this->Model_Kategori->select_all()->result_array();
        $this->load->view('templates/header-admin', $data);
        $this->load->view('master/kategori', $data);
        $this->load->view('templates/footer-admin', $data);
    }
    public function ads()
    {
        $data['title'] = "Administator";
        $data['menu'] = "ads";
        $data['ads'] = $this->Model_Ads->select_all()->result_array();
        $this->load->view('templates/header-admin', $data);
        $this->load->view('master/ads', $data);
        $this->load->view('templates/footer-admin', $data);
    }
}
