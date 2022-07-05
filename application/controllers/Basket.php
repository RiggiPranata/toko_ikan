<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Basket extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Keranjang | Toko Ikan";
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Cart', base_url('basket'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('basket', $data);
        $this->load->view('templates/order-summary');
        $this->load->view('templates/footer');
    }
}
