<?php
class Invoice extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice');
        $this->load->view('templates_admin/footer');
    }
}
