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
                        <p class="text-muted m-b-30 font-14 text-center">Tabel Ini Hanya Digunakan Untuk Menginput Data Konsultasi</p>
                        <div class="tab-pane active p-3" id="kabupaten" role="tabpanel">
                            <p class="font-14 mb-0">
                            <table id="datatable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Company</th>
                                        <th data-priority="1" style="width: 10%;">Nama Gejala</th>
                                        <th data-priority="1" style="width: 10%;">Nama Penyakit</th>
                                        <th data-priority="1" style="width: 50%;">Solusi Penyakit</th>
                                        <th data-priority="1" class="text-center"><i class="fa fa-cog "></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($relasidiagnosa as $rs) : ?>
                                        <tr>
                                            <th> <span class="co-name"><?= $no++; ?></span></th>
                                            <td><?= $rs['nama_gejala']; ?></td>
                                            <td><?= $rs['nama_penyakit']; ?></td>
                                            <td><?= $rs['isi_solusi']; ?></td>
                                            <td class="text-center">
                                                <a href="" class="tabledit-delete-button btn btn-sm btn-success btn-animation mb-2" title="Update Data Gejala" data-toggle="modal" data-animation="rubberBand" data-target=".updaterelasi" id="modelrelasi" data-relasi="<?= $rs['id_relasi']; ?>" data-natalio="<?= $rs['gejala_id']; ?>" data-penyakit="<?= $rs['penyakit_id']; ?>" data-namasolu="<?= $rs['solusi_id']; ?>">
                                                    <i class="ti-pencil"></i></a>

                                                <a href="" class="tabledit-delete-button btn btn-sm btn-danger mb-2" title="Delete Data Konsultasi">
                                                    <i class="ti-trash"></i></a>

                                                <a href="" class="tabledit-delete-button btn btn-sm btn-warning btn-animation mb-2" data-toggle="modal" data-animation="wobble" data-target=".addgejala" title="Input Data Gejala"><i class="ti-save"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade addgejala" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">"
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">INPUT DATA Penyakit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('relasidiagnosa/addrelasidiagnosa'); ?>" method="POST">
                            <div class="modal-body">
                                <label for="namagejala">Nama Penyakit</label>
                                <div class="input-group">
                                    <select name="penyakit" id="penyakitpenyakit" class="form-control">
                                        <option value="">Pilih Penyakit</option>
                                        <?php foreach ($penyakit as $pe) : ?>
                                            <option value="<?= $pe['id']; ?>"><?= $pe['nama_penyakit']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>

                                <label for="kodegejala">Nama Gejala</label>
                                <div class="input-group">
                                    <select name="gejala" id="gejalagejala" class="form-control">
                                        <option value="">Select Nama Gejala</option>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>

                                <label for="namagejala">Solusi</label>
                                <div class="input-group">
                                    <!-- <textarea name="solusi" id="solusisolusi" cols="30" rows="5" class="form-control natosolusi"></textarea> -->
                                    <select name="solusi" id="solusisolusi" class="form-control" style="width: 10%;">
                                        <option value="" style="width: 10%;">Select Solusi</option>
                                    </select>
                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                            <i class="fa fa-pencil-square-o"></i></span></div>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Konsultasi"><i class="fa fa-refresh"></i></button>
                                <button type="submit" class="btn btn-success" title="Click Untuk Input Data Konsultasi"><i class="fa fa-send (alias)"></i></button>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div>
        <!-- <script src="<?= base_url(); ?>assets/ckeditores/ckeditor4/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('solusisolusi');
        </script> -->
        <div class="modal fade updaterelasi" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPDATE DATA PENYAKIT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('relasidiagnosa/editrelasidiagnosa'); ?>" method="POST">
                        <div class="modal-body">
                            <label for="namagejala">Nama Penyakit</label>
                            <div class="input-group">
                                <select name="penyakit" id="penya" class="form-control">
                                    <?php foreach ($penyakit as $pe) : ?>
                                        <option value="<?= $pe['id']; ?>"><?= $pe['nama_penyakit']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                        <i class="fa fa-pencil-square-o"></i></span></div>
                            </div><br>

                            <label for="kodegejala">Nama Gejala</label>
                            <div class="input-group">
                                <input type="hidden" class="form-control" id="idrelasi" placeholder="Kode Rumahsakit" name="idrelasi">
                                <select name="gejala" class="form-control idgejala">
                                    <?php foreach ($gejala as $gjl) : ?>
                                        <option value="<?= $gjl['id']; ?>"><?= $gjl['nama_gejala']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                        <i class="fa fa-pencil-square-o"></i></span></div>
                            </div><br>

                            <label for="namagejala">Solusi</label>
                            <div class="input-group">
                                <select name="solusi" id="solusi" class="form-control" style="width: 10%;">
                                    <?php foreach ($solusi as $gjl) : ?>
                                        <option value="<?= $gjl['id']; ?>"><?= substr($gjl['isi_solusi'], 0, 53); ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                        <i class="fa fa-pencil-square-o"></i></span></div>
                            </div>
                        </div><br>
                        <div class="modal-footer">
                            <button type="sumbit" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Konsultasi"><i class="fa fa-refresh"></i></button>
                            <button type="submit" class="btn btn-success" title="Click Untuk Update Data Konsultasi"><i class="fa fa-send (alias)"></i></button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>
        <!-- <script src="<?= base_url(); ?>assets/ckeditores/ckeditor4/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('solu');
        </script> -->
        <script type="text/javascript">
            $(document).on("click", "#modelrelasi", function() {
                var Relasi = $(this).data('relasi');
                var Natalio = $(this).data('natalio');
                var Penyakit = $(this).data('penyakit');
                var Solusi = $(this).data('namasolu');

                $(".updaterelasi #idrelasi").val(Relasi);
                $(".updaterelasi .idgejala").val(Natalio);
                $(".updaterelasi #penya").val(Penyakit);
                $(".updaterelasi #solusi").val(Solusi);
                // CKEDITOR.instances['solu'].setData(solu);
            })

            $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: '<?= base_url('relasidiagnosa/editrelasidiagnosa'); ?>',
                        type: 'POST',
                        data: new FormatData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function() {
                            document.location.href = "<?= base_url('relasidiagnosa'); ?>";
                        }
                    });
                }));
            })
        </script>