<?php

class Model_Produk extends CI_Model
{
    public function store_data()
    {
    }

    public function select_all()
    {
        $query = $this->db->get('produk');

        return $query;
    }

    public function select_by($by, $ad)
    {
        $this->db->order_by($by, $ad);
        $this->select_all();
    }

    public function select_where($kondisi, $val)
    {
        $query = $this->db->get_where('produk', array($kondisi => $val));
        return $query;
    }

    public function select_like($col, $val)
    {
        $this->db->like($col, $val);
        $query = $this->db->get('produk');
        return $query;
    }

    public function select_order($col, $val)
    {
        $this->db->order_by($col, $val);
        $query = $this->db->get('produk');
        return $query;
    }


    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_produk', $keyword);
        $this->db->or_like('kategori', $keyword);
        return $this->db->get('produk')->result();
    }

    public function tambahData()
    {
        $data = [
            "nama_produk" => $this->input->post('nama', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "stok" => $this->input->post('stok', true),
            "image" => 'product1.jpg',
        ];
        $this->db->insert('produk', $data);
    }

    function ubahData($id)
    {
        $data = [
            "nama_produk" => $this->input->post('nama', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "stok" => $this->input->post('stok', true),
            "image" => 'product1.jpg',
        ];
        $this->db->where(array('produk_id' => $id));
        $this->db->update('produk', $data);
    }

    function hapusData($id)
    {
        $this->db->where(array('produk_id' => $id));
        $this->db->delete('produk');
    }
}
