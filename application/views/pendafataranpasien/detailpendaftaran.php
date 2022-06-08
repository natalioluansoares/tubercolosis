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
            <div class="col-lg-9 center">
                <div class="card m-b-30" style="background-color: rgb(241, 233, 233); color: black">
                    <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                    <p class="text-muted m-b-30 font-14 text-center" style="font-family:Times New Roman">
                        Data Ini Hanya Digunakan Untuk Download Data Diagnosa Pendaftaran Pasien</p>
                    <div class="card-header bg-primary text-white">Input Data Pendaftaran Pasien</div>
                    <div class="card-body">
                        <form class="form-inline">
                            <div class="col-lg-6">
                                <div class="input-group ml-1">
                                    <label class="mr-2">Username:</label>
                                    <select name="namapasien" class="form-control">
                                        <option value="">Silakan Pilih Nama Anda</option>
                                        <option value="<?= ucfirst($this->fungsi->user_login()->username) ?>"><?= ucfirst($this->fungsi->user_login()->username) ?></option>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-default">
                                            <i class="fa fa-user"></i></span></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-2" title="Tampilkan Data Anda"><i class="fa fa-fw fa-eye"></i>Generate</button>
                            <a href="<?= base_url('pendaftaranpasien/downloaddiagnosa'); ?>" class="btn btn-info ml-2" title="Tampilkan Data Anda"><i class="fa fa-fw fa-eye"></i>Diagnosa</a>
                        </form>
                    </div>
                    <?php
                    if ((isset($_GET['namapasien']) && $_GET['namapasien'] != '')) {

                        $namapasien = $_GET['namapasien'];
                        $naran = $namapasien;
                    } else {

                        $namapasien = ('Masukan Nama Anda');
                        $naran = $namapasien;
                    }
                    ?>
                    <div class="alert alert-info">Menampilkan Data Pendaftaran Nama Pasien:
                        <span class="font-weight-bold "><?php echo $namapasien  ?></span>
                    </div>
                    <div class="table-responsive b-0">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead class="table-primary">
                                <tr>
                                    <th>Kode Pasien</th>
                                    <th>Nama Pasien</th>
                                    <th>No Eleitoral</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>ALamat</th>
                                    <th><i class="fa fa-gear (alias)"></i></th>
                                </tr>
                            </thead>
                            <?php foreach ($details as $Dt) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $Dt['kodepasien']; ?></td>
                                        <td><?= $Dt['namapasien']; ?></td>
                                        <td><?= $Dt['nomor_KTP']; ?></td>
                                        <td><?= $Dt['jenis_kelamin']; ?></td>
                                        <td><?= $Dt['umurpasien']; ?></td>
                                        <td><?= $Dt['kecamatan']; ?></td>
                                        <td><a href="<?= base_url('user/downloadlaporanpasien/' . $Dt['idpend']); ?>" title="Click Untuk Download File Pendaftaran Pasien" class="btn btn-default" readonly><i class="fa fa-download"></i></a></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Bulan Pendaftaran</td>
                                        <td><?= $Dt['tgl_diagnosa']; ?></td>
                                    </tr>
                                </tbody>

                            <?php endforeach; ?>
                        </table>
                    </div>
                    <?php if (empty($details)) : ?>
                        <div class="badge bg-danger">
                            <span class="text-center"><i class="fa fa-info-circle"></i>
                                Data Yang Dicari Oleh Anda Harus Sesuai Nama Anda!,
                                Jika Data Dicari Tidak Mendapat Karena Nama Anda Masih Salah....Semoga Anda Berhasil!</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 center">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <h4 class="mt-2" style="font-family:Times New Roman">Berita Penyakit</h4>
                        <p class="text-muted m-b-30 font-14" style="font-family:Times New Roman">
                            Jangan Menyesal Terhadap Kegagalanmu Karena Kegagalan Mengajarmu Untuk Mengerti Apa Itu Perjuangan.</p>
                        <form action="#">
                            <div class="form-group">
                                <div>
                                    <div class="input-group">
                                        <a href="">
                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/unwira.png" class="img-thumbnail" height="" width="850px">
                                            <p style="font-family:Times New Roman" class="text-center">Berita Tuberkolosis</p>
                                        </a>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="input-group">
                                        <a href="">
                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/unwira.png" class="img-thumbnail" height="" width="850px">
                                            <p style="font-family:Times New Roman" class="text-center">Berita Tuberkolosis</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="input-group">
                                        <a href="">
                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/unwira.png" class="img-thumbnail" height="" width="850px">
                                            <p style="font-family:Times New Roman" class="text-center">Berita Tuberkolosis</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="input-group">
                                        <a href="">
                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/unwira.png" class="img-thumbnail" height="" width="850px">
                                            <p style="font-family:Times New Roman" class="text-center">Berita Tuberkolosis</p>
                                        </a>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>