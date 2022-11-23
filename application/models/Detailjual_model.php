<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detailjual_model extends CI_Model
{
    private $_table = "detailjual";

    public $id;
    public $no_nota;
    public $kd_brg;
    public $hrg_brg;
    public $hrg_beli;
    public $jml_brg;

    public function rules()
    {
        return [
            ['field' => 'no_nota',
            'label' => 'No Nota',
            'rules' => 'numeric'],

            ['field' => 'kd_brg',
            'label' => 'Kode Barang',
            'rules' => 'required'],

            ['field' => 'hrg_brg',
            'label' => 'Harga Barang',
            'rules' => 'required'],

            ['field' => 'hrg_beli',
            'label' => 'Harga Beli',
            'rules' => 'required'],

            ['field' => 'jml_brg',
            'label' => 'Jumlah Barang',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
}