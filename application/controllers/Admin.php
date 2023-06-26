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
        $this->load->model('Model_Order');
        $this->load->model('Model_Admin');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            redirect(base_url());
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['email' => $email])->row_array();
        if ($user) {
            if ($password == $user['password']) {
                $data['title'] = "Administator";
                $data['menu'] = "produk";
                $data['submenu'] = $this->Model_Admin->select_menu();
                $data['produk'] = $this->Model_Produk->select_all()->result_array();
                $this->load->view('templates/header-admin', $data);
                $this->load->view('master/produk', $data);
                $this->load->view('templates/footer-admin', $data);
            } else {
                redirect(base_url());
            }
        } else {
            redirect(base_url());
        }
    }

    public function produk()
    {
        $data['title'] = "Administator";
        $data['menu'] = "produk";
        $data['submenu'] = $this->Model_Admin->select_menu();
        $data['produk'] = $this->Model_Produk->select_all()->result_array();
        $this->load->view('templates/header-admin', $data);
        $this->load->view('master/produk', $data);
        $this->load->view('templates/footer-admin', $data);
    }
    public function kategori()
    {
        $data['title'] = "Administator";
        $data['menu'] = "kategori";
        $data['submenu'] = $this->Model_Admin->select_menu();
        $data['kategori'] = $this->Model_Kategori->select_all()->result_array();
        $this->load->view('templates/header-admin', $data);
        $this->load->view('master/kategori', $data);
        $this->load->view('templates/footer-admin', $data);
    }
    public function ads()
    {
        $data['title'] = "Administator";
        $data['menu'] = "ads";
        $data['submenu'] = $this->Model_Admin->select_menu();
        $data['ads'] = $this->Model_Ads->select_all()->result_array();
        $this->load->view('templates/header-admin', $data);
        $this->load->view('master/ads', $data);
        $this->load->view('templates/footer-admin', $data);
    }
    public function order()
    {
        $data['title'] = "Administator";
        $data['menu'] = "order";
        $data['submenu'] = $this->Model_Admin->select_menu();
        $data['order'] = $this->Model_Order->select_all()->result_array();
        // var_dump($data['order']);
        // die;
        $this->load->view('templates/header-admin', $data);
        $this->load->view('master/order', $data);
        $this->load->view('templates/footer-admin', $data);
    }
}
