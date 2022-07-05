<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Contact | Toko Ikan";
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Contact', base_url('contact'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('Contact', $data);
        $this->load->view('templates/footer');
    }
}
