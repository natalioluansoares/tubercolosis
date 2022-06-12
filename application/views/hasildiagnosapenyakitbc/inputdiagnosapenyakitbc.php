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
                    <div class="card-header bg-primary text-white">
                        <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                        <p class="text-white m-b-15 font-16 text-center" style="font-family:Times New Roman">
                            Data Ini Hanya Digunakan Untuk Menginput Data Diagnosa Pasien Tubercolosis</p>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('diagnosa/hasildiagnosa'); ?>" method="POST">
                            <div class="row">
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
                                                                <button type="submit" class="btn btn-primary btn-google form-control-sm" title="Simpan Data Diagnosa Penyakit TBC">Simpan</button>
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