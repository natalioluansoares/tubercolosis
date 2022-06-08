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
                        <p class="text-muted m-b-30 font-14 text-center">Data Ini Hanya Digunakan Untuk Menginput Data Kabupaten</p>
                        <div class="tab-pane active p-3" id="kabupaten" role="tabpanel">
                            <p class="font-14 mb-0">
                            <table id="datatable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Company</th>
                                        <th data-priority="1">kabupaten</th>
                                        <th data-priority="1">Kecamatan</th>
                                        <th data-priority="1" class="text-center"><i class="fa fa-cog "></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kecamatan as $keca) : ?>
                                        <tr>
                                            <th> <span class="co-name"><?= $no++; ?></span></th>
                                            <td><?= $keca['kabupaten']; ?></td>
                                            <td><?= $keca['kecamatan']; ?></td>
                                            <td class="text-center">
                                                <a href="" class="tabledit-delete-button btn btn-sm btn-success btn-animation mb-2" title="Update Data Kecamatan" data-toggle="modal" data-animation="slideInDown" data-target=".updatekecamatan" id="modelkecamatan" data-id="<?= $keca['id']; ?>" data-idkabupaten="<?= $keca['id_kabupaten']; ?>" data-kecamatan="<?= $keca['kecamatan']; ?>" data-mane="<?= $keca['jumlah_laki_laki']; ?>" data-wanita="<?= $keca['jumlah_perempuan']; ?>">
                                                    <i class="ti-pencil"></i></a>

                                                <a href="" class="tabledit-delete-button btn btn-sm btn-danger mb-2" title="Delete Data Kecamatan"><i class="ti-trash"></i></a>

                                                <a href="" class="tabledit-delete-button btn btn-sm btn-warning btn-animation mb-2" data-toggle="modal" data-animation="slideInUp" data-target=".addkecamatan" title="Input Data Kecamatan"><i class="ti-save"></i></a>

                                                <a href="" class="tabledit-delete-button btn btn-sm btn-info btn-animation mb-2" data-toggle="modal" data-animation="slideInDown" data-target=".detailkecamatan" id="detail" title="Input Data Kecamatan" data-id="<?= $keca['id']; ?>" data-keca="<?= $keca['kecamatan']; ?>" data-laki="<?= $keca['jumlah_laki_laki']; ?>" data-perempuan="<?= $keca['jumlah_perempuan']; ?>" data-jumlah="<?= $keca['jumlah_penduduk']; ?>"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <thead class="table-primary">
                                    <tr class="text-center">
                                        <td colspan="2" rowspan="1" style="font-family:Bodoni MT Black; padding:25px;">Jumlah Penduduk</td>
                                        <td><b>:</b></td>
                                        <td>
                                            <span class="btn-sm badge-info" style="font-family:Bodoni MT Black">
                                                <b><?= $sumpenduduk ?></b></span>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade addkecamatan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">INPUT DATA KECAMATAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('kecamatan/addkecamatan'); ?>" method="POST">
                            <div class="modal-body">
                                <label for="">Nama Kabupaten</label>
                                <div class="input-group">
                                    <select name="kabupaten" id="kabupaten" class="form-control" class="select2 mb-2 select2-multiple card shadow form-control" data-live-search="true" data-width="50%">
                                        <option value="">Pilih Kabupaten</option>
                                        <?php foreach ($kabupaten as $kabu) : ?>
                                            <option value="<?= $kabu['id'] ?>"><?= $kabu['kabupaten'] ?>
                                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                        <i class="fa fa-pencil-square-o"></i></span></div>
                                            </option>
                                        <?php endforeach; ?>

                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="">Nama Kecamatan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="kecamatan" placeholder="Nama Kecamatan" name="kecamatan">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="">Jumlah Laki-Laki</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="laki" placeholder="Jumlah Laki-Laki" name="laki">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                                <label for="">Jumlah Perempuan</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="perempuan" placeholder="Jumlah Perempuan" name="perempuan">
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Kecamatan"><i class="fa fa-refresh"></i></button>
                                <button type="submit" class="btn btn-success" title="Click Untuk Input Data Kecamatan"><i class="fa fa-send (alias)"></i></button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div>
        <div class="modal fade updatekecamatan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPDATE DATA KECAMATAN</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('kecamatan/ubahkecamatan'); ?>" method="POST">
                        <div class="modal-body">
                            <label for="">Nama Kabupaten</label>
                            <input type="hidden" class="form-control" id="idkecamatan" placeholder="Nama Kabupaten" name="idkecamatan">
                            <div class="input-group">
                                <select name="kabupaten" id="kabupaten" class="form-control">
                                    <?php foreach ($kabupaten as $kabu) : ?>
                                        <option value="<?= $kabu['id'] ?>"><?= $kabu['kabupaten'] ?>
                                        </option>
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                <i class="fa fa-pencil-square-o"></i></span></div>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-success">
                                        <i class="fa fa-pencil"></i></span></div>
                            </div><br>
                            <label for="">Nama Kecamatan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="kecamatan" placeholder="Nama Kecamatan" name="kecamatan">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-success">
                                        <i class="fa fa-pencil"></i></span></div>
                            </div><br>
                            <label for="">Jumlah Laki-Laki</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="laki" placeholder="Jumlah Laki-Laki" name="laki">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-success">
                                        <i class="fa fa-pencil-square-o"></i></span></div>
                            </div><br>
                            <label for="">Jumlah Perempuan</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="perempuan" placeholder="Jumlah Perempuan" name="perempuan">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-success">
                                        <i class="fa fa-pencil-square-o"></i></span></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Kecamatan"><i class="fa fa-refresh"></i></button>
                            <button type="submit" class="btn btn-success" title="Click Untuk Update Data Kecamatan"><i class="fa fa-send (alias)"></i></button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).on("click", "#modelkecamatan", function() {
                var Id = $(this).data('id');
                var Idkabupaten = $(this).data('idkabupaten');
                var Kecamatan = $(this).data('kecamatan');
                var Mane = $(this).data('mane');
                var Wanita = $(this).data('wanita');

                $(".updatekecamatan #idkecamatan").val(Id);
                $(".updatekecamatan #kabupaten").val(Idkabupaten);
                $(".updatekecamatan #kecamatan").val(Kecamatan);
                $(".updatekecamatan #laki").val(Mane);
                $(".updatekecamatan #perempuan").val(Wanita);
            })
            $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: '<?= base_url('kecamatan/ubahkecamatan'); ?>',
                        type: 'POST',
                        data: new FormatData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function() {
                            document.location.href = "<?= base_url('kecamatan'); ?>";
                        }
                    });
                }));
            })
        </script>
        <div class="modal fade detailkecamatan" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center" id="exampleModalLongTitle-1">Detail Jumlah Penduduk</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="btn btn-dark"><i class="fa fa-close"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-dark">
                                    <i class="ti-world"></i></span></div>
                            <input type="text" class="form-control text-center" id="ke" style="font-family:Bodoni MT Black">
                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-dark">
                                    <i class="ti-world"></i></span></div><br>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead class="table-success">
                                <tr>
                                    <input type="hidden" class="form-control" id="iddetail">
                                    <th>
                                        <h5 style="font-family:Times New Roman">Jumlah Laki - Laki</h5< /th>
                                    <th>
                                        <h5 style="font-family:Times New Roman">Jumlah Perempuan</h5< /th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-family:Bodoni MT Black">
                                        <input type="text" class="form-control" id="la" readonly>
                                    </td>
                                    <td style="font-family:Bodoni MT Black">
                                        <input type="text" class="form-control" id="pr" readonly>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        <table class="table table-bordered table-striped text-center">
                            <thead class="table-success">
                                <tr>
                                    <th>
                                        <h5 style="font-family:Times New Roman">Jlh Pen Kecamatan</h5< /th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-family:Bodoni MT Black">
                                        <input type="text" class="form-control text-center" id="de" readonly>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on("click", "#detail", function() {
        var Id = $(this).data('id');
        var Keca = $(this).data('keca');
        var Laki = $(this).data('laki');
        var Perempuan = $(this).data('perempuan');
        var Jumlah = $(this).data('jumlah');

        $("#iddetail").val(Id);
        $("#ke").val(Keca);
        $("#la").val(Laki);
        $("#pr").val(Perempuan);
        $("#de").val(Jumlah);
    })
    $(document).ready(function(e) {
        $("#form").on("submit", (function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= base_url('kecamatan/ubahkecamatan'); ?>',
                type: 'POST',
                data: new FormatData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    document.location.href = "<?= base_url('kecamatan'); ?>";
                }
            });
        }));
    })
</script>