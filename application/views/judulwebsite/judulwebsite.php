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
            <div class="col-md-12 col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="kabupaten" role="tabpanel">
                                <p class="font-14 mb-0">
                                <h4 class="mt-2" style="font-family:Bodoni MT Black"><?= $title; ?></h4>
                                <p class="text-muted m-b-30 font-14">Data Ini Hanya Digunakan Untuk Menginput Data Kabupaten</p>
                                <div class="table-rep-plugin">
                                    <div class="table-responsive b-0 nato" data-pattern="priority-columns">
                                        <form action="<?= base_url('dokter'); ?>" method="post" class=" d-sm-inline-block form-inline mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control  border-1 border-left-primary shadow mb-3" placeholder="Search for..." name="keyword" autofocus>
                                                <div class="input-group-append">
                                                    <input class="btn btn-warning mb-3" type="submit" name="submit" value="Cari" title="Cari Judul Website">
                                                </div>
                                            </div>
                                        </form>
                                        <table id="tech-companies-1" class="table table-bordered table-striped">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>No</th>
                                                    <th data-priority="1">Kecamatan</th>
                                                    <th data-priority="1">Judul Webiste</th>
                                                    <th data-priority="1">Alamat Website</th>
                                                    <th data-priority="6" class="tabledit-delete-button btn btn-sm btn-info text-center"><i class="fa fa-cog "></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($judulwebsite as $judul) : ?>
                                                    <tr>
                                                        <th> <span class="co-name"><?= $no++; ?></span></th>
                                                        <td><?= $judul['kecamatan']; ?></td>
                                                        <td><?= $judul['judul']; ?></td>
                                                        <td><?= $judul['alamatwebsite']; ?></td>
                                                        <td class="text-center">
                                                            <a href="" class="tabledit-delete-button btn btn-sm btn-success btn-animation" title="Update Data Kabupaten" data-toggle="modal" data-animation="slideInRight" data-target=".updatewebsite" id="modelkabupaten">
                                                                <i class="ti-pencil"></i></a>
                                                            <a href="" class="tabledit-delete-button btn btn-sm btn-danger" title="Delete Data Kabupaten"><i class="ti-trash"></i></a>
                                                            <a href="" class="tabledit-delete-button btn btn-sm btn-warning btn-animation" data-toggle="modal" data-animation="rollIn" data-target=".addwebsite" title="Input Data Kabupaten"><i class="ti-save"></i></a>
                                                            <a href="" class="tabledit-delete-button btn btn-sm btn-default btn-animation" data-toggle="modal" data-animation="rollIn" data-target=".addwebsite" title="Input Data Kabupaten"><i class="fa fa-fw fa-eye"></i></a>
                                                        </td>
                                                        <!-- <td>
                                                            <div class="text-center">
                                                                <h7 style="font-family:Bodoni MT Black">Jumlah Kabupaten:
                                                                    <h6 style="font-family:Times New Roman">Result: <?= $total_rows; ?></h6>
                                                website
                                                            </div>
                                                        </td> -->
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- <?= $this->pagination->create_links(); ?> -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade addwebsite" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">INPUT DATA WEBSITE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('judulwebsite/addjudulwebsite'); ?>" method="POST" style="background-color: rgb(40, 40, 218); color: white">
                            <div class="modal-body">
                                <label for="" style="color:white">Kecamatan</label>
                                <div class="input-group">
                                    <select name="kecamatanid" id="kecamatanid" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                        <?php foreach ($kecamatan as $k) : ?>
                                            <option value="<?= $k['kecamatan']; ?>"><?= $k['kecamatan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Judul Website</label>
                                <div class="input-group">
                                    <textarea name="judul" id="judul" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Alamat Website</label>
                                <div class="input-group">
                                    <textarea name="alamatwebsite" id="alamatwebsite" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Nomor HP</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nomorhp" id="nomorhp">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Link Website Rumah Sakit</label>
                                <div class="input-group">
                                    <textarea name="websiterumahsakit" id="websiterumahsakit" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Alamat Email</label>
                                <div class="input-group">
                                    <textarea name="alamatemail" id="alamatemail" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Kabupaten"><i class="fa fa-refresh"></i></button>
                                <button type="submit" class="btn btn-success" title="Click Untuk Input Data Kabupaten"><i class="fa fa-send (alias)"></i></button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <div class="modal fade updatewebsite" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">UPDATE DATA KABUPATEN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('judulwebsite/kabupaten'); ?>" method="POST" style="background-color: rgb(40, 40, 218); color: white">
                            <div class="modal-body">
                                <label for="" style="color:white">Kecamatan</label>
                                <div class="input-group">
                                    <select name="kecamatanid" id="kecamatanid" class="form-control">
                                        <?php foreach ($kecamatan as $ke) : ?>
                                            <option value="<?= $ke['kecamatan']; ?>"><?= $ke['kecamatan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Judul Website</label>
                                <div class="input-group">
                                    <textarea name="judul" id="judul" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Alamat Website</label>
                                <div class="input-group">
                                    <textarea name="alamatwebsite" id="alamatwebsite" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Nomor HP</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nomorhp" id="nomorhp">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Link Website Rumah Sakit</label>
                                <div class="input-group">
                                    <textarea name="websiterumahsakit" id="websiterumahsakit" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="" style="color:white">Alamat Email</label>
                                <div class="input-group">
                                    <textarea name="alamatemail" id="alamatemail" class="form-control" cols="30" rows="1"></textarea>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Kabupaten"><i class="fa fa-refresh"></i></button>
                                <button type="submit" class="btn btn-success" title="Click Untuk Input Data Kabupaten"><i class="fa fa-send (alias)"></i></button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).on("click", "#modelkabupaten", function() {
                    var Id = $(this).data('id');
                    var Kabupaten = $(this).data('kabupaten');

                    $(".updatekabupaten #idkabupaten").val(Id);
                    $(".updatekabupaten #kabupaten").val(Kabupaten);
                })
                $(document).ready(function(e) {
                    $("#form").on("submit", (function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: '<?= base_url('kabupaten/updatekabupaten'); ?>',
                            type: 'POST',
                            data: new FormatData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                            success: function() {
                                document.location.href = "<?= base_url('kabupaten'); ?>";
                            }
                        });
                    }));
                })
            </script>