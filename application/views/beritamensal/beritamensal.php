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
            <div class="col-sm-12">
                <div class="card m-b-20">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <table class="table table-striped">
                            <thead class="table-info">
                                <tr>
                                    <th data-priority="1">
                                        <form action="<?= base_url('admin/mensal'); ?>" method="post" class=" d-sm-inline-block form-inline mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for..." name="keyword" autofocus>
                                                <div class="input-group-append">
                                                    <input class="btn btn-primary" type="submit" name="submit" value="Cari">
                                                </div>
                                            </div>
                                        </form>
                                    </th>
                                    <th data-priority="1" class="text-center">
                                        <h6 style="font-family:Franklin Gothic Heavy">Jumlah Berita Anual: <?= $total_rows; ?></h6>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="flash" data-flas1="<?php echo $this->session->flashdata('success'); ?>"></div>
            <?php $no = 1;
            foreach ($beritamensal as $mensal) : ?>
                <div class="col-sm-6">
                    <div class="card m-b-30">
                        <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/nato.png" class="img-thumbnail rounded-circle" width="480px">
                                    <h6 class="card-text text-center text-muted" style="font-family:Times New Roman">
                                        Member Since :<br><?= date('d F Y', $mensal['tanggal_berita']); ?></h6>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="mt-2 text-center" style="font-family:Times New Roman"><?= $mensal['berita']; ?></h3>
                                        <a href="" class="text-muted m-b-30 font-4" style="font-family:Times New Roman" title="Click Di Sini,Baca Lanjut Berita Mensal">
                                            <h5 class="card-title text-center text-muted" style="font-family:Times New Roman"><?= substr($mensal['judulberitamensal'], 0, 60); ?></h5>
                                        </a>
                                        <h6 class="card-title text-center" style="font-family:Times New Roman"><?= $mensal['nama_terbit']; ?></h6>
                                        <p class="card-text text-center" style="font-family:Times New Roman"><?= $mensal['kodeberitamensal']; ?></p>
                                        <h5 class="card-text text-center text-muted" style="font-family:Times New Roman"><?= $mensal['alamat_berita']; ?></h5>
                                        <p class="text-muted text-center">
                                            <a href="<?= base_url('admin/tambahberitamensal'); ?>">
                                                <i class="fa fa-fw fa-user-plus mr-1"></i>Add</a>

                                            <a href="<?= base_url('admin/updateberitamensal/' . $mensal['id']); ?>" class="text-dark">
                                                <i class="fa fa-fw fa-pencil"></i>Edit</a>

                                            <a href="<?= base_url('admin/updateberitamensal/' . $mensal['id']); ?>" class="text-danger">
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
        <?php if (empty($beritamensal)) : ?>
            <div class="badge bg-danger">
                <span class="text-center"><i class="fa fa-info-circle"></i>
                    Data Yang Dicari Oleh Anda Harus Sesuai Kecamatan!,
                    Jika Data Dicari Tidak Mendapat Karena Kecamatan Anda Masih Salah....Semoga Anda Berhasil!</span>
            </div>
        <?php endif; ?>
        <?= $this->pagination->create_links(); ?>
    </div>