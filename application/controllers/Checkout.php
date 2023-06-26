<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function checkout1()
    {
        $data['title'] = "Checkout";
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Checkout - Address', base_url('checkout'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();
        $data['menu'] = $this->Model_Produk->select_menu();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('checkout/checkout1', $data);
        $this->load->view('templates/order-summary', $data);
        $this->load->view('templates/footer');
    }

    public function checkout2()
    {

        $this->load->model('Model_Order');
        $this->Model_Order->tambahDataUser();
        $data['title'] = "Checkout";
        $this->mybreadcrumb->add('Home', base_url());
        $data['menu'] = $this->Model_Produk->select_menu();
        $this->mybreadcrumb->add('Checkout - Address', base_url('checkout'));
        $this->mybreadcrumb->add('Checkout - Delivery Metode', base_url('checkout/checkout2'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('checkout/checkout2', $data);
        $this->load->view('templates/order-summary', $data);
        $this->load->view('templates/footer');
    }

    public function checkout3()
    {
        $data['title'] = "Checkout";
        $this->mybreadcrumb->add('Home', base_url());
        $data['menu'] = $this->Model_Produk->select_menu();
        $this->mybreadcrumb->add('Checkout - Address', base_url('checkout'));
        $this->mybreadcrumb->add('Checkout - Delivery Metode', base_url('checkout/checkout2'));
        $this->mybreadcrumb->add('Checkout - Payment Metode', base_url('checkout/checkout3'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('checkout/checkout3', $data);
        $this->load->view('templates/order-summary', $data);
        $this->load->view('templates/footer');
    }

    public function checkout4()
    {
        $data['title'] = "Checkout";
        $this->mybreadcrumb->add('Home', base_url());
        $data['menu'] = $this->Model_Produk->select_menu();
        $this->mybreadcrumb->add('Checkout - Address', base_url('checkout'));
        $this->mybreadcrumb->add('Checkout - Delivery Metode', base_url('checkout/checkout2'));
        $this->mybreadcrumb->add('Checkout - Payment Metode', base_url('checkout/checkout3'));
        $this->mybreadcrumb->add('Checkout - Order Review', base_url('checkout/checkout4'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $prodId = $this->session->userdata('id');
        $quantity = $this->session->userdata('quantity');


        $dataProd = array();
        foreach ($prodId as $id) {
            $dataProd[] = $this->Model_Produk->select_where('produk_id', $id)->result_array();
        }
        foreach ($quantity as $qty) {
            $data['qty'] = $qty;
        }

        $data['produk'] = $dataProd;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('checkout/checkout4', $data);
        $this->load->view('templates/order-summary', $data);
        $this->load->view('templates/footer');
    }
}
