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
                            Data Ini Hanya Digunakan Untuk Download Data Diagnosa Pendaftaran Pasien</h3>
                        <div class="card-header bg-primary text-white">Input Data Pendaftaran Pasien</div>
                        <div class="card-body">
                            <form class="form-inline">
                                <div class="col-lg-5">
                                    <div class="input-group mt-2">
                                        <label class="mr-2">Kecamatan:</label>
                                        <select name="kecamatan" id="" class="form-control">
                                            <option value="">Pilih Kecamatan</option>

                                            <option value="<?= ucfirst($this->fungsi->user_login()->userkecamatan) ?>">
                                                <?= ucfirst($this->fungsi->user_login()->userkecamatan) ?></option>

                                        </select>
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-default">
                                                <i class="fa fa-user"></i></span></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary ml-3 mt-2" title="Tampilkan Data Pasien"><i class="fa fa-fw fa-eye"></i>Generate</button>
                            </form>
                        </div>
                        <?php
                        if ((isset($_GET['kecamatan']) && $_GET['kecamatan'] != '')) {

                            $kecamatan = $_GET['kecamatan'];
                            $posto = $kecamatan;
                        } else {

                            $kecamatan = ('Masukan Kecamatan Anda');
                            $posto = $kecamatan;
                        }
                        ?>
                        <div class="alert alert-info">Menampilkan Data Pendaftaran Kecamatan Pasien:
                            <span class="font-weight-bold "><?php echo $kecamatan  ?></span>
                        </div>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <p class="font-14 mb-0">
                        <table id="datatable" class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th>#</th>
                                    <th data-priority="1">Nama Lengkap</th>
                                    <th data-priority="1">Jenis Kelamin</th>
                                    <th data-priority="1">Jenis Dokter</th>
                                    <th data-priority="1">Umur</th>
                                    <th data-priority="1">Tanggal Lahir</th>
                                    <th data-priority="1">Tempat Lahir</th>
                                    <th data-priority="1">Nomor Hp</th>
                                    <!-- <th data-priority="1">Alamat</th> -->
                                    <th data-priority="1">Rumahsakit</th>
                                    <th data-priority="1" class="text-center"><i class="fa fa-cog "></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($dokter as $dpb) : ?>
                                    <tr>
                                        <th> <span class="co-name"><?= $no++; ?></span></th>
                                        <td><?= $dpb['nama_dokter']; ?></td>
                                        <td><?= $dpb['jenis_kelamin']; ?></td>
                                        <td><?= $dpb['jenis_dokter']; ?></td>
                                        <td><?= $dpb['umur']; ?></td>
                                        <td><?= $dpb['tanggal_lahir']; ?></td>
                                        <td><?= $dpb['namakecamatan']; ?></td>
                                        <td><?= $dpb['nomor_hp']; ?></td>
                                        <!-- <td><?= $dpb['alamat']; ?></td> -->
                                        <td><?= $dpb['nama_rumahsakit']; ?></td>
                                        <td class="text-center">
                                            <a href="" class="tabledit-delete-button btn btn-sm btn-success mb-2" data-toggle="modal" data-animation="slideInDown" data-target=".updatedokterperawatbidan" id="modeldokter" title="Update Data Dokter & Perawat & Bidan" data-id="<?= $dpb['id_dopebi']; ?>" data-namadokter="<?= $dpb['nama_dokter']; ?>" data-jeniskelamin="<?= $dpb['jenis_kelamin']; ?>" data-jd="<?= $dpb['jenis_dokter']; ?>" data-umur="<?= $dpb['umur']; ?>" data-tanggallahir="<?= $dpb['tanggal_lahir']; ?>" data-kecamatan="<?= $dpb['namakecamatan']; ?>" data-hp="<?= $dpb['nomor_hp']; ?>" data-alamat="<?= $dpb['alamat']; ?>" data-namarumahsakit="<?= $dpb['namarumahsakit']; ?>">
                                                <i class="ti-pencil"></i></a>


                                            <a href="" class="tabledit-delete-button btn btn-sm btn-danger mb-2 btn-animation" title="Delete Data Dokter & Perawat & Bidan"><i class="ti-trash"></i>
                                            </a>

                                            <a href="" class="tabledit-delete-button btn btn-sm btn-warning  mb-2" data-toggle="modal" data-animation="slideInUp" data-target=".adddokterperawatbidan" title="Input Data Dokter & Perawat & Bidan"><i class="ti-save"></i>
                                            </a>

                                            <a href="" class="tabledit-delete-button btn btn-sm btn-dark btn-animation mb-2" data-toggle="modal" data-animation="zoomInLeft" data-target=".foto" id="modelfoto" title="CLick Untuk Lihat Dokter & Perawat & Bidan" data-id="<?= $dpb['id_dopebi']; ?>" data-dokter="<?= $dpb['nama_dokter']; ?>"><i class="fa fa-user-circle"></i></a>

                                            <!-- <button type="button" class="btn btn-primary waves-effect waves-light" 
                                                data-toggle="modal" data-animation="slideInDown" data-target=".nato"> -->

                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php if (empty($dokter)) : ?>
                        <div class="badge bg-danger">
                            <span class="text-center"><i class="fa fa-info-circle"></i>
                                Data Yang Dicari Oleh Anda Harus Sesuai Kecamatan!,
                                Jika Data Dicari Tidak Mendapat Karena Kecamatan Anda Masih Salah....Semoga Anda Berhasil!</span>
                        </div>
                    <?php endif; ?>
                </div><br>
            </div>
            <div class="modal fade adddokterperawatbidan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="table-info">
                                                    <tr>
                                                        <th data-priority="1" class="text-center">
                                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/logo.png" class="rounded-circle" width="80px">
                                                        </th>
                                                        <th data-priority="1">
                                                            <div class="text-center">
                                                                <font size="2" style="font-family:Wide Latin">
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
                                                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/images.jpg" class="rounded-circle" width="80px">
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-header">
                            <h4 class="modal-title mt-0" id="myLargeModalLabel" style="font-family:Times New Roman">
                                Input Data Dokter & Perawat & Bidan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="<?= base_url('admin/adddokterperawatbidan'); ?>" method="POST">
                            <div class="modal-body">
                                <label for="namadokter">Nama Dokter</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="namadokter" placeholder="Nama Dokter" name="namadokter" value="<?= set_value('namadokter'); ?>">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                            <i class="fa fa-user-circle"></i></span></div>
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
                                    <select name="kecamatan" id="" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                        <?php foreach ($nato as $rs) : ?>
                                            <option value="<?= $rs['kecamatan']; ?>"><?= $rs['kecamatan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
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
                                    <select name="rumahsakit" id="" class="form-control">
                                        <option value="">Pilih RumhaSakit</option>
                                        <?php foreach ($rumahsakit as $rs) : ?>
                                            <option value="<?= $rs['id']; ?>"><?= $rs['nama_rumahsakit']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div><br>
                                <label for="alamat">Alamat Dokter</label>
                                <div class="input-group">
                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="Alamat Dokter" value="<?= set_value('alamat'); ?>"></textarea>
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
                            <div class="modal-footer">
                                <a href="<?= base_url('beritamensal/mensal'); ?>" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></a>
                                <button type="submit" class="btn btn-success" title="Click Untuk Input Data Menu"><i class="fa fa-send (alias)"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<div class="modal fade updatedokterperawatbidan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel" style="font-family:Times New Roman">
                    Update Data Dokter & Perawat & Bidan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?= base_url('admin/updatedokterperawatbidan'); ?>" method="POST">
                <div class="modal-body">
                    <label for="namadokter">Nama Dokter</label>
                    <div class="input-group">
                        <input type="hidden" class="form-control" id="idnamadokter" name="idnamadokter">
                        <input type="text" class="form-control" id="namadokter" placeholder="Nama Dokter" name="namadokter" value="<?= set_value('namadokter'); ?>">
                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                <i class="fa fa-user-circle"></i></span></div>
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
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <div class="input-group">
                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                <i class="fa fa-calendar-times-o"></i></span></div>
                    </div>
                    <div class="text-center">
                        <?= form_error('tanggallahir', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div><br>
                    <label for="jenisdokter">Jenis Dokter</label>
                    <div class="input-group">
                        <select name="jenisdokter" id="jenisdokte" class="form-control">
                            <option value="">Pilih Dokter & Perawat & Bidan</option>
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
                    <label for="umur">Umur Dokter</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="umur" placeholder="Umur Dokter" name="umur" value="<?= set_value('umur'); ?>">
                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                <i class="fa fa-calendar-times-o"></i></span></div>
                    </div><br>
                    <?= form_error('umur', '<small class="text-danger pl-2">', '</small>'); ?>
                    <label for="tempattinggal"> Tempat Tinggal</label>
                    <div class="input-group">
                        <select name="kecamatan" id="cari" class=" form-control" data-live-search="true" data-width="100%">
                            <option value="">Pilih Kecamatan</option>
                            <?php foreach ($nato as $rs) : ?>
                                <option value="<?= $rs['kecamatan']; ?>"><?= $rs['kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                <i class="fa fa-user-md"></i></span></div>
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
                        <select name="rumahsakit" id="rumah" class="form-control">
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
                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="Alamat Dokter" value="<?= set_value('alamat'); ?>"></textarea>
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
                <div class="modal-footer">
                    <a href="<?= base_url('admin/dokterperawatbidan'); ?>" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></a>
                    <button type="submit" class="btn btn-success" title="Click Untuk Input Data Menu"><i class="fa fa-send (alias)"></i></button>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<div class="modal fade foto" id="" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle-1" style="font-family:Times New Roman">
                    Foto Dokter & Perawat & Bidan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="btn btn-dark"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-dark">
                            <i class="fa fa-user-circle"></i></span></div>
                    <input type="hidden" class="form-control text-center" id="idnama" placeholder="Nama Dokter" name="namadokter" readonly>
                    <input type="text" class="form-control text-center" id="nama" placeholder="Nama Dokter" name="namadokter" readonly>
                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-dark">
                            <i class="fa fa-user-circle"></i></span></div>
                </div><br>
                <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/nato.png" alt="" class="img-fluid rounded-circle" width="450px">
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>

<script type="text/javascript">
    $(document).on("click", "#modelfoto", function() {
        var Idid = $(this).data('id');
        var Dokter = $(this).data('dokter');


        $(".foto #idnama").val(Idid);
        $(".foto #nama").val(Dokter);
    })
</script>
<script type="text/javascript">
    $(document).on("click", "#modeldokter", function() {
        var Id = $(this).data('id');
        var Namadokter = $(this).data('namadokter');
        var Jeniskelamin = $(this).data('jeniskelamin');
        var Jd = $(this).data('jd');
        var Umur = $(this).data('umur');
        var Tanggallahir = $(this).data('tanggallahir');
        var Namakecamatan = $(this).data('kecamatan');
        var Hp = $(this).data('hp');
        var Alamat = $(this).data('alamat');
        var Namarumahsakit = $(this).data('namarumahsakit');

        $(".updatedokterperawatbidan #idnamadokter").val(Id);
        $(".updatedokterperawatbidan #namadokter").val(Namadokter);
        $(".updatedokterperawatbidan #jeniskelamin").val(Jeniskelamin);
        $(".updatedokterperawatbidan #jenisdokte").val(Jd);
        $(".updatedokterperawatbidan #umur").val(Umur);
        $(".updatedokterperawatbidan #tanggallahir").val(Tanggallahir);
        $(".updatedokterperawatbidan #cari").val(Namakecamatan);
        $(".updatedokterperawatbidan #nomorhp").val(Hp);
        $(".updatedokterperawatbidan #alamat").val(Alamat);
        $(".updatedokterperawatbidan #rumah").val(Namarumahsakit);
    })
    $(document).ready(function(e) {
        $("#form").on("submit", (function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= base_url('admin/updatedokterperawatbidan'); ?>',
                type: 'POST',
                data: new FormatData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    document.location.href = "<?= base_url('admin/dokterperawatbidan'); ?>";
                }
            });
        }));
    })
</script>