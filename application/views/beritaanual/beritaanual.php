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
            <div class="col-sm-12">
                <div class="card m-b-20">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <h4 class="mt-2 text-center" style="font-family:Bodoni MT Black"><?= $title; ?></h4>
                        <p class="text-muted m-b-30 font-14 text-center">Data Ini Hanya Digunakan Untuk Menginput Data Kabupaten</p>
                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0 nato" data-pattern="priority-columns">
                                <form action="<?= base_url('admin/anual'); ?>" method="post" class=" d-sm-inline-block form-inline mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..." name="cari" autofocus>
                                        <div class="input-group-append">
                                            <input class="btn btn-primary" type="submit" name="search" value="Cari">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h7 style="font-family:Bodoni MT Black">Jumlah Data Berita Anual <span style="font-family:Times New Roman">Result: <?= $total_rows; ?></span>
                            </h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="flash" data-flas1="<?php echo $this->session->flashdata('success'); ?>"></div>
            <?php $no = 1;
            foreach ($beritaanual as $anual) : ?>
                <div class="col-sm-6">
                    <div class="card m-b-30">
                        <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/nato.png" class="img-thumbnail rounded-circle" width="480px">
                                    <h6 class="card-text text-center text-muted" style="font-family:Times New Roman">
                                        Member Since :<br><?= date('d F Y', $anual['tanggal']); ?></h6>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $title; ?></h3>
                                        <a href="<?= base_url('user/bacaberita/' . $anual['id']); ?>" class="text-muted m-b-30 font-4" style="font-family:Times New Roman" title="Click Di Sini Untuk Baca Berita">
                                            <h5 class="card-title text-center" style="font-family:Times New Roman"><?= substr($anual['judulberitaanual'], 0, 60); ?></h5>
                                        </a>
                                        <h6 class="card-title text-center" style="font-family:Times New Roman"><?= $anual['namaterbit']; ?></h6>
                                        <p class="card-text text-center" style="font-family:Times New Roman"><?= $anual['kodeberitaanual']; ?></p>
                                        <h5 class="card-text text-center" style="font-family:Times New Roman"><?= $anual['alamat_berita']; ?></h5>
                                        <p class="text-muted text-center">
                                            <a href="<?= base_url('admin/addberitaanual'); ?>">
                                                <i class="fa fa-fw fa-user-plus mr-1"></i>Add</a>

                                            <a href="<?= base_url('admin/updateberitaanual/' . $anual['id']); ?>" class="text-dark">
                                                <i class="fa fa-fw fa-pencil"></i>Edit</a>

                                            <a href="<?= base_url('admin/updateberitaanual/' . $anual['id']); ?>" class="text-danger">
                                                <i class="fa fa-fw fa-trash"></i>Hapus</a>

                                            <a href="<?= base_url('admin/laporandokter') ?>" class="text-success">
                                                <i class="fa fa-fw fa-download mr-1"></i>download</a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $this->pagination->create_links(); ?>
    </div>
    <!-- end wrapper -->