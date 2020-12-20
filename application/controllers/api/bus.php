<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class bus extends REST_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bus_Model', 'bus');
        $this->methods['index_get']['limit'] = 1000;
        $this->methods['index_delete']['limit'] = 1000;
        $this->methods['index_post']['limit'] = 1000;
        $this->methods['index_put']['limit'] = 1000;
    }
   
    public function index_get()
    {
        $id_bus=$this->get('id_bus');
        if($id_bus===null){
            $bus = $this->bus->getBus();
        }
        else{
            $bus = $this->bus->getBus($id_bus);
        }
    
        
     
     if($bus){
         $this->response([
             'status'=>true,
             'data' =>$bus
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
        $id_bus=$this->delete('id_bus');
        if($id_bus===null){
            $this->response([
                'status'=>false,
                'message' =>'Masukkan data id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else
        {
            if($this->bus->deletebus($id_bus) > 0 ){
                //oke
                $this->response([
                    'status'=>true,
                    'id_bus' =>$id_bus,
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
            'id_bus' =>$this->post('id_bus'),
            'no_polis' =>$this->post('no_polis'),
            'kelas' =>$this->post('kelas'),
            'nama_supir' =>$this->post('nama_supir'),
            'nama_kenek' =>$this->post('nama_kenek'),
        ];

        if($this->bus->createbus($data) > 0){
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
        $id_bus = $this->put('id_bus');
        $data = [
            'no_polis' =>$this->put('no_polis'),
            'kelas' =>$this->put('kelas'),
            'nama_supir' =>$this->put('nama_supir'),
            'nama_kenek' =>$this->put('nama_kenek'),
        ];
       
        if($this->bus->updatebus($data, $id_bus) > 0){
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


