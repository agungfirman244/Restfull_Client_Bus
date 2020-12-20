<?php 
use GuzzleHttp\Client;
class Bus_Model1 extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/Restfull_Client_Bus/api/',
           
         ]);
    }


    public function getAllBus()
    {
       
        $response = $this->_client->request('GET', 'bus', [
            'query' => [
                'X-API-KEY' => 'agung'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
        
    }

    public function getBusById($id_bus)
    {
        $response = $this->_client->request('GET', 'bus', [
            'query' => [
                'X-API-KEY' => 'agung',
                'id_bus' => $id_bus
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
        
    }


    public function tambahDataBus()
    {
   
        $data = [
            'id_bus' =>$this->input->post('id_bus', true),
            'no_polis' =>$this->input->post('no_polis', true),
            'kelas' =>$this->input->post('kelas', true),
            'nama_supir' =>$this->input->post('nama_supir', true),
            'nama_kenek' =>$this->input->post('nama_kenek', true),
            'X-API-KEY' => 'agung'
        ];
        $response = $this->_client->request('POST', 'bus', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

       
    }

    public function hapusDataBus($id_bus)
    {
        $response = $this->_client->request('DELETE', 'bus', [
            'form_params' => [
                'id_bus' => $id_bus,
                'X-API-KEY' => 'agung'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
        
        
       
    }

    

    public function ubahDataBus()
    {
        $data = [
            'no_polis' =>$this->input->post('no_polis', true),
            'kelas' =>$this->input->post('kelas', true),
            'nama_supir' =>$this->input->post('nama_supir', true),
            'id_bus' =>$this->input->post('id_bus', true),
            'nama_kenek' =>$this->input->post('nama_kenek', true),
            'X-API-KEY' => 'agung'
        ];

        $response = $this->_client->request('PUT', 'bus', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

        
    }

    
}