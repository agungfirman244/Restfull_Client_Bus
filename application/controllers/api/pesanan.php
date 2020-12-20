<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class pesanan extends REST_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesanan_Model', 'pesanan');
        $this->methods['index_get']['limit'] = 100;
        $this->methods['index_delete']['limit'] = 100;
        $this->methods['index_post']['limit'] = 100;
        $this->methods['index_put']['limit'] = 100;
    }
   
    public function index_get()
    {
        $id_pesan=$this->get('id_pesan');
        if($id_pesan===null){
            $pesanan = $this->pesanan->getPesanan();
        }
        else{
            $pesanan = $this->pesanan->getPesanan($id_pesan);
        }
    
        
     
     if($pesanan){
         $this->response([
             'status'=>true,
             'data' =>$pesanan
         ], REST_Controller::HTTP_OK);
     }
     else{
        $this->response([
            'status'=>false,
            'message' =>'Data tidak ditemukan'
        ], REST_Controller::HTTP_NOT_FOUND);
     }

    }

    public function index_delete()
    {
        $id_pesan=$this->delete('id_pesan');
        if($id_pesan===null){
            $this->response([
                'status'=>false,
                'message' =>'Masukkan data id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else
        {
            if($this->pesanan->deletepesanan($id_pesan) > 0 ){
                //oke
                $this->response([
                    'status'=>true,
                    'id_pesan' =>$id_pesan,
                    'message'=> 'Data berhasil dihapus.'
                ], REST_Controller::HTTP_NO_CONTENT);
            }
            else{
                //id not found
                $this->response([
                    'status'=>false,
                    'message' =>'Data tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'id_pesan' =>$this->post('id_pesan'),
            'id_keberangkatan' =>$this->post('id_keberangkatan'),
            'id_kursi' =>$this->post('id_kursi'),
            'nama' =>$this->post('nama'),
            'alamat' =>$this->post('alamat'),
            'no_hp' =>$this->post('no_hp'),
            'tanggal_pesan' =>$this->post('tanggal_pesan'),
        ];

        if($this->pesanan->createpesanan($data) > 0){
            //oke
            $this->response([
                'status'=>true,
                'message'=> 'Data berhasil ditambahkan.'
            ], REST_Controller::HTTP_CREATED); 
        }else{
            //id not found
            $this->response([
                'status'=>false,
                'message' =>'Data tidak berhasil ditambahkan!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }

    }

    public function index_put()
    {
        $id_pesan = $this->put('id_pesan');
        $data = [
            'id_keberangkatan' =>$this->put('id_keberangkatan'),
            'id_kursi' =>$this->put('id_kursi'),
            'nama' =>$this->put('nama'),
            'alamat' =>$this->put('alamat'),
            'no_hp' =>$this->put('no_hp'),
            'tanggal_pesan' =>$this->put('tanggal_pesan'),
        ];
       
        if($this->pesanan->updatepesanan($data, $id_pesan) > 0){
            //oke
            $this->response([
                'status'=>true,
                'message'=> 'Data berhasil diperbarui.'
            ], REST_Controller::HTTP_NO_CONTENT); 
        }else{
            //id not found
            $this->response([
                'status'=>false,
                'message' =>'Data tidak berhasil diperbarui!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
      
    }


}


