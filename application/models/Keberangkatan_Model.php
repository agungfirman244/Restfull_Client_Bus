<?php

class Keberangkatan_Model extends CI_Model
{
    public function getKeberangkatan($id_keberangkatan = null)
    {
        if( $id_keberangkatan===null){
            return $this->db->get('keberangkatan')->result_array();
        }
        else{
            return $this->db->get_where('keberangkatan',['id_keberangkatan'=>$id_keberangkatan])->result_array();
        }
       
    }

    public function deleteKeberangkatan($id_keberangkatan)
    {
        
        $this->db->delete('keberangkatan',['id_keberangkatan'=> $id_keberangkatan]);
        return $this->db->affected_rows();
        
    }

    public function createKeberangkatan($data)
    {
        
        $this->db->insert('keberangkatan', $data);
        return $this->db->affected_rows();
        
    }

    public function updateKeberangkatan($data, $id_keberangkatan)
    {
        
        $this->db->update('keberangkatan', $data, ['id_keberangkatan'=>$id_keberangkatan]);
        return $this->db->affected_rows();
        
    }


}