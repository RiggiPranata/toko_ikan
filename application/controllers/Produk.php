<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Produk');
        $this->load->model('Model_Kategori');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // var title
        $data['title'] = "Produk | Toko Ikan";

        // breadcrumb init
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Produk', base_url('produk'));
        $this->mybreadcrumb->add(' ', base_url());
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $data['produk'] = $this->Model_Produk->select_all()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('produk', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = "Detail Produk";
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Produk', base_url('produk'));
        // $this->mybreadcrumb->add('Katogori', base_url('kategori'));
        $this->mybreadcrumb->add('Detail Produk', base_url('produk/detail'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $data['produk'] = $this->Model_Produk->select_where('produk_id', $id)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }

    public function kategori($jenis)
    {

        // var title
        $data['title'] = "Produk | Toko Ikan";

        // breadcrumb init
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Produk', base_url('produk'));
        $this->mybreadcrumb->add('Kategori ' . $jenis, base_url('produk/kategori'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $data['produk'] = $this->Model_Produk->select_like('kategori', $jenis)->result();

        $data['url'] = base_url('produk');
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/breadcrumb', $data);
        $this->load->view('produk', $data);
        // $this->load->view('templates/footer', $data);
    }

    public function sort($by)
    {

        // var title
        $data['title'] = "Produk | Toko Ikan";

        // breadcrumb init
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Produk', base_url('produk'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $data['produk'] = $this->Model_Produk->select_order($by, 'ASC')->result();

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/breadcrumb', $data);
        $this->load->view('produk', $data);
        // $this->load->view('templates/footer');
    }

    public function cari()
    {

        // var title
        $data['title'] = "Produk | Toko Ikan";

        // breadcrumb init
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Produk', base_url('produk'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $keyword = $this->input->post('cari');

        if ($this->input->post('keyword')) {
            $data['produk'] = $this->Model_Produk->cariData();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('produk', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Produk';
        $data['menu'] = 'produk';
        $data['kategori'] = $this->Model_Kategori->select_all()->result_array();
        $data['produk'] = array();

        // set rules errors validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-admin', $data);
            $this->load->view('forms/form_produk', $data);
            $this->load->view('templates/footer-admin');
        } else {
            $this->Model_Produk->tambahData();
            // $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('produk/tambah');
        }
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Produk';
        $data['menu'] = 'produk';
        $data['kategori'] = $this->Model_Kategori->select_all()->result_array();
        $data['produk'] = $this->Model_Produk->select_where('produk_id', $id)->result();

        // set rules errors validation
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-admin', $data);
            $this->load->view('forms/form_produk', $data);
            $this->load->view('templates/footer-admin');
        } else {
            $data = $this->Model_Produk->ubahData($id);
            // $this->session->set_flashdata('flash', 'diubah');
            redirect('admin');
        }
    }

    public function hapus($id)
    {
        $this->Model_Produk->hapusData($id);
        // $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin');
    }
}
