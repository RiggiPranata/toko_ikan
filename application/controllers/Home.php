<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Ads');
		$this->load->model('Model_Produk');
	}

	public function index()
	{
		$data['ads'] = $this->Model_Ads->ads()->result();
		$data['hot_produk'] = $this->Model_Produk->select_all()->result();
		$data['title'] = "Home | Toko Ikan";
		$this->load->view('templates/header', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}
}
