<?php

class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Order');
        $this->load->library('form_validation');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Order';
        $data['menu'] = 'order';
        $data['submenu'] = $this->Model_Admin->select_menu();
        $data['order'] = $this->Model_Order->select_where($id);

        // set rules errors validation
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah Barang', 'required|numeric');
        $this->form_validation->set_rules('total', 'Total Harga', 'required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header-admin', $data);
            $this->load->view('forms/form_order', $data);
            $this->load->view('templates/footer-admin');
        } else {
            $data = $this->Model_Order->ubahData($id);
            // $this->session->set_flashdata('flash', 'diubah');
            redirect('admin/order');
        }
    }

    public function hapus($id)
    {
        $this->Model_Order->hapusData($id);
        // $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/order');
    }

    public function addOrder()
    {
        $this->Model_Order->tambahData();
        redirect('produk');
    }
}
