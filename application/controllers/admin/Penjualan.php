<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
        $this->load->model("Penjualan_model");
        $this->load->model("Detailjual_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jual"] = $this->Penjualan_model->getAll();
        $data["detail"] = $this->Detailjual_model->getAll();
        $this->load->view("admin/penjualan/list", $data);
    }

    public function export()
    {                       
        // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Data_Siswa.xls");
            
            $data['jual'] = $this->Penjualan_model->view();
            $this->load->view('admin/penjualan/export', $data);
    }
}