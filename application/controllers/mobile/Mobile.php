<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mobile/Mobile_model");
    }

    public function index()
    {
        $this->Mobile_model->getAll();
    
    }

    public function login()
    {
        $this->Mobile_model->login();
    
    }
    public function register()
    {
        $regis = $this->Mobile_model;
        $regis->register();
    }
    public function createJual()
    {
        $this->Mobile_model->createJual();
    
    }
    public function updatePass()
    {
        $this->Mobile_model->updatePassword();
    }
    public function riwayat()
    {
        $this->Mobile_model->riwayat();
    }

    public function updateStatus()
    {
        $this->Mobile_model->updateStatus();
    }
    /*public function detailJual()
    {
        $this->Mobile_model->detailJual();
    
    }*/
}