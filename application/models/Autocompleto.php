<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autocompleto extends CI_Model
{
    public function getUsers($postData)
    {

        $response = array();
        $this->db->select('*');
        if ($postData['search']) {

            // Select record
            $this->db->where("kecamatan like '%" . $postData['search'] . "%' ");

            $records = $this->db->get('judulwebsite')->result();

            foreach ($records as $row) {
                $response[] = array(
                    "value" => $row->judul,
                    "value1" => $row->alamatwebsite,
                    "value2" => $row->tlpwebsite,
                    "value3" => $row->websiterumahsakit,
                    "value4" => $row->alamatemail,
                    "label" => $row->kecamatan
                );
            }
        }

        return $response;
    }
}
