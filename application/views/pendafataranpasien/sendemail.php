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
            <div class="col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-2 text-center" style="font-family:Bodoni MT Black"><?= $title; ?></h4>
                        <p class="text-muted m-b-30 font-14 text-center">Data Ini Hanya Digunakan Untuk Menginput Data Email Dokter</p>
                    </div>
                    <form class="form-horizontal">
                        <div class="modal-body">
                            <div class="input-group">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= set_value('kecamatan'); ?>" placeholder="Name">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                        <i class="fa fa-pencil"></i></span></div>
                            </div><br>
                            <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
                            <div class="input-group">
                                <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="<?= set_value('judul'); ?>">
                                <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                        <i class="fa fa-pencil"></i></span></div>
                            </div><br>
                            <?= form_error('alamatberita', '<small class="text-danger pl-2">', '</small>'); ?>
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('admin/anual'); ?>" class="btn btn-danger" data-dismiss="modal" title="Click Untuk Kembali Tabel Menu"><i class="fa fa-refresh"></i></a>
                    <button type="submit" class="btn btn-success" title="Click Untuk Update Data Konsultasi"><i class="fa fa-send (alias)"></i></button>
                    <!-- <input type="submit" name="submit" value="Kirim" class="btn btn-success" title="Click Untuk Input Data Menu"> -->

                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
<script src="<?= base_url('assets/tes/jquery.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#kecamatan').on('input', function() {
            var kecamatan = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('search') ?>",
                dataType: "JSON",
                data: {
                    kecamatan: kecamatan
                },

                cache: false,
                success: function(data) {
                    $.each(data, function(kecamatan, judul) {
                        $('[name="judul"]').val(data.judul);
                    });
                }

            });
            return false;

        });
    });
</script>