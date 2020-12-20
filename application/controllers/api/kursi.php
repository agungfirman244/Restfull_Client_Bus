<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class kursi extends REST_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kursi_Model', 'kursi');
        $this->methods['index_get']['limit'] = 100;
        $this->methods['index_delete']['limit'] = 100;
        $this->methods['index_post']['limit'] = 100;
        $this->methods['index_put']['limit'] = 100;
    }
   
    public function index_get()
    {
        $id_kursi=$this->get('id_kursi');
        if($id_kursi===null){
            $kursi = $this->kursi->getKursi();
        }
        else{
            $kursi = $this->kursi->getKursi($id_kursi);
        }
    
        
     
     if($kursi){
         $this->response([
             'status'=>true,
             'data' =>$kursi
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
        $id_kursi=$this->delete('id_kursi');
        if($id_kursi===null){
            $this->response([
                'status'=>false,
                'message' =>'Masukkan data id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else
        {
            if($this->kursi->deletekursi($id_kursi) > 0 ){
                //oke
                $this->response([
                    'status'=>true,
                    'id_kursi' =>$id_kursi,
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
            'id_kursi' =>$this->post('id_kursi'),
            'kode_kursi' =>$this->post('kode_kursi'),
            'urutan' =>$this->post('urutan'),
           
        ];

        if($this->kursi->createkursi($data) > 0){
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
        $id_kursi = $this->put('id_kursi');
        $data = [
            'kode_kursi' =>$this->put('kode_kursi'),
            'urutan' =>$this->put('urutan'),
            
        ];
       
        if($this->kursi->updatekursi($data, $id_kursi) > 0){
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


