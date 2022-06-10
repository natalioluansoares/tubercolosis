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
            <div class="col-lg-12 center">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                        <p class="text-muted m-b-30 font-16 text-center" style="font-family:Times New Roman">
                            Data Ini Hanya Digunakan Untuk Menginput Data Pendaftaran Pasien</p>
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
        </div>
    </div>