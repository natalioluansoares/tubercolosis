
        <div class="wrapper">
        <?= $this->session->flashdata('message'); ?>
            <div class="container-fluid">
            <div class="row">
                    <div class="col-sm-12">
                    <div class="card m-b-30">
                            <div class="card-body">
                    <div class="text-center">
                                    <font size="3" style="font-family:Wide Latin">
                                    <b>Website Rumah Sakit Kecamatan Fatuberlio</b><br>
                                    <span style="font-family:Times New Roman">JL.Wekiar. 12-23 Fatuberlio-85225,Manufahi-Timor Leste <br>
                                    Telp.(0380)833395- 831194</span>
                                    </font><br>
                                    Web:<span style="font-family:Times New Roman; color:#3366cc">
                                    http//www.fatuberlio.ac.id</span>
                                    Email:<span style="font-family:Times New Roman; color:#3366cc">
                                    fatuberlio.fatuberliorumahsakit@gmail.com</span><hr width="80%">
                                </div>
                             </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                    <h3 class="mt-2 text-center" style="font-family:Times New Roman"><i class="fa fa-fw fa-plus"></i><?=$title; ?></h3>
                                    <div>
                                        <form action="<?= base_url('dokterperawatbidan/adddokterperawatbidan'); ?>" method="POST">
                                        <div class="modal-body">
                                        <label for="namadokter">Nama Dokter</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="namadokter" 
                                                placeholder="Nama Dokter" name="namadokter" value="<?= $dopebi['nama_dokter']; ?>">
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-user-circle"></i></span></div>
                                            </div>
                                            <div class="text-center">
                                            <?= form_error('namadokter','<small class="text-danger pl-2">','</small>'); ?>
                                            </div><br>
                                            <label for="jeniskelamain"> Jenis Kelamin</label>
                                            <div class="input-group">
                                            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="<?= set_value('Laki-Laki'); ?>">Laki-Laki</option>
                                                <option value="<?= set_value('Perempuan'); ?>">Perempuan</option>
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
                                                <input type="date" class="form-control" id="tanggallahir" 
                                                name="tanggallahir">
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-calendar-times-o"></i></span></div>
                                            </div>
                                            <div class="text-center">
                                            <?= form_error('tanggallahir','<small class="text-danger pl-2">','</small>'); ?>
                                            </div><br>
                                            <label for="umur">Umur Dokter</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="umur" 
                                                placeholder="Umur Dokter" name="umur" value="<?= set_value('umur'); ?>">
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-calendar-times-o"></i></span></div>
                                            </div><br>
                                            <?= form_error('umur','<small class="text-danger pl-2">','</small>'); ?>
                                            <label for="tempattinggal"> Tempat Tinggal</label>
                                            <div class="input-group">
                                            <select name="tempattinggal" id="tempattinggal" class="form-control">
                                                <option value=""><?=$kecamat['kecamatan']; ?></option>
                                                <?php foreach($kecamatan as $keca): ?>
                                                <option value="<?=$keca['id']; ?>"><?=$keca['kecamatan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                            <i class="fa fa-mars-double "></i></span></div>
                                            </div><br>
                                            <label for="nomorhp">Nomor HP</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="nomorhp" 
                                                name="nomorhp" value="<?= set_value('nomorhp'); ?>">
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-phone"></i></span></div>
                                            </div>
                                            <div class="text-center">
                                            <?= form_error('nomorhp','<small class="text-danger pl-2">','</small>'); ?>
                                            </div><br>
                                            <label for="rumahsakit">Rumah Sakit</label>
                                            <div class="input-group">
                                            <select name="rumahsakit" id="rumahsakit" class="form-control">
                                                <option value="">Pilih Rumah Sakit</option>
                                                <?php foreach($rumahsakit as $rs): ?>
                                                <option value="<?=$rs['id']; ?>"><?=$rs['nama_rumahsakit']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                            <i class="fa fa-mars-double "></i></span></div>
                                            </div><br>
                                            <label for="alamat">Alamat Dokter</label>
                                            <div class="input-group">
                                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" 
                                                placeholder="Alamat Dokter" value="<?= set_value('alamat'); ?>"></textarea>
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-primary">
                                                <i class="fa fa-folder-open-o "></i></span></div>
                                            </div>
                                            <div class="text-center">
                                            <?= form_error('alamat','<small class="text-danger pl-2">','</small>'); ?>
                                            </div><br>
                                            <div class="form-group">
                                                <h6 class="text-muted">Picture User</h6>
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <img src="<?=base_url('assets/'); ?>tutorialcssjsadmin/images/nato.png" class="img-thumbnail" >
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= base_url('dokterperawatbidan');?>" class="btn btn-danger" 
                                    data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></a>
                                    <button type="submit" class="btn btn-success" title="Click Untuk Input Data Menu"><i class="fa fa-send (alias)"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        