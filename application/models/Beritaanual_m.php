<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beritaanual_m extends CI_Model{

    public function getberitaanual($id = null){
        $this->db->select('*');
        $this->db->from('beritaanual');
        if($id !=null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function addberitaanual(){
        $kodeberita = $this->input->post('kodeberita');
        $namaberita = $this->input->post('namaberita');
        $params = [
            'kodeberita'    =>$kodeberita,
            'namaberita'    =>$namaberita
        ];
        $this->db->insert('beritaanual', $params);
    }
}