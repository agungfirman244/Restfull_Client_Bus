<?php

class Kursi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kursi_Model1');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Kursi';
        $data['kursi'] = $this->Kursi_Model1->getAllKursi();
        
        $this->load->view('templates/header', $data);
        $this->load->view('kursi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Kursi';

        $this->form_validation->set_rules('id_kursi', 'Id Kursi', 'required');
        $this->form_validation->set_rules('kode_kursi', 'Kode Kursi', 'required');
        $this->form_validation->set_rules('urutan', 'Urutan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kursi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kursi_Model1->tambahDataKursi();
           
            redirect('kursi');
        }
    }

    public function hapus($id_kursi)
    {
        $this->Kursi_Model1->hapusDataKursi($id_kursi);
     
        redirect('kursi');
    }

    public function detail($id_kursi)
    {
        $data['judul'] = 'Detail Data Kursi';
        $data['kursi'] = $this->Kursi_Model1->getKursiById($id_kursi);
        $this->load->view('templates/header', $data);
        $this->load->view('kursi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_kursi)
    {
        $data['judul'] = 'Form Ubah Data Kursi';
        $data['kursi'] = $this->Kursi_Model1->getKursiById($id_kursi);
        
        $this->form_validation->set_rules('kode_kursi', 'Kode Kursi', 'required');
        $this->form_validation->set_rules('urutan', 'Urutan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kursi/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kursi_Model1->ubahDataKursi();
            
            redirect('kursi');
        }
    }

}
