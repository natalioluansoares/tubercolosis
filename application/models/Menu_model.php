<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    // MODEL SOLUSI
    public function getsolusi()
    {

        $solusi = "SELECT `solusi` .*, `penyakit` .`nama_penyakit`
                 FROM `solusi` JOIN `penyakit`
                 ON `solusi`.`id_penyakit` = `penyakit`.`id`";

        $nato = $this->db->query($solusi)->result_array();
        return $nato;
    }
    public function getgejala()
    {

        $solusi = "SELECT `gejala` .*, `penyakit` .`nama_penyakit`
                 FROM `gejala` JOIN `penyakit`
                 ON `gejala`.`id_penyakit` = `penyakit`.`id`";

        $nato = $this->db->query($solusi);
        return $nato;
    }


    public function getpenyakit()
    {
        $nato = $this->db->get('penyakit')->result_array();
        return $nato;
    }

    public function getjenisobat()
    {
        $jenisobat = "SELECT `jenis_obat` .*, `solusi`. `isi_solusi`
                              FROM `jenis_obat` JOIN `solusi`
                              ON `jenis_obat`.`id_solusi` = `solusi`.`id`";

        $nato = $this->db->query($jenisobat)->result_array();
        return $nato;
    }


    // Data Model Pendaftaran
    public function getpendaftaranpasie()
    {
        $this->db->select('*');
        $this->db->from('pendafaranpasien');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function pendaftaranpasie()
    {
        $this->db->select('*');
        $this->db->from('pendafaranpasien');
        $this->db->join('dokter_perawat_bidan', 'pendafaranpasien.nama_dokter = dokter_perawat_bidan.id_dopebi', 'nama_dokter', 'LEFT');
        $query = $this->db->get()->result_array();
        return $query;
    }


    public function getdokterperawatbidan()
    {

        $this->db->select('*');
        $this->db->from('dokter_perawat_bidan');
        $this->db->join('rumahsakit', 'dokter_perawat_bidan.namarumahsakit = rumahsakit.id', 'nama_rumahsakit', 'LEFT');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function downloadpendaftaran($id)
    {

        $this->db->select('*');
        $this->db->from('pendafaranpasien');
        $this->db->join('kecamatan', 'pendafaranpasien.alamatpasien = kecamatan.id', 'kecamatan', 'LEFT');
        $this->db->where('idpend', $id);
        $query = $this->db->get()->row_array();
        return $query;

        // $query = "SELECT * FROM pendafaranpasien
        //                     INNER JOIN kecamatan ON pendafaranpasien.userkecamatan = kecamatan.id
        //                     WHERE idpend='$id'";
        // $nato = $this->db->query($query)->row_array();
        // return $nato;
    }

    public function  getdokter($id)
    {
        $this->db->select('*');
        $this->db->from('dokter_perawat_bidan');
        $this->db->join('user', 'dokter_perawat_bidan.nama_dokter = user.id', 'LEFT');
        $this->db->join('kecamatan', 'dokter_perawat_bidan.namakecamatan = kecamatan.id', 'LEFT');
        $this->db->join('rumahsakit', 'dokter_perawat_bidan.namarumahsakit = rumahsakit.id', 'LEFT');
        $this->db->where('id_dopebi', $id);
        $query = $this->db->get();
        return $query;
    }

    public function joindatadiagnosa()
    {
        if ((isset($_GET['namapasien']) && $_GET['namapasien'] != '')) {

            $kecamatan = $_GET['namapasien'];
            $naran = $kecamatan;
        } else {

            $kecamatan = ('Masukan Nama Anda');
            $naran = $kecamatan;
        }
        $this->db->select('*');
        $this->db->from('hasil_diagnosa_penyakit');
        $this->db->join('kabupaten', 'hasil_diagnosa_penyakit.id_kabupaten = kabupaten.id', 'kabupaten', 'LEFT');
        $this->db->join('kecamatan', 'hasil_diagnosa_penyakit.id_kecamatan = kecamatan.id', 'kecamatan', 'LEFT');
        $this->db->join('kelurahan', 'hasil_diagnosa_penyakit.id_kelurahan = kelurahan.id', 'kelurahan', 'LEFT');
        $this->db->join('rumahsakit', 'hasil_diagnosa_penyakit.rumahsakit = rumahsakit.id', 'nama_rumahsakit', 'LEFT');
        $this->db->join('dokter_perawat_bidan', 'hasil_diagnosa_penyakit.id_dokterperawat = dokter_perawat_bidan.id_dopebi', 'nama_dokter', 'LEFT');
        $this->db->join('konsultasi', 'hasil_diagnosa_penyakit.id_konsultasi = konsultasi.id', 'nama_konsultasi', 'LEFT');
        $this->db->where('nama_user', $naran);
        $query = $this->db->get()->result_array();
        return $query;
    }


    public function paginationberitaanual($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('namaterbit', $keyword);
            $this->db->or_like('alamat_berita', $keyword);
            $this->db->or_like('judulberitaanual', $keyword);
            $this->db->or_like('kodeberitaanual', $keyword);
        }
        return $this->db->get('beritaanual', $limit, $start)->result_array();
    }
    public function beritaanualpagination()
    {
        $nato = $this->db->get('beritaanual')->num_rows();
        return $nato;
    }

    public function userpagination()
    {
        $nato = $this->db->get('user')->num_rows();
        return $nato;
    }



    // DATA MODEL SELECT2
    function kabupaten_pasien()
    {
        $this->db->order_by("kabupaten", "ASC");
        $query = $this->db->get("kabupaten");
        return $query->result_array();
    }

    function kecamatan_pasien($kabupaten_id)
    {
        $this->db->where('id_kabupaten', $kabupaten_id);
        $this->db->order_by('kecamatan', 'ASC');
        $query = $this->db->get('kecamatan');
        $output = '<option value="">Select Kecamatan</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->kecamatan . '</option>';
        }
        return $output;
    }

    function kelurahan_pasien($kecamatan_id)
    {
        $this->db->where('id_kecamatan', $kecamatan_id);
        $this->db->order_by('kelurahan', 'ASC');
        $query = $this->db->get('kelurahan');
        $output = '<option value="">Select Kelurahan</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->kelurahan . '</option>';
        }
        return $output;
    }
    function rumahsakit_pasien($kelurahan_id)
    {
        $this->db->where('id_kelurahan', $kelurahan_id);
        $this->db->order_by('nama_rumahsakit', 'ASC');
        $query = $this->db->get('rumahsakit');
        $output = '<option value="">Select RumahSakit</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->nama_rumahsakit . '</option>';
        }
        return $output;
    }
    function dokter_pasien($rumahsakit_id)
    {
        $this->db->select("*");
        $this->db->from("dokter_perawat_bidan");
        $this->db->join('user', 'hasil_diagnosa_penyakit.nama_dokter = user.id', 'username', 'LEFT');
        $this->db->where('namarumahsakit', $rumahsakit_id);
        $this->db->order_by('nama_dokter', 'ASC');
        $query = $this->db->get('dokter_perawat_bidan');
        $output = '<option value="">Select Dokter</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id_dopebi . '">' . $row->nama_dokter . '</option>';
        }
        return $output;
    }
    function konsultasi($dokter_id)
    {
        $this->db->where('id_dokter', $dokter_id);
        $this->db->order_by('nama_konsultasi', 'ASC');
        $query = $this->db->get('konsultasi');
        $output = '<option value="">Select Konsultasi</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->nama_konsultasi . '</option>';
        }
        return $output;
    }
    function penyakit($penyakit_id)
    {
        $this->db->where('id_konsultasi', $penyakit_id);
        $this->db->order_by('nama_penyakit', 'ASC');
        $query = $this->db->get('penyakit');
        $output = '<option value="">Select Penyakit</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->nama_penyakit . '</option>';
        }
        return $output;
    }
    function obat($obat_id)
    {
        $this->db->where('id_penyakit', $obat_id);
        $this->db->order_by('nama_obat', 'ASC');
        $query = $this->db->get('jenis_obat');
        $output = '<option value="">Select Obat</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->nama_obat . '</option>';
        }
        return $output;
    }


    // DATA MODEL LOGIN
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function insertbagianpenyakit($data)
    {
        $this->db->insert('bagianpenyakit', $data);
    }
    public function insertdatadiagnosa($data)
    {
        $this->db->insert('datadiagnosa', $data);
    }

    //  DATA MODEL SUM KECAMATAN
    public function sum_kecamatan()
    {
        $sql = "SELECT sum(jumlah_penduduk) as jumlah_penduduk FROM kecamatan";
        $result = $this->db->query($sql);
        $nato = $result->row()->jumlah_penduduk;
        return $nato;
    }
    public function nato()
    {
        // if ((isset($_GET['kecamatan']) && $_GET['kecamatan'] != '')) {

        //     $kecamatan = $_GET['kecamatan'];
        //     $nato = $kecamatan;
        // } else {

        //     $kecamatan = ('Masukan Kecamatan Anda');
        //     $nato = $kecamatan;
        // }

        // $this->db->select("");
        // $this->db->from('user');
        // $this->db->where('userkecamatan', $nato);
        // $nato = $this->db->get();
        // return $nato;

        if ((isset($_GET['kecamatan']) && $_GET['kecamatan'] != '') && (isset($_GET['doktertbc']) && $_GET['doktertbc'] != '')) {

            $kecamatan = $_GET['kecamatan'];
            $doktertbc = $_GET['doktertbc'];
            $nato = $kecamatan;
            $nat = $doktertbc;
        } else {

            $kecamatan = ('Masukan Kecamatan Anda');
            $doktertbc = ('Masukan Dokter Anda');
            $nato = $kecamatan;
            $nat = $doktertbc;
        }
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('level', $nat);
        $this->db->where('userkecamatan', $nato);
        $nat = $this->db->get();
        return $nat;


        // $this->db->select("*");
        // $this->db->from('user');
        // $this->db->where('level', $nat);
        // $nat = $this->db->get();
        // return $nat;
    }
}
