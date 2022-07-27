<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Basket extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Produk');
        $data['title'] = "Keranjang | Toko Ikan";
        $this->mybreadcrumb->add('Home', base_url());
        $this->mybreadcrumb->add('Cart', base_url('basket'));
        $data['breadcrumbs'] = $this->mybreadcrumb->render();
        $data['menu'] = $this->Model_Produk->select_menu();

        $prodId = $this->session->userdata('id');
        $quantity = $this->session->userdata('quantity');
        // $key = array_keys($quantity);


        $dataProd = array();
        foreach ($prodId as $id) {
            $dataProd[] = $this->Model_Produk->select_where('produk_id', $id)->result_array();
        }
        foreach ($quantity as $qty) {
            $data['qty'] = $qty;
        }
        // $keyQty[] = $quantity;
        // $keyQty[] = $key;
        // $data['qty'] = $keyQty;
        // var_dump($key, $quantity);
        // var_dump($data['qty']);

        $data['produk'] = $dataProd;
        // var_dump($data['produk']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/breadcrumb', $data);
        $this->load->view('basket', $data);
        $this->load->view('templates/order-summary');
        $this->load->view('templates/footer');
    }



    public function addCart($produk_id)
    {
        // $this->session->unset_userdata('id');
        // $this->session->unset_userdata('quantity');

        $ids = $this->session->userdata('id');
        $quantity = $this->session->userdata('quantity');

        // var_dump($ids);
        // die;
        // $id[] = $produk_id;
        $qty = $quantity;
        $cart[] = array(
            'id' => $ids,
            'qty' => $qty,
        );
        if (!isset($_SESSION['id'])) {
            $ids[] = $produk_id;
            $idUnik = array_unique($ids);
            $ids = $this->session->set_userdata('id', $idUnik);
            $this->session->userdata('quantity');
            $qty[$produk_id] = 1;
            $this->session->set_userdata('quantity', $qty);
        } else {
            foreach ($ids as $prodId) {
                if ($prodId == $produk_id) {
                    $qty[$produk_id] = $qty[$produk_id] + 1;
                    $this->session->set_userdata('quantity', $qty);
                    break;
                } else {
                    // break;
                }
            }
            if ($prodId != $produk_id) {
                // var_dump($prodId, $produk_id);
                // die;
                $ids[] = $produk_id;
                $idUnik = array_unique($ids);
                $ids = $this->session->set_userdata('id', $idUnik);
                $qty[$produk_id] = 1;
                $this->session->set_userdata('quantity', $qty);
            }
        }
        redirect(base_url('produk'));
    }
}
