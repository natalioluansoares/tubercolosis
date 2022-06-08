<div class="wrapper">
    <?= $this->session->flashdata('message'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-b-30">
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
            <div class="col-lg-9">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                        <div>
                            <form action="<?= base_url('admin/addberitaanual'); ?>" method="POST">
                                <div class="modal-body">
                                    <div class="input-group">
                                        <input type="text" class="form-control card shadow" id="kodeberita" name="kodeberita" value="<?= set_value('kodeberita'); ?>" placeholder="Kode Berita">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                <i class="fa fa-pencil"></i></span></div>
                                    </div><br>
                                    <?= form_error('kodeberita', '<small class="text-danger pl-2">', '</small>'); ?>
                                    <div class="input-group">
                                        <input type="text" class="form-control card shadow" id="menu" placeholder="Judul Berita" name="judulberita" value="<?= set_value('judulberita'); ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                <i class="fa fa-pencil"></i></span></div>
                                    </div><br>
                                    <?= form_error('judulberita', '<small class="text-danger pl-2">', '</small>'); ?>
                                    <div class="input-group">
                                        <input type="text" class="form-control card shadow" id="menu" placeholder="Nama Terbit" name="namaterbit" value="<?= set_value('namaterbit'); ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                <i class="fa fa-user-circle "></i></span></div>
                                    </div><br>
                                    <?= form_error('namaterbit', '<small class="text-danger pl-2">', '</small>'); ?>
                                    <div class="input-group">
                                        <input type="text" class="form-control card shadow" id="menu" placeholder="Alamat Berita" name="alamatberita" value="<?= set_value('alamatberita'); ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                <i class="fa fa-google-plus-square  "></i></span></div>
                                    </div><br>
                                    <?= form_error('alamatberita', '<small class="text-danger pl-2">', '</small>'); ?>
                                    <div class="form-group">
                                        <textarea name="isiberita" id="" rows="5" class="form-control card shadow" placeholder="Isi Berita" value="<?= set_value('isiberita'); ?>"><span class="input-group-text btn btn-info">
                                                <i class="fa fa-folder-open-o "></i></span></textarea>
                                    </div><br>
                                    <?= form_error('isiberita', '<small class="text-danger pl-2">', '</small>'); ?>
                                    <div class="form-group">
                                        <h6 class="text-muted">Picture User</h6>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/nato.png" class="img-thumbnail">
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
                        <a href="<?= base_url('admin/anual'); ?>" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></a>
                        <button type="submit" class="btn btn-success" title="Click Untuk Input Data Menu"><i class="fa fa-send (alias)"></i></button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 center">
                <div class="card m-b-30">
                    <div class="card-body">

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
                                    </div><!-- input-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<script src="<?= base_url(); ?>assets/ckeditores/ckeditor4/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isiberita');
</script>