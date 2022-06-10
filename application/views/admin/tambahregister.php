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
                            Data Ini Hanya Digunakan Untuk Download Data Diagnosa Pendaftaran Pasien</h3>
                        <div class="card-body">
                            <form action="<?= base_url('admin/addregister') ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="lastname" style="color: black;">Last Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?= set_value('lastname'); ?>">
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user-circle-o"></i></span>
                                            </div>
                                        </div>
                                        <?= form_error('lastname', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="firstname" style="color: black;">First Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?= set_value('firstname'); ?>">
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user-circle"></i></span>
                                            </div>
                                        </div>
                                        <?= form_error('firstname', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="username" style="color: black;">Username</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                        <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="email" style="color: black;">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="password" style="color: black;">Passoword</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Password">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-key"></i></span></div>
                                        </div>
                                    </div>
                                    <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                    <div class="col-lg-6">
                                        <label for="password2" style="color: black;">Repeat Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Repeat Password">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-unlock-alt"></i></span></div>
                                        </div><br>
                                        <label for="jeniskelamin" style="color: black;">Jenis Kelamin</label>
                                        <div class="input-group">
                                            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-mars-double"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="level" style="color: black;">Pilih Level</label>
                                        <div class="input-group">
                                            <select name="level" id="level" class="form-control">
                                                <option value="">Pilih Level</option>
                                                <option value="dokter">dokter</option>
                                                <option value="member">member</option>
                                            </select>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-users"></i></span>
                                            </div>
                                        </div><br>

                                        <label for="alamat" style="color: black;">Alamat</label>
                                        <div class="input-group">
                                            <textarea name="alamat" id="alamat" cols="80" rows="4" class="form-control" placeholder="Alamat" value="<?= set_value('alamat'); ?>"></textarea>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-success" title="Ubah User"><i class="fa fa-save"></i></button>
                                            <a href="<?= base_url('admin'); ?>" class="btn btn-primary btn-animation" title="Kembali Ke Tabel Regis">
                                                <i class="ion-arrow-left-a"></i></a>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>