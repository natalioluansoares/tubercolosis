<?php
defined('BASEPATH') or exit('No direct script access allowed');

class relasi_D extends CI_Model
{
    public function relasi_diagnosa()
    {
        $this->db->select('*');
        $this->db->from('relasi_diagnosa');
        $this->db->join('gejala', 'relasi_diagnosa.gejala_id = gejala.id', 'nama_gejala', 'LEFT');
        $this->db->join('penyakit', 'relasi_diagnosa.penyakit_id = penyakit.id', 'nama_penyakit', 'LEFT');
        $this->db->join('solusi', 'relasi_diagnosa.solusi_id = solusi.id', 'isi_solusi', 'LEFT');
        $this->db->join('jenis_obat', 'relasi_diagnosa.obat_id = jenis_obat.id', 'nama_obat', 'LEFT');
        $this->db->join('keterangan', 'relasi_diagnosa.keterangan_id = keterangan.id', 'keterangan', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function addrelasi_diagnosa()
    {
        $gejala = $this->input->post('gejala');
        $penyakit = $this->input->post('penyakit');
        $solusi = $this->input->post('solusi');
        $obat = $this->input->post('obat');
        $keterangan = $this->input->post('keterangan');
        $data = [
            'gejala_id' => $gejala,
            'penyakit_id' => $penyakit,
            'solusi_id' => $solusi,
            'obat_id' => $obat,
            'keterangan_id' => $keterangan
        ];
        $this->db->insert('relasi_diagnosa', $data);
    }

    public function editrelasi_diagnosa()
    {
        $id     = $this->input->post('idrelasi');
        $gejala = $this->input->post('gejala');
        $penyakit = $this->input->post('penyakit');
        $solusi = $this->input->post('solusi');
        $obat = $this->input->post('obat');
        $keterangan = $this->input->post('keterangan');
        $data = [
            'id_relasi' => $id,
            'gejala_id' => $gejala,
            'penyakit_id' => $penyakit,
            'solusi_id' => $solusi,
            'obat_id' => $obat,
            'keterangan_id' => $keterangan
        ];
        $this->db->where('id_relasi', $id);
        $this->db->update('relasi_diagnosa', $data);
    }

    function penyakit_pasien()
    {
        $this->db->order_by("penyakit", "ASC");
        $query = $this->db->get("penyakit");
        return $query->result_array();
    }

    function gejala_pasien($penyakit_id)
    {
        $this->db->where('id_penyakit', $penyakit_id);
        $this->db->order_by('nama_gejala', 'ASC');
        $query = $this->db->get('gejala');
        $output = '<option value="">Select Nama Gejala</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->nama_gejala . '</option>';
        }
        return $output;
    }


    function solusi_pasien($penyakit_id)
    {
        $this->db->where('id_penyakit', $penyakit_id);
        $this->db->order_by('isi_solusi', 'ASC');
        $query = $this->db->get('solusi');
        $output = '<option value="" style="width: 10px;">Select Solusi</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '" style="width: 10%;">' . substr($row->isi_solusi, 0, 50) . '</option>';
            // substr($anual['judulberitaanual'], 0, 60); 
        }
        return $output;
    }
    function obat_pasien($solusi_id)
    {
        $this->db->where('id_solusi', $solusi_id);
        $this->db->order_by('nama_obat', 'ASC');
        $query = $this->db->get('jenis_obat');
        $output = '<option value="" style="width: 10px;">Select Obat</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '" style="width: 10%;">' . $row->nama_obat . '</option>';
            // substr($anual['judulberitaanual'], 0, 60); 
        }
        return $output;
    }
    function keterangan_pasien($obat_id)
    {
        $this->db->where('id_obat', $obat_id);
        $this->db->order_by('keterangan', 'ASC');
        $query = $this->db->get('keterangan');
        $output = '<option value="" style="width: 10px;">Select Keterangan</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '" style="width: 10%;">' . substr($row->keterangan, 0, 50)  . '</option>';
            // substr($anual['judulberitaanual'], 0, 60); 
        }
        return $output;
    }
}
