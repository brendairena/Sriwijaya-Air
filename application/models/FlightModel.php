<?php

class FlightModel extends CI_Model{

    public function input_data($table,$data){
      $insert = $this->db->insert($table, $data);
      
      if ($insert){
        return TRUE;
      }else{
        return FALSE;
      }
    }

    public function get_data($table){
      $hasil = $this->db->get($table);
      
      return $hasil->result_array();
    }
    
    public function update_penerbangan($table,$nim,$data){
      $this->db->where('id_penerbangan', $nim);
      $update = $this->db->update($table,$data);
      if ($update){
        return TRUE;
      }else{
        return FALSE;
      }
    }
    
    public function get_data_id($table,$id){
      $this->db->where('id_penerbangan',$id);
      $hasil = $this->db->get($table);
      return $hasil->row_array();
    }
    
    public function delete_data($table,$id){
      $this->db->where('id_penerbangan', $id);
      $delete = $this->db->delete($table);
      if ($delete){
        return TRUE;
      }else{
        return FALSE;
      }
    }
}
