<?php
class Kategori extends CI_Controller
{
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
