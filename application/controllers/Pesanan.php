<?php

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesanan_Model1');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pesanan';
        $data['pesanan'] = $this->Pesanan_Model1->getAllPesanan();
       
        $this->load->view('templates/header', $data);
        $this->load->view('pesanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pesanan';

        $this->form_validation->set_rules('id_pesan', 'Id Pesan', 'required');
       
        $this->form_validation->set_rules('id_keberangkatan', 'Id Keberangkatan', 'required');
        $this->form_validation->set_rules('id_kursi', 'Id Kursi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required');
        $this->form_validation->set_rules('tanggal_pesan', 'Tanggal Pesan', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pesanan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pesanan_Model1->tambahDataPesanan();
           
            redirect('Pesanan');
        }
    }

    public function hapus($id_pesan)
    {
        $this->Pesanan_Model1->hapusDataPesanan($id_pesan);
       
        redirect('pesanan');
    }

    public function detail($id_pesan)
    {
        $data['judul'] = 'Detail Data Pesanan';
        $data['pesanan'] = $this->Pesanan_Model1->getPesananById($id_pesan);
        $this->load->view('templates/header', $data);
        $this->load->view('pesanan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pesan)
    {
        $data['judul'] = 'Form Ubah Data Pesanan';
        $data['pesanan'] = $this->Pesanan_Model1->getPesananById($id_pesan);
        
        
        $this->form_validation->set_rules('id_keberangkatan', 'Id Keberangkatan', 'required');
        $this->form_validation->set_rules('id_kursi', 'Id Kursi', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required');
        $this->form_validation->set_rules('tanggal_pesan', 'Tanggal Pesan', 'required');
       
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pesanan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pesanan_Model1->ubahDataPesanan();
            
            redirect('pesanan');
        }
    }

}
