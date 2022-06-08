<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-b-30" style="background-color: rgb(241, 233, 233); color: black">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-info">
                                    <tr>
                                        <th data-priority="1" class="text-center">
                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/logo.png" class="rounded-circle" width="150px">
                                        </th>
                                        <th data-priority="1">
                                            <div class="text-center">
                                                <font size="3" style="font-family:Wide Latin">
                                                    <b>Website Rumah Sakit Kecamatan Fatuberlio</b><br>
                                                    <span style="font-family:Times New Roman">JL.Wekiar. 12-23 Fatuberlio-85225,Manufahi-Timor Leste <br>
                                                        Telp.(0380)833395- 831194</span>
                                                </font><br>
                                                Web:<span style="font-family:Times New Roman; color:#3366cc">
                                                    http//www.fatuberlio.ac.id</span>
                                                Email:<span style="font-family:Times New Roman; color:#3366cc">
                                                    fatuberlio.fatuberliorumahsakit@gmail.com</span>
                                                <hr width="80%">
                                            </div>
                                        </th>
                                        <th data-priority="1" class="text-center">
                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/images.jpg" class="rounded-circle" width="150px">
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?= validation_errors() ?>
            <div class="flash" data-flas1="<?php echo $this->session->flashdata('success'); ?>"></div>
            <div class="col-lg-12">
                <div class="card m-b-0" style="background-color: rgb(241, 233, 233); color: black">
                    <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                    <p class="text-muted m-b-15 font-14 text-center" style="font-family:Times New Roman">
                        Data Ini Hanya Digunakan Untuk Menginput Data Pendaftaran Pasien</p>
                    <div class="card-header bg-primary text-white">Input Data Pendaftaran Pasien</div>
                    <div class="card-body">
                        <form class="form-inline">
                            <div class="form-group ml-1">
                                <label for="staticEmail2">Tanggal:</label>
                                <select class="form-control ml-2" name="tanggal">

                                    <option value="">---Pilih Tanggal---</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group ml-1">
                                <label for="staticEmail2">Bulan:</label>
                                <select class="form-control ml-2" name="bulan">

                                    <option value="">---Pilih Bulan---</option>
                                    <option value="January">Januari</option>
                                    <option value="February">Februari</option>
                                    <option value="March">Maret</option>
                                    <option value="April">April</option>
                                    <option value="May">Mei</option>
                                    <option value="June">Juni</option>
                                    <option value="July">Juli</option>
                                    <option value="August">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="October">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </div>
                            <div class="form-group ml-1">
                                <label for="staticEmail2">Tahun:</label>
                                <select class="form-control ml-2" name="tahun">


                                    <option value="">---Pilih Tahun---</option>

                                    <?php $tahu = date('Y');
                                    for ($i = 2021; $i < $tahu + 5; $i++) {
                                    ?>

                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary ml-2"><i class="fa fa-fw fa-eye"></i>Generate</button>
                        </form>
                    </div>
                    <?php
                    if ((isset($_GET['tanggal']) && $_GET['tanggal'] != '') && (isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {

                        $tanggal = $_GET['tanggal'];
                        $bulan = $_GET['bulan'];
                        $tahun = $_GET['tahun'];
                        $bulantahun = $tanggal . $bulan . $tahun;
                    } else {

                        $tanggal = date('d');
                        $bulan = date('F');
                        $tahun = date('Y');
                        $bulantahun = $tanggal . $bulan . $tahun;
                    }
                    ?>

                    <div class="alert alert-info">Menampilkan Data Pendaftaran Pasien Tanggal:
                        <span class="font-weight-bold "><?php echo $tanggal  ?></span>Bulan:<span class="font-weight-bold "><?php echo $bulan  ?></span>Tahun: <span class="font-weight-bold">
                            <?php echo $tahun  ?></span>
                    </div>
                </div>
                <br>
                <form action="<?= base_url('diagnosa/hasildiagnosa'); ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-6 center">
                            <div class="card m-b-30">
                                <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="namapasien" value="<?= ucfirst($this->fungsi->user_login()->username) ?>" readonly>
                                        <input type="hidden" class="form-control" name="leveluser" id="nama" value="<?= ucfirst($this->fungsi->user_login()->level) ?>" readonly>
                                        <input type="hidden" class="form-control" name="bulan" id="nama" value="<?= $bulantahun; ?>" readonly>
                                        <label for="">Nama Kabupaten</label>
                                        <div class="input-group">
                                            <select name="kabupaten" id="kabupaten" class="form-control">
                                                <option value="">Select Kabupaten</option>
                                                <?php foreach ($kabupaten2 as $ke) : ?>
                                                    <option value="<?= $ke['id']; ?>"><?= $ke['kabupaten']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <?= form_error('kodepasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Nama Kecamatan</label>
                                        <div class="input-group">
                                            <select name="kecamatan" id="kecamatan" class="form-control">
                                                <option value="">Select Kecamatan</option>
                                            </select>
                                        </div>
                                        <?= form_error('kodepasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Nama Kelurahan</label>
                                        <div class="input-group">
                                            <select name="kelurahan" id="kelurahan" class="form-control">
                                                <option value="">Select Kelurahan</option>
                                            </select>
                                        </div>
                                        <?= form_error('kodepasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 center">
                            <div class="card m-b-30">
                                <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                                    <div class="modal-body">
                                        <label for="">Nama Rumah Sakit</label>
                                        <div class="input-group">
                                            <select name="rumahsakit" id="rumahsakit" class="form-control">
                                                <option value="">Select RumahSakit</option>
                                            </select>
                                        </div>
                                        <?= form_error('kodepasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Nama Dokter & Perawat & Bidan</label>
                                        <div class="input-group">
                                            <select name="dokter" id="dokter" class="form-control">
                                                <option value="">Select DokterPerawatBidan</option>
                                            </select>
                                        </div>
                                        <?= form_error('kodepasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Konsultasi Pasien</label>
                                        <div class="input-group">
                                            <select name="konsultasi" id="konsultasi" class="form-control">
                                                <option value="">Select Konsultasi</option>
                                            </select>
                                        </div>
                                        <?= form_error('kodepasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <form action="<?= base_url('diagnosa/hasildiagnosa'); ?>" method="POST"> -->
                    <div class="row">
                        <!-- Column -->
                        <?php foreach ($gejala as $Gejala => $gjl) : ?>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="card m-b-15">
                                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                                        <div class="modal-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-2 align-self-center">
                                                    <div>
                                                        <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/unwira.png" class="rounded-circle" width="90px">
                                                    </div>
                                                </div>
                                                <div class="col-9 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner" style="font-family:Times New Roman">
                                                            <b> Apakah <?= $gjl['nama_gejala']; ?> ?</b>
                                                        </h5>
                                                        <p class="mb-0 text-muted">
                                                            <input type="checkbox" id="<?= $gjl['id']; ?>" name="id_gejala[]" value="<?= $gjl['id']; ?>" class="form-control mb-3">
                                                        </p>
                                                        <button type="submit " class="btn btn-default btn-google form-control-sm" title="Simpan Data Diagnosa Penyakit TBC"><i class="fa fa-fw fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-1 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger">
                                                        <a href=""><span><?= $gjl['kodegejala']; ?></span></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </form>
            </div>
        </div>