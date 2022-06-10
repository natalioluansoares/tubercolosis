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
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <h4 class="mt-2 text-center" style="font-family:Bodoni MT Black"><?= $title; ?></h4>
                        <p class="text-muted m-b-30 font-14 text-center">Data Ini Hanya Digunakan Untuk Menginput Data Dokter</p>
                        <div class="tab-pane active p-3" id="kabupaten" role="tabpanel">
                            <form action="<?= base_url('admin/prosesdokterperawatbidan'); ?>" method="POST">
                                <div class="modal-body">
                                    <label for="namadokter">Nama Dokter</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idnamadokter" class="form-control" value="<?= $dokter['id_dopebi']; ?>">
                                        <input type="text" name="namadokter" class="form-control" value="<?= $dokter['nama_dokter']; ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-user-circle"></i></span></div>
                                    </div>
                                    <div class="text-center">
                                        <?= form_error('namadokter', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div><br>
                                    <label for="jeniskelamain"> Jenis Kelamin</label>
                                    <div class="input-group">
                                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                            <option value="<?= $dokter['jenis_kelamin']; ?>"><?= $dokter['jenis_kelamin']; ?></option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-mars-double "></i></span></div>
                                    </div><br>
                                    <label for="jenisdokter">Jenis Dokter</label>
                                    <div class="input-group">
                                        <select name="jenisdokter" id="jenisdokter" class="form-control">
                                            <option value="<?= $dokter['jenis_dokter']; ?>"><?= $dokter['jenis_dokter']; ?></option>
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
                                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= $dokter['tanggal_lahir']; ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-calendar-times-o"></i></span></div>
                                    </div>
                                    <div class="text-center">
                                        <?= form_error('tanggallahir', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div><br>
                                    <label for="umur">Umur Dokter</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="umur" placeholder="Umur Dokter" name="umur" value="<?= $dokter['umur']; ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-calendar-times-o"></i></span></div>
                                    </div><br>
                                    <?= form_error('umur', '<small class="text-danger pl-2">', '</small>'); ?>
                                    <label for="nomorhp">Nomor HP</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nomorhp" name="nomorhp" value="<?= $dokter['nomor_hp']; ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-phone"></i></span></div>
                                    </div>
                                    <div class="text-center">
                                        <?= form_error('nomorhp', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div><br>
                                    <label for="alamat">Alamat Dokter</label>
                                    <div class="input-group">
                                        <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control" placeholder="Alamat Dokter" value="<?= $dokter['alamat']; ?>"><?= $dokter['alamat']; ?></textarea>
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
                                        <a href="<?= base_url('admin/dokter'); ?>" class="btn btn-danger form-control" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu">Kembali</a>
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