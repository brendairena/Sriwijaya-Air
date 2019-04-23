<?php

class hotelmodel extends CI_Model{


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

}
