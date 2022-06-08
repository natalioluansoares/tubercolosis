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
                                <div class="col-lg-6">
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
                                <button type="submit" class="btn btn-primary mt-2" title="Tampilkan Data Dokter"><i class="fa fa-fw fa-eye"></i></button>
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
                        <div class="tab-pane active p-3" id="kabupaten" role="tabpanel">
                            <p class="font-14 mb-0">
                            <table id="datatable" class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>#</th>
                                        <th data-priority="1">Nama Lengkap</th>
                                        <!-- <th data-priority="1">Jenis Kelamin</th> -->
                                        <th data-priority="1">Jenis Dokter</th>
                                        <!-- <th data-priority="1">Umur</th> -->
                                        <!-- <th data-priority="1">Tanggal Lahir</th> -->
                                        <th data-priority="1">Tempat Lahir</th>
                                        <th data-priority="1">Nomor Hp</th>
                                        <!-- <th data-priority="1">Alamat</th> -->
                                        <th data-priority="1">Rumahsakit</th>
                                        <th data-priority="1" class="text-center"><i class="fa fa-cog "></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($dokterperawatbidan as $dpb) : ?>
                                        <tr>
                                            <th> <span class="co-name"><?= $no++; ?></span></th>
                                            <td><?= $dpb['nama_dokter']; ?></td>
                                            <!-- <td><?= $dpb['jenis_kelamin']; ?></td> -->
                                            <td><?= $dpb['jenis_dokter']; ?></td>
                                            <!-- <td><?= $dpb['umur']; ?></td> -->
                                            <!-- <td><?= $dpb['tanggal_lahir']; ?></td> -->
                                            <td><?= $dpb['namakecamatan']; ?></td>
                                            <td><?= $dpb['nomor_hp']; ?></td>
                                            <!-- <td><?= $dpb['alamat']; ?></td> -->
                                            <td><?= $dpb['nama_rumahsakit']; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('dokterperawatbidan/updatedokterperawatbidan/' . $dpb['id_dopebi']); ?>" class="tabledit-delete-button btn btn-sm btn-success mb-2">
                                                    <i class="ti-pencil"></i></a>


                                                <a href="" class="tabledit-delete-button btn btn-sm btn-danger mb-1 btn-animation" title="Delete Data Dokter & Perawat & Bidan"><i class="ti-trash"></i></a>

                                                <a href="<?= base_url('dokterperawatbidan/adddokterperawatbidan'); ?>" class="tabledit-delete-button btn btn-sm btn-warning  mb-1" title="Input Data Dokter & Perawat & Bidan"><i class="ti-save"></i></a>

                                                <a href="" class="tabledit-delete-button btn btn-sm btn-dark btn-animation mb-1" data-toggle="modal" data-animation="zoomInLeft" data-target=".foto" id="modelfoto" title="CLick Untuk Lihat Dokter & Perawat & Bidan" data-id="<?= $dpb['id_dopebi']; ?>" data-dokter="<?= $dpb['nama_dokter']; ?>"><i class="fa fa-user-circle"></i></a>

                                                <!-- <button type="button" class="btn btn-primary waves-effect waves-light" 
                                                data-toggle="modal" data-animation="slideInDown" data-target=".nato"> -->

                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php if (empty($dokterperawatbidan)) : ?>
                        <div class="badge bg-danger">
                            <span class="text-center"><i class="fa fa-info-circle"></i>
                                Data Yang Dicari Oleh Anda Harus Sesuai Kecamatan!,
                                Jika Data Dicari Tidak Mendapat Karena Kecamatan Anda Masih Salah....Semoga Anda Berhasil!</span>
                        </div>
                    <?php endif; ?>
                </div>
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