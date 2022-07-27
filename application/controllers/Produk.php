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

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/toko_ikan/produk/index';
        $config['total_rows'] = $this->Model_Produk->count_all_produk();
        $config['per_page'] = 8;

        $config['full_tag_open'] = '<nav class="d-flex justify-content-center"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);
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
        $data['menu'] = $this->Model_Produk->select_menu();

        $data['start'] = $this->uri->segment(3);
        $data['produk'] = $this->Model_Produk->select_limit($this->pagination->per_page, $data['start'])->result();




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
        $data['menu'] = $this->Model_Produk->select_menu();

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
        $data['menu'] = $this->Model_Produk->select_menu();
        $data['submenu'] = $this->Model_Produk->select_submenu();

        $data['produk'] = $this->Model_Produk->select_like('kategori', $jenis)->result();

        $data['url'] = base_url('produk');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('produk', $data);
        $this->load->view('templates/footer', $data);
    }

    public function sort($by)
    {

        // var title
        $data['title'] = "Produk | Toko Ikan";

        // breadcrumb init
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Produk', base_url('produk'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();
        $data['menu'] = $this->Model_Produk->select_menu();


        $data['start'] = $this->uri->segment(3);
        $data['produk'] = $this->Model_Produk->select_order($by, 'ASC', $this->pagination->per_page, $data['start'])->result();

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
        $data['menu'] = $this->Model_Produk->select_menu();


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
        $data['submenu'] = $this->Model_Admin->select_menu();
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
            redirect('admin/produk');
        }
    }


    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Produk';
        $data['menu'] = 'produk';
        $data['submenu'] = $this->Model_Admin->select_menu();
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
            redirect('admin/produk');
        }
    }

    public function hapus($id)
    {
        $this->Model_Produk->hapusData($id);
        // $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/produk');
    }
}
