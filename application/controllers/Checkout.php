<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Checkout";
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Checkout - Address', base_url('checkout'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('checkout/checkout1', $data);
        $this->load->view('templates/order-summary', $data);
        $this->load->view('templates/footer');
    }

    public function checkout2()
    {
        $data['title'] = "Checkout";
        $this->mybreadcrumb->add('Home', base_url());
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
        $this->mybreadcrumb->add('Checkout - Address', base_url('checkout'));
        $this->mybreadcrumb->add('Checkout - Delivery Metode', base_url('checkout/checkout2'));
        $this->mybreadcrumb->add('Checkout - Payment Metode', base_url('checkout/checkout3'));
        $this->mybreadcrumb->add('Checkout - Order Review', base_url('checkout/checkout4'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('checkout/checkout4', $data);
        $this->load->view('templates/order-summary', $data);
        $this->load->view('templates/footer');
    }
}
