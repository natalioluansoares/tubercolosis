<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_diagnosa extends CI_Model
{
    public function getuser_gejala()
    {
        $this->db->truncate('user_gejala');
    }
    public function getaturan_hasil_diagnosa_penyakit()
    {
        $this->db->truncate('aturan_hasil_diagnosa_penyakit');
    }
    public function insertuser_gejala()
    {
        $gejala = $this->input->post('id_gejala');
        $username = ($this->fungsi->user_login()->id);
        foreach ($gejala as $g) {
            $data = [
                'id_user' => $username,
                'gejala_id' => $g
            ];

            $this->db->insert('user_gejala', $data);
        }
    }
    public function aturan_hasil_diagnosa_penyakit()
    {
        $query = "SELECT `user_gejala`.`gejala_id`,`relasi_diagnosa`.`penyakit_id`, `relasi_diagnosa`.`solusi_id`, 
        `relasi_diagnosa`.`obat_id`, `relasi_diagnosa`.`keterangan_id`
        FROM `relasi_diagnosa` JOIN `user_gejala` 
        ON `user_gejala`.`gejala_id` = `relasi_diagnosa`.`gejala_id`";
        return $this->db->query($query)->result_array();
    }




    public function detailDiagnosa()
    {
        // $query = "SELECT `aturan_hasil_diagnosa_penyakit`.`id_penyakit`,`penyakit`.`nama_penyakit`,
        // `aturan_hasil_diagnosa_penyakit`.`id_solusi`,`solusi`.`isi_solusi`
        // FROM `aturan_hasil_diagnosa_penyakit` JOIN `penyakit`
        // ON `aturan_hasil_diagnosa_penyakit`.`id_penyakit` = `penyakit`.`id` FROM `aturan_hasil_diagnosa_penyakit` JOIN `solusi`
        // ON `aturan_hasil_diagnosa_penyakit`.`id_solusi` = `solusi`.`id` 
        // GROUP BY `id_penyakit` DESC LIMIT 1";
        // return $this->db->query($query)->result_array();

        $this->db->select('aturan_hasil_diagnosa_penyakit.penyakit_id,penyakit.nama_penyakit,
        aturan_hasil_diagnosa_penyakit.solusi_id,solusi.isi_solusi,
        aturan_hasil_diagnosa_penyakit.obat_id,jenis_obat.nama_obat,
        aturan_hasil_diagnosa_penyakit.keterangan_id,keterangan.keterangan');
        $this->db->from('aturan_hasil_diagnosa_penyakit');
        $this->db->join('penyakit', 'aturan_hasil_diagnosa_penyakit.penyakit_id = penyakit.id', 'nama_penyakit', 'LEFT');
        $this->db->join('solusi', 'aturan_hasil_diagnosa_penyakit.solusi_id  = solusi.id', 'isi_solusi', 'LEFT');
        $this->db->join('jenis_obat', 'aturan_hasil_diagnosa_penyakit.obat_id  = jenis_obat.id', 'nama_obat', 'LEFT');
        $this->db->join('keterangan', 'aturan_hasil_diagnosa_penyakit.keterangan_id  = keterangan.id', 'keterangan', 'LEFT');
        // $this->db->where('id_aturan');
        $this->db->group_by('id_penyakit');
        return $this->db->get()->result_array();
    }
    public function insertHasil()
    {
        // $username = ($this->fungsi->user_login()->username);
        // $level = ($this->fungsi->user_login()->level);

        $namapaisen             = $this->input->post('namapasien');
        $leveluser              = $this->input->post('leveluser');
        $namapasien             = $this->input->post('namapasien');
        $kabupaten              = $this->input->post('kabupaten');
        $kecamatan              = $this->input->post('kecamatan');
        $kelurahan              = $this->input->post('kelurahan');
        $rumahsakit             = $this->input->post('rumahsakit');
        $dokter                 = $this->input->post('dokter');
        $konsultasi             = $this->input->post('konsultasi');
        $bulan                  = $this->input->post('bulan');
        $tubercolosis = $this->detailDiagnosa();
        foreach ($tubercolosis as $k) {
            $penyakitnya = $k['nama_penyakit'];
            $isi_solusi = $k['isi_solusi'];
            $isi_solusi = $k['isi_solusi'];
            $nama_obat = $k['nama_obat'];
            $keterangan = $k['keterangan'];
        }

        $data = [
            'nama_user'             => $namapaisen,
            'user_level'            => $leveluser,
            'nama_penyakit'         => $penyakitnya,
            'isi_solusi'            => $isi_solusi,
            'nama_obat'             => $nama_obat,
            'keterangan'            => $keterangan,
            'id_kabupaten'          => $kabupaten,
            'id_kecamatan'          => $kecamatan,
            'id_kelurahan'          => $kelurahan,
            'rumahsakit'            => $rumahsakit,
            'id_dokterperawat'      => $dokter,
            'id_konsultasi'         => $konsultasi,
            'tanggal_diagnosa'      => $bulan
        ];
        $nato = $this->db->insert('hasil_diagnosa_penyakit', $data);
        return $nato;
    }
    public function alamatHasil()
    {
        // $username = ($this->fungsi->user_login()->username);
        // $level = ($this->fungsi->user_login()->level);

        $namapaisen             = $this->input->post('namapasien');
        $leveluser              = $this->input->post('leveluser');
        $namapasien             = $this->input->post('namapasien');
        $kabupaten              = $this->input->post('kabupaten');
        $kecamatan              = $this->input->post('kecamatan');
        $kelurahan              = $this->input->post('kelurahan');
        $rumahsakit             = $this->input->post('rumahsakit');
        $dokter                 = $this->input->post('dokter');
        $konsultasi             = $this->input->post('konsultasi');
        $bulan                  = $this->input->post('bulan');
        $tubercolosis = $this->detailDiagnosa();
        foreach ($tubercolosis as $k) {
            $penyakitnya = $k['nama_penyakit'];
            $isi_solusi = $k['isi_solusi'];
        }

        $data = [
            'nama_user'             => $namapaisen,
            'user_level'            => $leveluser,
            'nama_penyakit'         => $penyakitnya,
            'isi_solusi'            => $isi_solusi,
            'id_kabupaten'          => $kabupaten,
            'id_kecamatan'          => $kecamatan,
            'id_kelurahan'          => $kelurahan,
            'rumahsakit'            => $rumahsakit,
            'id_dokterperawat'      => $dokter,
            'id_konsultasi'         => $konsultasi,
            'tanggal_diagnosa'      => $bulan
        ];
        $nato = $this->db->insert('hasil_diagnosa_penyakit', $data);
        return $nato;
    }
}
