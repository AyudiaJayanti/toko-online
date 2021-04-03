<?php
class Model_kategori  extends CI_Model
{
    public function data_elektronik()
    {
        return $this->db->get_where("tr_barang", array('kategori' => 'Elektronik'));
    }
    public function data_ppria()
    {
        return $this->db->get_where("tr_barang", array('kategori' => 'Pakaian Pria'));
    }
    public function data_pwanita()
    {
        return $this->db->get_where("tr_barang", array('kategori' => 'Pakaian Wanita'));
    }
    public function data_panak()
    {
        return $this->db->get_where("tr_barang", array('kategori' => 'Pakaian Anak'));
    }
    public function data_polahraga()
    {
        return $this->db->get_where("tr_barang", array('kategori' => 'Peralatan Olahraga'));
    }
}
