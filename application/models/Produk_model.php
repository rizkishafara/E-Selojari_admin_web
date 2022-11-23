<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "barang";

    public $kd_brg;
    public $nm_brg;
    public $satuan;
    public $harga;
    public $harga_beli;
    public $stok;
    public $stok_min;
    public $gambar;

    public function rules()
    {
        return [
            ['field' => 'nm_brg',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'satuan',
            'label' => 'Satuan',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required'],

            ['field' => 'harga_beli',
            'label' => 'Harga Beli',
            'rules' => 'required'],

            ['field' => 'stok',
            'label' => 'Stok',
            'rules' => 'required'],

            ['field' => 'stok_min',
            'label' => 'Stok Min',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kd_brg" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_brg  = $post["kd_brg"];
        $this->nm_brg = $post["nm_brg"];
        $this->satuan = $post["satuan"];
        $this->harga = $post["harga"];
        $this->harga_beli = $post["harga_beli"];
        $this->stok = $post["stok"];
        $this->stok_min = $post["stok_min"];
        $this->gambar = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './images/produk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nm_brg;
        $config['overwrite']			= true;
        $config['max_size']             = 10240; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_brg = $post["kd_brg"];
        $this->nm_brg = $post["nm_brg"];
        $this->satuan = $post["satuan"];
        $this->harga = $post["harga"];
        $this->harga_beli = $post["harga_beli"];
        $this->stok = $post["stok"];
        $this->stok_min = $post["stok_min"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        return $this->db->update($this->_table, $this, array('kd_brg' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kd_brg" => $id));
    }
}