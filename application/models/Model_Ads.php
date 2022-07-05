<?php

class Model_Ads extends CI_Model
{
    //Select All Ads Where isActive True Query
    public function ads()
    {
        $this->db->select('nama_ads, foto_ads, isActive');
        $query = $this->db->get_where('ads', array('isActive' => 1));

        return $query;
    }

    public function select_all()
    {
        $query = $this->db->get('ads');

        return $query;
    }

    public function select_where($id)
    {
        $query = $this->db->get_where('ads', array('ads_id' => $id));

        return $query;
    }

    public function tambahData()
    {
        $is_active =  $this->input->post('isActive', true);
        if ($is_active == null) {
            $is_active = 0;
        };
        $data = [
            "nama_ads" => $this->input->post('nama', true),
            "foto_ads" => 'product1.jpg',
            "isActive" => $is_active,
        ];
        $this->db->insert('ads', $data);
    }

    function ubahData($id)
    {
        $data = [
            "nama_ads" => $this->input->post('nama', true),
            "foto_ads" => $this->input->post('image', true),
            "isActive" => $this->input->post('isActive', true),
        ];
        $this->db->where(array('ads_id' => $id));
        $this->db->update('ads', $data);
    }

    function hapusData($id)
    {
        $this->db->where(array('ads_id' => $id));
        $this->db->delete('ads');
    }
}
