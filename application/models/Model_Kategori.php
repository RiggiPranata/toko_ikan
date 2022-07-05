<?php

class Model_Kategori extends CI_Model
{
    public function select_all()
    {
        $query = $this->db->get('kategori');

        return $query;
    }

    public function select_col()
    {
    }

    public function select_where($id)
    {
        $query = $this->db->get_where('kategori', array('kategori_id' => $id));

        return $query;
    }

    public function tambahData()
    {
        $data = [
            "nama_kategori" => $this->input->post('nama', true),
        ];
        $this->db->insert('kategori', $data);
    }

    function ubahData($id)
    {
        $data = [
            "nama_kategori" => $this->input->post('nama', true),
        ];
        $this->db->where(array('kategori_id' => $id));
        $this->db->update('kategori', $data);
    }

    function hapusData($id)
    {
        $this->db->where(array('kategori_id' => $id));
        $this->db->delete('kategori');
    }
}
