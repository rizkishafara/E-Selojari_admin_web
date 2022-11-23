<?php

class Login_model extends CI_Model
{
    function daftar($data)
    {
        $this->db->insert('admin', $data);
    }

}