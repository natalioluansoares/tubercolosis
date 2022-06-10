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
            <div class="col-sm-12">
                <div class="card m-b-30">
                    <div class="card-body" style="background-color: rgb(241, 233, 233); color: black">
                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                <table class="table table-bordered table-striped" id="datatable">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Company</th>
                                            <th data-priority="3">Last Name</th>
                                            <th data-priority="1">First Name</th>
                                            <th data-priority="1">Username</th>
                                            <th data-priority="1">Tempat Tinggal</th>
                                            <th data-priority="6" class="tabledit-delete-button btn btn-sm btn-info text-center"><i class="fa fa-align-justify"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($nato as $res) : ?>
                                            <tr>
                                                <th> <span class="co-name"><?= $no++; ?></span></th>
                                                <td><?= $res['first_name']; ?></td>
                                                <td><?= $res['last_name']; ?></td>
                                                <td><a href="" title="Click Di Sini Untuk Update Password Anda" data-toggle="modal" data-target=".updatepassword" id="ubahuser" class="btn-animation" data-animation="zoomInRight" data-id="<?= $res['id']; ?>"><?= $res['username']; ?></a></td>
                                                <td><?= $res['alamat']; ?></td>

                                                <td class="text-center">

                                                    <a href="<?= base_url('admin/editregister/' . $res['id']); ?>" class="tabledit-delete-button btn btn-sm btn-success" title="Update Data User">
                                                        <i class="ti-pencil"></i></a>

                                                    <a href="<?= base_url('admin/addregister'); ?>" class="tabledit-delete-button btn btn-sm btn-info" title="Update Data User">
                                                        <i class="fa fa-save"></i></a>

                                                    <a href="" class="tabledit-delete-button btn btn-sm btn-danger btn-animation" title="Delete Data User"><i class="ti-trash"></i></a>

                                                    <a href="" class="tabledit-delete-button btn btn-sm btn-primary btn-animation" title="Looking Picture User" data-animation="zoomInRight" data-toggle="modal" data-target="#exampleModalLong-1">
                                                        <i class="ti-user"></i></a>

                                                    <a href="" class="btn btn-default btn-sm btn-success" title="Detail Data User" data-toggle="modal" data-target=".detail" id="modaldetail" data-id="<?= $res['id']; ?>" data-email="<?= $res['email']; ?>" data-jeniskelamin="<?= $res['jenis_kelamin']; ?>" data-status="<?= $res['status']; ?>" data-alamat="<?= $res['alamat']; ?>" data-level="<?= $res['level']; ?>">
                                                        <i class="fa fa-fw fa-eye"></i></a>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalLong-1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLongTitle-1"><?= $users['username']; ?></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="btn btn-dark"><i class="fa fa-close"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/nato.png" alt="" class="img-fluid rounded-circle" width="450px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade detail" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(217, 12, 235, 0.801); color:white;">
                <h4 class="modal-title text-center" id="exampleModalLongTitle-1">Detail User</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="btn btn-dark"><i class="fa fa-close"></i></span>
                            </button> -->
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>
                                <h5 style="font-family:Times New Roman">Email</h5< /th>
                            <th>
                                <h5 style="font-family:Times New Roman">Level</h5< /th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family:Bodoni MT Black">
                                <input type="hidden" class="form-control" id="iddetail">
                                <input type="text" class="form-control" id="email" readonly>
                            </td>
                            <td style="font-family:Bodoni MT Black">
                                <input type="text" class="form-control" id="level" readonly>
                            </td>
                        </tr>
                    </tbody>
                    <thead class="table-primary">
                        <tr>
                            <th>
                                <h5 style="font-family:Times New Roman">Jenis Kelamin</h5< /th>
                            <th>
                                <h5 style="font-family:Times New Roman">Alamat</h5< /th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family:Bodoni MT Black">
                                <input type="text" class="form-control" id="jeniskelamin" readonly>
                            </td>
                            <td style="font-family:Bodoni MT Black">
                                <input type="text" class="form-control" id="alamat" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>
                                <h5 style="font-family:Times New Roman" class="text-center">Status</h5< /th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family:Bodoni MT Black">
                                <textarea name="" id="nato" class="form-control" cols="90" rows="3" readonly></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <button type="sumbit" class="btn btn-danger form-control" data-dismiss="modal" title="Click Untuk Kembali Ke Tabel User">Kembali</button>
                        </tr>
                    </thead>
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
    $(document).on("click", "#modaldetail", function() {
        var Id = $(this).data('id');
        var Email = $(this).data('email');
        var Jeniskelamin = $(this).data('jeniskelamin');
        var Level = $(this).data('level');
        var Status = $(this).data('status');
        var Alamat = $(this).data('alamat');
        var Userkecamatan = $(this).data('userkecamatan');

        $("#iddetail").val(Id);
        $("#email").val(Email);
        $("#level").val(Level);
        $("#jeniskelamin").val(Jeniskelamin);
        $("#nato").val(Status);
        $("#alamat").val(Alamat);
        $("#kecamatan").val(Userkecamatan);

    })
</script>
<div class="modal fade" id="addregister" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog  modal-lg" role="document" style="background-color: rgba(217, 12, 235, 0.801); color:white;">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(7, 48, 182); color:white;">
                <h4 class="modal-title text-center" id="exampleModalLongTitle-1">TAMBAHAKAN USER</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="text-white"><i class="fa fa-close"></i></span>
                            </button> -->
            </div>
            <div class="modal-body" style="background-color: rgb(60, 160, 29);">
                <form action="<?= base_url('admin/addregister'); ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="lastname" style="color: white;">Last Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-user-circle-o"></i></span>
                                </div>
                            </div><br>
                            <label for="firstname" style="color: white;">First Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-user-circle"></i></span>
                                </div>
                            </div><br>
                            <label for="username" style="color: white;">Username</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-user"></i></span>
                                </div>
                            </div><br>
                            <label for="email" style="color: white;">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-envelope"></i></span>
                                </div>
                            </div><br>
                            <label for="alamat" style="color: white;">Status</label>
                            <div class="input-group">
                                <textarea name="status" id="nato" cols="80" rows="5" class="form-control" placeholder="Status"></textarea>
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="password" style="color: white;">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-unlock-alt"></i></span>
                                </div>
                            </div><br>
                            <label for="confpassword" style="color: white;">Conf Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Conf Password">
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-unlock"></i></span>
                                </div>
                            </div><br>
                            <label for="jeniskelamin" style="color: white;">Jenis Kelamin</label>
                            <div class="input-group">
                                <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin Anda</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-mars-double"></i></span>
                                </div>
                            </div><br>
                            <label for="level" style="color: white;">Level</label>
                            <div class="input-group">
                                <select name="level" id="level" class="form-control">
                                    <option value="">Pilih Level Anda</option>
                                    <option value="dokter">dokter</option>
                                    <option value="member">member</option>
                                </select>
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-users"></i></span>
                                </div>
                            </div><br>
                            <label for="alamat" style="color: white;">Alamat</label>
                            <div class="input-group">
                                <textarea name="alamat" id="alamat" cols="80" rows="5" class="form-control" placeholder="Alamat"></textarea>
                                <div class="input-group-append bg-custom b-0">
                                    <span class="input-group-text btn btn-success">
                                        <i class="fa fa-user"></i></span>
                                </div>
                            </div><br>
                        </div>
                        <div class="col-lg-12">
                            <div class="input-group">
                                <select name="kecamatan" id="kecamatan" class="form-control">
                                    <option value="">Cari Data Pasien Sesuai Dengan Kecamatan</option>
                                    <?php foreach ($Kecamatan as $post) : ?>
                                        <option value="<?= $post['kecamatan']; ?>"><?= $post['kecamatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div><br><br>
                        <div class="col-lg-12">
                            <button type="submit" class="form-control btn btn-primary">Simpan</button>
                            <button type="sumbit" class="btn btn-danger form-control" data-dismiss="modal" title="Click Untuk Kembali Ke Tabel User">Kembali</button>
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
<div class="modal fade editregister" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgba(217, 12, 235, 0.801); color:white;">
                <h4 class="modal-title text-center" id="exampleModalLongTitle-1">UPDATE USER</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="text-white"><i class="fa fa-close"></i></span>
                            </button> -->
            </div>
            <div class="modal-body" style="background-color: rgba(3, 79, 194, 0.685); color:white;">

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="<?= base_url() ?>assets/tutorialcssjsadmin/pages/form-advanced.js"></script>
<script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on("click", "#modalregister", function() {
        var Id = $(this).data('id');
        var Lastname = $(this).data('lastname');
        var Firstname = $(this).data('firstname');
        var Username = $(this).data('username');
        var Email = $(this).data('email');
        var Jeniskelamin = $(this).data('jeniskelamin');
        var Level = $(this).data('level');
        var Status = $(this).data('status');
        var Alamat = $(this).data('alamat');
        var Idkecamatan = $(this).data('idkecamatan');

        $(".editregister #iduser").val(Id);
        $(".editregister #lastname").val(Lastname);
        $(".editregister #firstname").val(Firstname);
        $(".editregister #username").val(Username);
        $(".editregister #email").val(Email);
        $(".editregister #jeniskelamin").val(Jeniskelamin);
        $(".editregister #level").val(Level);
        $(".editregister #nato").val(Status);
        $(".editregister #alamat").val(Alamat);
        $(".editregister #natalio").val(Idkecamatan);
    })
    $(document).ready(function(e) {
        $("#form").on("submit", (function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= base_url('admin/edirregister'); ?>',
                type: 'POST',
                data: new FormatData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    document.location.href = "<?= base_url('admin'); ?>";
                }
            });
        }));
    })
</script>
<div class="modal fade updatepassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="exampleModalLongTitle-1">Update Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="btn btn-dark"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/changepassword'); ?>" method="post">
                    <label for="password">Password</label>
                    <input type="hidden" class="form-control" name="iduser" id="idpassword">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <div class="input-group-append bg-custom b-0">
                            <span class="input-group-text btn btn-success">
                                <i class="fa fa-unlock-alt"></i></span>
                        </div>
                    </div><br>
                    <label for="confpassword">Conf Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Conf Password">
                        <div class="input-group-append bg-custom b-0">
                            <span class="input-group-text btn btn-success">
                                <i class="fa fa-unlock"></i></span>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-info form-control" title="Click Untuk Ubah Password Anda">Update</button>
                    <button type="sumbit" class="btn btn-danger form-control" data-dismiss="modal" title="Click Untuk Kembali Ke Tabel User">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="<?= base_url('assets/'); ?>tutorialcssjsadmin/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on("click", "#ubahuser", function() {
        var Id = $(this).data('id');

        $("#idpassword").val(Id);

    })
</script>