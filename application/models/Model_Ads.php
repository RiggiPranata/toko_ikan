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
        $image = $_FILES['image']['name'];

        if ($image == '') {
        } else {
            $config['upload_path'] = FCPATH . '/assets/img';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo 'gambar gagal diupload';
            } else {
                $image_prod = $this->upload->data('file_name');
            }
        }
        $is_active =  $this->input->post('isActive', true);
        if ($is_active == null) {
            $is_active = 0;
        };
        $data = [
            "nama_ads" => $this->input->post('nama', true),
            "foto_ads" => $image,
            "isActive" => $is_active,
        ];
        $this->db->insert('ads', $data);
    }

    function ubahData($id)
    {
        $image = $_FILES['image']['name'];

        if ($image == '') {
        } else {
            $config['upload_path'] = FCPATH . '/assets/img';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo 'gambar gagal diupload';
            } else {
                $image_prod = $this->upload->data('file_name');
            }
        }
        $data = [
            "nama_ads" => $this->input->post('nama', true),
            "foto_ads" => $image,
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
