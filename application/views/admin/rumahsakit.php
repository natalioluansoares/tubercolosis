<div class="wrapper">
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
            <div class="flash" data-flas1="<?php echo $this->session->flashdata('success'); ?>"></div>
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-2 text-center" style="font-family:Bodoni MT Black"><?= $title; ?></h4>
                        <p class="text-muted m-b-30 font-14 text-center">Data Ini Hanya Digunakan Untuk Menginput Data Kabupaten</p>
                        <div class="tab-pane active p-3" id="kabupaten" role="tabpanel">
                            <p class="font-14 mb-0">
                            <table id="datatable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Company</th>
                                        <th data-priority="1">Kode RS</th>
                                        <th data-priority="1">Nama RS</th>
                                        <th data-priority="1">Kelurahan</th>
                                        <th data-priority="1" class="text-center"><i class="fa fa-cog "></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($rumahsakit as $rs) : ?>
                                        <tr>
                                            <th> <span class="co-name"><?= $no++; ?></span></th>
                                            <td><?= $rs['kode_rumahsakit']; ?></td>
                                            <td><?= $rs['nama_rumahsakit']; ?></td>
                                            <td><?= $rs['kelurahan']; ?></td>
                                            <td class="text-center">
                                                <a href="" class="tabledit-delete-button btn btn-sm btn-success btn-animation mb-2" title="Update Data Kecamatan" data-toggle="modal" data-animation="flipInX" data-target=".updaterumahsakit" id="modelrumahsakit" data-id="<?= $rs['id']; ?>" data-koderumahsakit="<?= $rs['kode_rumahsakit']; ?>" data-namarumahsakit="<?= $rs['nama_rumahsakit']; ?>" data-idkelurahan="<?= $rs['id_kelurahan']; ?>">
                                                    <i class="ti-pencil"></i></a>
                                                <a href="" class="tabledit-delete-button btn btn-sm btn-danger mb-2" title="Delete Data Kecamatan"><i class="ti-trash"></i></a>
                                                <a href="" class="tabledit-delete-button btn btn-sm btn-warning btn-animation mb-2" data-toggle="modal" data-animation="flipInY" data-target=".addrumahsakit" title="Input Data Kecamatan"><i class="ti-save"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade addrumahsakit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">INPUT DATA RUMAHSAKIT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/addrumahsakit'); ?>" method="POST">
                            <div class="modal-body">
                                <label for="">Kode Rumahsakit</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="koderumahsakit" placeholder="Kode Rumahsakit" name="koderumahsakit">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="">Nama Kelurahan</label>
                                <div class="input-group">
                                    <select name="kelurahan" id="kelurahan" class="form-control">
                                        <option value="">Pilih Kelurahan</option>
                                        <?php foreach ($kelurahan as $kelu) : ?>
                                            <option value="<?= $kelu['id'] ?>"><?= $kelu['kelurahan'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="">Nama Rumahsakit</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="namarumahsakit" placeholder="Nama Rumahsakit" name="namarumahsakit">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Rumahsakit"><i class="fa fa-refresh"></i></button>
                                <button type="submit" class="btn btn-success" title="Click Untuk Input Data Rumahsakit"><i class="fa fa-send (alias)"></i></button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div>
        <div class="modal fade updaterumahsakit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPDATE DATA RUMAHSAKIT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/ubahrumahsakit'); ?>" method="POST">
                        <div class="modal-body">
                            <label for="">Kode Rumahsakit</label>
                            <div class="input-group">
                                <input type="hidden" class="form-control" id="idrumahsakit" placeholder="Kode Rumahsakit" name="idrumahsakit">
                                <input type="text" class="form-control" id="koderumahsakit" placeholder="Kode Rumahsakit" name="koderumahsakit">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                        <i class="fa fa-pencil-square-o"></i></span></div>
                            </div><br>
                            <label for="">Nama Kelurahan</label>
                            <div class="input-group">
                                <select name="kelurahan" id="kelurahan" class="form-control">
                                    <option value="">Pilih Kelurahan</option>
                                    <?php foreach ($kelurahan as $kelu) : ?>
                                        <option value="<?= $kelu['id'] ?>"><?= $kelu['kelurahan'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div><br>
                            <label for="">Nama Rumahsakit</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="namarumahsakit" placeholder="Nama Rumahsakit" name="namarumahsakit">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                        <i class="fa fa-pencil-square-o"></i></span></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Rumahsakit"><i class="fa fa-refresh"></i></button>
                            <button type="submit" class="btn btn-success" title="Click Untuk Update Data Rumahsakit"><i class="fa fa-send (alias)"></i></button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).on("click", "#modelrumahsakit", function() {
                var Id = $(this).data('id');
                var koderumahsakit = $(this).data('koderumahsakit');
                var Namarumahsakit = $(this).data('namarumahsakit');
                var Idkelurahan = $(this).data('idkelurahan');

                $(".updaterumahsakit #idrumahsakit").val(Id);
                $(".updaterumahsakit #koderumahsakit").val(koderumahsakit);
                $(".updaterumahsakit #namarumahsakit").val(Namarumahsakit);
                $(".updaterumahsakit #kelurahan").val(Idkelurahan);
            })
            $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: '<?= base_url('admin/ubahrumahsakit'); ?>',
                        type: 'POST',
                        data: new FormatData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function() {
                            document.location.href = "<?= base_url('admin/rumahsakit'); ?>";
                        }
                    });
                }));
            })
        </script>