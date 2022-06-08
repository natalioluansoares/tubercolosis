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
            <div class="col-lg-9 center">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <div class="text-center">
                            <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/unwira.png" class="img-thumbnail" height="" width="850px">
                            <h6 class="card-text text-center text-muted" style="font-family:Times New Roman">
                                Tanggal Terbit:<br><?= date('d F Y', $beritaanual['tanggal']); ?></h6>
                            <h5 style="font-family:Franklin Gothic Heavy"><b><?= $beritaanual['namaterbit']; ?></b></h5>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="font-family:Franklin Gothic Heavy"><?= $beritaanual['judulberitaanual']; ?></h5>
                                    <h6 class="card-title" style="font-family:Times New Roman"><?= $beritaanual['isi_berita']; ?></h6><br>
                                    <a href="" class="card-text text-muted mr-3" style="font-family:Times New Roman">Download</a>
                                    <a href="" class="card-text text-muted" style="font-family:Times New Roman">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 center">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">

                        <h4 class="mt-2" style="font-family:Times New Roman"><?= $title; ?></h4>
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
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>