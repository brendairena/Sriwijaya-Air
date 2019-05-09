<?php

class hotelmodel extends CI_Model{


    public function input_data($ta ble,$data){
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

      public function update_hotel($table,$id,$data){
        $this->db->where('id_hotel', $id);
        $update = $this->db->update($table,$data);
    
        if ($update){
          return TRUE;
        }else{
          return FALSE;
        }
      }
      public function get_data_hotel_id($table,$id){
        $this->db->where('id_hotel',$id);
        $hasil = $this->db->get($table);
        return $hasil->row_array();
      }

      
      public function delete_data_hotel($table,$id){
        $this->db->where('id_hotel', $id);
        $delete = $this->db->delete($table);
    
        if ($delete){
          return TRUE;
        }else{
          return FALSE;
        }
      }

}
