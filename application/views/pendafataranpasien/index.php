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
            <div class="col-lg-9">
                <div class="card m-b-3" style="background-color: rgb(241, 233, 233); color: black">
                    <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                    <p class="text-muted m-b-30 font-16 text-center" style="font-family:Times New Roman">
                        Data Ini Hanya Digunakan Untuk Menginput Data Pendaftaran Pasien</p>
                    <div class="card-header bg-primary text-white">Input Data Pendaftaran Pasien</div>
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
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
                        $tanggalbulantahun = $tanggal . $bulan . $tahun;
                    } else {

                        $tanggal = date('d-');
                        $bulan = date('F-');
                        $tahun = date('Y');
                        $tanggalbulantahun = $tanggal . $bulan . $tahun;
                    }
                    ?>

                    <div class="alert alert-info">Menampilkan Data Pendaftaran Pasien Tanggal:
                        <span class="font-weight-bold mr-2"><?php echo ($tanggal)  ?></span>Bulan:<span class="font-weight-bold mr-2"><?php echo $bulan  ?></span>Tahun: <span class="font-weight-bold">
                            <?php echo $tahun  ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card m-b-0">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <div class="input-group">
                            <div>
                                <div class="input-group">
                                    <h4 class="mt-2" style="font-family:Times New Roman">Berita Penyakit</h4>
                                    <p class="text-muted m-b-5 font-14" style="font-family:Times New Roman">
                                        Jangan Menyesal Terhadap Kegagalanmu Karena Kegagalan Mengajarmu Untuk Mengerti Apa Itu Perjuangan.</p>
                                    <a href="">
                                        <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/unwira.png" class="img-thumbnail" height="" width="850px">
                                        <p style="font-family:Times New Roman" class="text-center">Berita Tuberkolosis</p>
                                    </a>
                                </div><!-- input-group -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-9 center">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <form action="<?= base_url('pendaftaranpasien'); ?>" method="POST">
                            <div class="modal-body">
                                <input type="text" class="form-control" name="tanggaldiagnosa" id="nama" value="<?= $tanggalbulantahun; ?>" readonly>
                                <label for="">Kode Pasien</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="kodepasien" name="kodepasien" value="<?= set_value('kodepasien'); ?>" placeholder="Kode Pasien">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil"></i></span></div>
                                </div>
                                <?= form_error('kodepasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                <label for="">Nama Pasien</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="namapasien" placeholder="Nama Pasien" name="namapasien" value="<?= ucfirst($this->fungsi->user_login()->username) ?>" readonly>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-user-circle"></i></span></div>
                                </div>
                                <?= form_error('namapasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                <label for="">Nomor Eleitoral</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nomoreleitpral" placeholder="Nomor Eletoral" name="nomoreleitoral" value="<?= set_value('nomoreleitoral'); ?>">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-qrcode"></i></span></div>
                                </div>
                                <?= form_error('nomoreleitoral', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                <label for="">Jenis Kelamin</label>
                                <div class="input-group">
                                    <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                        <option value="">J kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>

                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-mars-double"></i></span></div>
                                </div>
                                <?= form_error('alamatberita', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                <label for="">Tanggal Lahir Pasien</label>
                                <div class="input-group">
                                    <input type="date" class="form-control " id="tanggallahirpasien" name="tanggallahirpasien" value="<?= set_value('tanggallahirpasien'); ?>" placeholder="Tanggal Lahir Pasien">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa fa-blind"></i></span></div>
                                </div>
                                <?= form_error('tanggallahirpasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                <label for="">Umur Pasien</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="umurpasien" name="umurpasien" value="<?= set_value('umurpasien'); ?>" placeholder="Umur Pasien">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa fa-blind"></i></span></div>
                                </div>
                                <?= form_error('umurpasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                <label for="">Alamat Pasien</label>
                                <div class="input-group">
                                    <select name="alamatpasien" id="" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $ke) : ?>
                                            <option value="<?= $ke['id'] ?>"><?= $ke['kecamatan'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-folder-open-o "></i></span></div>
                                </div>
                                <?= form_error('alamatpasien', '<small class="text-danger pl-2">', '</small>'); ?><br>
                            </div>
                            <div class="modal-footer">
                                <a href="<?= base_url('beritaanual/anual'); ?>" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></a>
                                <button type="submit" class="btn btn-success" title="Click Untuk Input Data Pasien"><i class="fa fa-send (alias)"></i></button>
                            </div>
                        </form>
                    </div>
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