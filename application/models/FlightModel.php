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

      public function update_data($table,$nim,$data){
        $this->db->where('nim', $nim);
        $update = $this->db->update($table,$data);
    
        if ($update){
          return TRUE;
        }else{
          return FALSE;
        }
      }


}
