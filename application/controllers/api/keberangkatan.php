<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class keberangkatan extends REST_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Keberangkatan_Model', 'keberangkatan');
        $this->methods['index_get']['limit'] = 100;
        $this->methods['index_delete']['limit'] = 100;
        $this->methods['index_post']['limit'] = 100;
        $this->methods['index_put']['limit'] = 100;
    }
   
    public function index_get()
    {
        $id_keberangkatan=$this->get('id_keberangkatan');
        if($id_keberangkatan===null){
            $keberangkatan = $this->keberangkatan->getKeberangkatan();
        }
        else{
            $keberangkatan = $this->keberangkatan->getKeberangkatan($id_keberangkatan);
        }
    
        
     
     if($keberangkatan){
         $this->response([
             'status'=>true,
             'data' =>$keberangkatan
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
        $id_keberangkatan=$this->delete('id_keberangkatan');
        if($id_keberangkatan===null){
            $this->response([
                'status'=>false,
                'message' =>'Masukkan data id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else
        {
            if($this->keberangkatan->deletekeberangkatan($id_keberangkatan) > 0 ){
                //oke
                $this->response([
                    'status'=>true,
                    'id_keberangkatan' =>$id_keberangkatan,
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
            'id_keberangkatan' =>$this->post('id_keberangkatan'),
            'id_bus' =>$this->post('id_bus'),
            'tujuan' =>$this->post('tujuan'),
            'tanggal_keberangkatan' =>$this->post('tanggal_keberangkatan'),
            'jam_keberangkatan' =>$this->post('jam_keberangkatan'),
            'rute_awal' =>$this->post('rute_awal'),
            'rute_tujuan' =>$this->post('rute_tujuan'),
            'harga' =>$this->post('harga'),
        ];

        if($this->keberangkatan->createkeberangkatan($data) > 0){
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
        $id_keberangkatan = $this->put('id_keberangkatan');
        $data = [
            'id_bus' =>$this->put('id_bus'),
            'tujuan' =>$this->put('tujuan'),
            'tanggal_keberangkatan' =>$this->put('tanggal_keberangkatan'),
            'jam_keberangkatan' =>$this->put('jam_keberangkatan'),
            'rute_awal' =>$this->put('rute_awal'),
            'rute_tujuan' =>$this->put('rute_tujuan'),
            'harga' =>$this->put('harga'),
        ];
       
        if($this->keberangkatan->updatekeberangkatan($data, $id_keberangkatan) > 0){
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


