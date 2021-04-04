<?php
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau Password anda salah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('auth/login');
        }
    }
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('elektronik', $data);
    }
    public function pakaian_pria()
    {
        $data['ppria'] = $this->model_kategori->data_ppria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('pakaian_pria', $data);
    }
    public function pakaian_wanita()
    {
        $data['pwanita'] = $this->model_kategori->data_pwanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('pakaian_wanita', $data);
    }
    public function pakaian_anak()
    {
        $data['panak'] = $this->model_kategori->data_panak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('pakaian_anak', $data);
    }
    public function peralatan_olahraga()
    {
        $data['polahraga'] = $this->model_kategori->data_polahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
        $this->load->view('peralatan_olahraga', $data);
    }
}
