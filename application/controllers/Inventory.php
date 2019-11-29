<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
        $this->load->model('Product_model', 'product');
        is_logged_in();
    }

    public function index()
    {

        $data['title'] = 'Product Data';
        $data['user'] = $this->admin->getUser();
        $data['product'] = $this->product->getAllProduct();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('inventory/index', $data);
        $this->load->view('templates/footer');
    }
}
