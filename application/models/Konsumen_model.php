<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen_model extends CI_Model
{
    private $_table = "konsumen";

    public $kd_kons;
    public $nm_kons;
    public $alm_kons;
    public $kota_kons;
    public $kd_pos;
    public $phone;
    public $email;
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'nm_kons',
            'label' => 'Nama Konsumen',
            'rules' => 'required'],

            ['field' => 'alm_kons',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'kota_kons',
            'label' => 'Kota',
            'rules' => 'required'],

            ['field' => 'kd_pos',
            'label' => 'Kode Pos',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'Telepon',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kd_kons" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kd_kons;
        $this->nm_kons = $post["nm_kons"];
        $this->alm_kons = $post["alm_kons"];
        $this->kota_kons = $post["kota_kons"];
        $this->kd_pos = $post["kd_pos"];
        $this->phone = $post["phone"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kd_kons = $post["kd_kons"];
        $this->nm_kons = $post["nm_kons"];
        $this->alm_kons = $post["alm_kons"];
        $this->kota_kons = $post["kota_kons"];
        $this->kd_pos = $post["kd_pos"];
        $this->phone = $post["phone"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        return $this->db->update($this->_table, $this, array('kd_kons' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kd_kons" => $id));
    }
}