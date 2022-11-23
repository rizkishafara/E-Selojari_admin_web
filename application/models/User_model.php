<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "admin";

    public $user_id;
    public $username;
    public $name;
    public $password;

    public function rules()
    {
        return [

            ['field' => 'name',
            'label' => 'Name',
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
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->user_id;
        $this->name = $post["name"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->user_id = $post["user_id"];
        $this->name = $post["name"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        return $this->db->update($this->_table, $this, array('user_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("user_id" => $id));
    }
}