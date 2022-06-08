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
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <h4 class="mt-2 text-center" style="font-family:Bodoni MT Black"><?= $title; ?></h4>
                        <h3 class="text-muted m-b-30 font-18 text-center" style="font-family:Times New Roman">
                            Data Ini Hanya Digunakan Untuk Pendaftaran Dokter</h3>
                        <div class="card-header bg-primary text-white">Input Data Pendaftaran Dokter</div>
                        <div class="card-body">
                            <form class="form-inline">
                                <div class="form-group ml-1">
                                    <label for="staticEmail2">Kecamatan Dokter:</label>
                                    <select class="form-control ml-2" name="kecamatan">
                                        <option value="">---Pilih Kecamatan Dokter---</option>
                                        <option value="<?= ucfirst($this->fungsi->user_login()->userkecamatan) ?>">
                                            <?= ucfirst($this->fungsi->user_login()->userkecamatan) ?></option>
                                    </select>
                                </div>
                                <div class="form-group ml-1">
                                    <label for="staticEmail2">Dokter TBC:</label>
                                    <select class="form-control ml-2" name="doktertbc">
                                        <option value="">---Pilih Kecamatan Dokter---</option>
                                        <option value="dokter">dokter</option>
                                    </select>
                                </div>
                                <div class="form-group ml-1">
                                    <label for="staticEmail2">Cari Perawat:</label>
                                    <select class="form-control ml-2" name="perawat">

                                        <option value="">---Pilih Perawat---</option>
                                        <option value="perawat">perawat</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary ml-2"><i class="fa fa-fw fa-eye"></i>Generate</button>
                            </form>
                        </div>
                        <?php
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
                        ?>


                        <div class="alert alert-info">Menampilkan Data Pendaftaran Pasien Kecamatan:
                            <span class="font-weight-bold mr-3"><?php echo $kecamatan  ?></span>
                            Dokter:<span class="font-weight-bold mr-3"><?php echo $doktertbc  ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flash" data-flas1="<?php echo $this->session->flashdata('success'); ?>"></div>
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                                <div class="tab-pane active p-3" id="kabupaten" role="tabpanel">
                                    <form action="<?= base_url('dokterperawatbidan/adddokterperawatbidan'); ?>" method="POST">
                                        <div class="modal-body">
                                            <label for="namadokter">Nama Dokter</label>
                                            <div class="input-group">
                                                <select class="form-control" id="namadokter" placeholder="Nama Dokter" name="namadokter">
                                                    <option value="">Pilih Nama Dokter & Perawat</option>
                                                    <?php foreach ($dokter as $do) : ?>
                                                        <option value="<?= $do['username'] ?>"><?= $do['username'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <!-- <input type="text" class="form-control" id="namadokter" placeholder="Nama Dokter" name="namadokter" value="<?= set_value('namadokter'); ?>"> -->
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn-group-xs btn-primary">
                                                        <i class="fa fa-fw fa-eye"></i></button></span></div>
                                            </div>
                                            <div class="text-center">
                                                <?= form_error('namadokter', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div><br>
                                            <label for="jeniskelamain"> Jenis Kelamin</label>
                                            <div class="input-group">
                                                <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-mars-double "></i></span></div>
                                            </div><br>
                                            <label for="jenisdokter">Jenis Dokter</label>
                                            <div class="input-group">
                                                <select name="jenisdokter" id="jenisdokter" class="form-control">
                                                    <option value="Dokter Umum">Pilih Dokter & Perawat & Bidan</option>
                                                    <option value="Dokter Umum">Dokter Umum</option>
                                                    <option value="Dokter Special Jantung">Dokter Special Jantung</option>
                                                    <option value="Dokter Special Paru">Dokter Special Paru</option>
                                                    <option value="Dokter Special Bedah">Dokter Special Bedah</option>
                                                    <option value="Perawat">Perawat</option>
                                                    <option value="Bidan">Bidan</option>
                                                </select>
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-user-md"></i></span></div>
                                            </div><br>
                                            <label for="tanggallahir">Tanggal Lahir</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-calendar-times-o"></i></span></div>
                                            </div>
                                            <div class="text-center">
                                                <?= form_error('tanggallahir', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div><br>
                                            <label for="umur">Umur Dokter</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="umur" placeholder="Umur Dokter" name="umur" value="<?= set_value('umur'); ?>">
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-calendar-times-o"></i></span></div>
                                            </div><br>
                                            <?= form_error('umur', '<small class="text-danger pl-2">', '</small>'); ?>
                                            <label for="tempattinggal"> Tempat Tinggal</label>
                                            <div class="input-group">
                                                <select name="kecamatan" class="form-control">
                                                    <option value="">Pilih Kecamatan</option>
                                                    <?php foreach ($kecamat as $r) : ?>
                                                        <option value="<?= $r['kecamatan']; ?>"><?= $r['kecamatan']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-phone"></i></span></div>
                                            </div><br>
                                            <label for="nomorhp">Nomor HP</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nomorhp" name="nomorhp" value="<?= set_value('nomorhp'); ?>">
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-phone"></i></span></div>
                                            </div>
                                            <div class="text-center">
                                                <?= form_error('nomorhp', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div><br>
                                            <label for="rumahsakit">Rumah Sakit</label>
                                            <div class="input-group">
                                                <select name="rumahsakit" class="form-control">
                                                    <option value="">Pilih Rumah Sakit</option>
                                                    <?php foreach ($rumahsakit as $rs) : ?>
                                                        <option value="<?= $rs['id']; ?>"><?= $rs['nama_rumahsakit']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-mars-double "></i></span></div>
                                            </div><br>
                                            <label for="alamat">Alamat Dokter</label>
                                            <div class="input-group">
                                                <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control" placeholder="Alamat Dokter" value="<?= set_value('alamat'); ?>"></textarea>
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                        <i class="fa fa-folder-open-o "></i></span></div>
                                            </div>
                                            <div class="text-center">
                                                <?= form_error('alamat', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div><br>
                                            <div class="form-group">
                                                <h6 class="text-muted">Picture User</h6>
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/nato.png" class="img-thumbnail" width="200px">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                                <label for="image" class="custom-file-label">Choose File</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <a href="<?= base_url('dokterperawatbidan'); ?>" class="btn btn-danger form-control" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu">Kembali</a>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success form-control" title="Click Untuk Input Data Menu">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>