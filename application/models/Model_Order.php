<?php

class Model_Order extends CI_Model
{

    public function select_all()
    {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('user', 'order.user_id = user.user_id');
        $this->db->join('keranjang', 'order.keranjang_id = keranjang.keranjang_id');
        $query = $this->db->get();
        return $query;
    }

    public function select_where($id)
    {
        $this->db->select('*');
        $this->db->join('user', 'order.user_id = user.user_id');
        $this->db->join('keranjang', 'order.keranjang_id = keranjang.keranjang_id');
        $query = $this->db->get_where('order', array('order_id' => $id))->row_array();

        return $query;
    }

    public function tambahData()
    {
        $$data = [
            "nama_ads" => $this->input->post('nama', true),
            "foto_ads" => 'product1.jpg',
            "isActive" => $is_active,
        ];
        $this->db->insert('ads', $data);
    }

    function ubahData($id_order)
    {
        $data = $this->select_where($id_order);
        $data_user = [
            'alamat' => $this->input->post('alamat', true),
        ];
        $this->db->where(array('user_id' => $data['user_id']));
        $this->db->update('user', $data_user);

        $data_keranjang = [
            'total' => $this->input->post('total', true),
            'jumlah' => $this->input->post('jumlah', true),
        ];
        $this->db->where(array('keranjang_id' => $data['keranjang_id']));
        $this->db->update('keranjang', $data_keranjang);

        $data_order = [
            'status' => $this->input->post('status', true),
        ];
        $this->db->where(array('order_id' => $data['order_id']));
        $this->db->update('order', $data_order);
    }

    function hapusData($id)
    {
        $this->db->where(array('order_id' => $id));
        $this->db->delete('order');
    }
}
