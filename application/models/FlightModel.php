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


    // public function getFlight(){
    //     $this->db->select(*);
    //     //$this->db->from();
    //     //$que = $this->db->get();
    //     return $que->result();
    // }

    //     public function addFlight(){

    // }

    //     public function hapusFlight($){

    // }

    //     public function editFlight(){
        
    // }
    //     // HOTELS MODELS
    //     public function getHotel(){

    // }
    //     public function addFlight(){

    // }


}
