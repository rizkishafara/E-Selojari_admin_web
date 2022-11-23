<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model
{
    private $_table = "mjual";

    public $no_nota;
    public $kd_kons;
    public $tgl_jual;
    public $total_biaya;
    public $pembayaran;
    public $kembalian;
    public $status;
    public $bukti_tf;

    public function rules()
    {
        return [
            ['field' => 'kd_kons',
            'label' => 'Kode',
            'rules' => 'required'],

            ['field' => 'tgl_jual',
            'label' => 'Tanggal Jual',
            'rules' => 'required'],

            ['field' => 'total_biaya',
            'label' => 'Total Biaya',
            'rules' => 'required'],

            ['field' => 'pembayaran',
            'label' => 'Pembayaran',
            'rules' => 'required'],

            ['field' => 'kembalian',
            'label' => 'Kembalian',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],

            ['field' => 'bukti_tf',
            'label' => 'Bukti Transfer',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_nota" => $id])->row();
    }
}