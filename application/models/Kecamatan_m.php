<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_m extends CI_Model{

    function cari_kecamatan($kecamatan){
        $this->db->like('kecamatan', $kecamatan);
        $this->db->order_by('kecamatan','ASC');
        $this->db->limit(10);
        $nato = $this->db->get('kecamatan')->result();
        return $nato;
    }
}