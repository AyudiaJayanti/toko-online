<?php
class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg       = $this->input->post('nama_brg');
        $ket            = $this->input->post('keterangan_brg');
        $kategori       = $this->input->post('kategori_brg');
        $harga          = $this->input->post('harga_brg');
        $stok           = $this->input->post('stok_brg');
        $gambar         = $_FILES['gambar']['name'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_type'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal upload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_brg'  => $nama_brg,
            'ket'       => $ket,
            'kategori'  => $kategori,
            'harga'     => $harga,
            'stok'      => $stok,
            'gambar'    => $gambar

        );
        $this->model_barang->tambah_barang($data, 'tr_barang');
        redirect('admin/data_barang/index');
    }
    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tr_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update()
    {
        $id         = $this->input->post('id_brg');
        $nama_brg   = $this->input->post('nama_brg');
        $ket        = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');

        $data = array(
            'nama_brg'  => $nama_brg,
            'ket'       => $ket,
            'kategori'  => $kategori,
            'harga'     => $harga,
            'stok'      => $stok
        );
        $where = array(
            'id_brg' => $id
        );
        $this->model_barang->update_data($where, $data, 'tr_barang');
        redirect('admin/data_barang/index');
    }
    public function hapus($id)
    {
        $where = array('id_brg' => $id);
        $this->model_barang->hapus_data($where, 'tr_barang');
        redirect('admin/data_barang/index');
    }
}
