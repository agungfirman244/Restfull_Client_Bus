<?php

class Kursi_Model extends CI_Model
{
    public function getKursi($id_kursi = null)
    {
        if( $id_kursi===null){
            return $this->db->get('kursi')->result_array();
        }
        else{
            return $this->db->get_where('kursi',['id_kursi'=>$id_kursi])->result_array();
        }
       
    }

    public function deleteKursi($id_kursi)
    {
        
        $this->db->delete('kursi',['id_kursi'=> $id_kursi]);
        return $this->db->affected_rows();
        
    }

    public function createKursi($data)
    {
        
        $this->db->insert('kursi', $data);
        return $this->db->affected_rows();
        
    }

    public function updateKursi($data, $id_kursi)
    {
        
        $this->db->update('kursi', $data, ['id_kursi'=>$id_kursi]);
        return $this->db->affected_rows();
        
    }


}