kecamatan
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
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
            <div class="flash" data-flas1="<?php echo $this->session->flashdata('success'); ?>"></div>
            <div class="col-lg-12 center">
                <div class="card m-b-30" style="background-color: rgb(241, 233, 233); color: black">
                    <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                    <p class="text-muted m-b-30 font-14 text-center" style="font-family:Times New Roman">
                        Data Ini Hanya Digunakan Untuk Download Data Diagnosa Pendaftaran Pasien</p>
                    <div class="card-body">
                        <div class="table-responsive b-0">
                            <table class="table table-bordered table-striped" id="datatable">
                                <thead class="table-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Dokter</th>
                                        <th>Nama Pasien</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nomor KTP</th>
                                        <th>Umur</th>
                                        <th>ALamat</th>
                                        <td>Tanggal Pendaftaran</td>
                                        <th><i class="fa fa-gear (alias)"></i></th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($details as $Dt) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++;  ?></td>
                                            <td><?= $Dt['nama_dokter']; ?></td>
                                            <td><?= $Dt['namapasien']; ?></td>
                                            <td><?= $Dt['jenis_kelamin']; ?></td>
                                            <td><?= $Dt['tanggal_lahir']; ?></td>
                                            <td><?= $Dt['nomor_KTP']; ?></td>
                                            <td><?= $Dt['umurpasien']; ?></td>
                                            <td><?= $Dt['alamatpasien']; ?></td>
                                            <td><?= date('d,F,Y', $Dt['tgl_diagnosa']); ?></td>
                                            <td><a href="<?= base_url('admin/downloadpasien'); ?>" title="Click Untuk Download File Pendaftaran Pasien" class="btn btn-default" readonly><i class="fa fa-download"></i></a></td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>