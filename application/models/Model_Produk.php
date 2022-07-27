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

    public function select_new()
    {
        $this->db->order_by('produk_id', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get('produk');

        return $query;
    }

    public function select_limit($limit, $start)
    {
        $query = $this->db->get('produk', $limit, $start);

        return $query;
    }

    public function count_all_produk()
    {
        return $this->db->get('produk')->num_rows();
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

    public function select_order($col, $val, $limit, $start)
    {
        $this->db->order_by($col, $val);
        $query = $this->select_limit($limit, $start);
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
        $image = $_FILES['image']['name'];

        if ($image == '') {
        } else {
            $config['upload_path'] = FCPATH . '/assets/img';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            // $this->upload->do_upload($image);
            if (!$this->upload->do_upload('image')) {
                echo 'gambar gagal diupload';
            } else {
                $image_prod = $this->upload->data('file_name');
            }
        }

        $data = [
            "nama_produk" => $this->input->post('nama', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "stok" => $this->input->post('stok', true),
            "image" => $image,
        ];

        $this->db->insert('produk', $data);
    }

    function ubahData($id)
    {
        $image = $_FILES['image']['name'];

        if ($image == '') {
        } else {
            $config['upload_path'] = FCPATH . '/assets/img';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            // $this->upload->do_upload($image);
            if (!$this->upload->do_upload('image')) {
                echo 'gambar gagal diupload';
            } else {
                $image_prod = $this->upload->data('file_name');
            }
        }

        $data = [
            "nama_produk" => $this->input->post('nama', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "stok" => $this->input->post('stok', true),
            "image" => $image,
        ];
        $this->db->where(array('produk_id' => $id));
        $this->db->update('produk', $data);
    }

    function hapusData($id)
    {
        $this->db->where(array('produk_id' => $id));
        $this->db->delete('produk');
    }

    function select_menu()
    {
        $this->db->where('menu_id', 2);
        $query = $this->db->get('submenu')->result_array();
        return $query;
    }

    function select_submenu()
    {
        $this->db->where('menu_id', 3);
        $query = $this->db->get('submenu')->result_array();
        return $query;
    }
}
