<?php

class Bus_Model extends CI_Model
{
    public function getBus($id_bus = null)
    {
        if( $id_bus===null){
            return $this->db->get('bus')->result_array();
        }
        else{
            return $this->db->get_where('bus',['id_bus'=>$id_bus])->result_array();
        }
       
    }

    public function deleteBus($id_bus)
    {
        
        $this->db->delete('bus',['id_bus'=> $id_bus]);
        return $this->db->affected_rows();
        
    }

    public function createBus($data)
    {
        
        $this->db->insert('bus', $data);
        return $this->db->affected_rows();
        
    }

    public function updateBus($data, $id_bus)
    {
        
        $this->db->update('bus', $data, ['id_bus'=>$id_bus]);
        return $this->db->affected_rows();
        
    }


}