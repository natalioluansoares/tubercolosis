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
                            <form action="<?= base_url('admin/editregister') ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="hidden" class="form-control" name="iduser" id="iduser" value="<? $registe['id'] ?>">
                                        <label for="lastname" style="color: black;">Last Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?= $register['last_name']; ?>">
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user-circle-o"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="firstname" style="color: black;">First Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?= $register['first_name']; ?>">
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user-circle"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="username" style="color: black;">Username</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $register['username']; ?>" readonly>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="kecamatan" style="color: black;">Kecamatan</label>
                                        <div class="input-group">
                                            <input type="text" id="keca" name="kecamatan" class="form-control">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-success">
                                                    <i class="fa fa-globe"></i></span></div>
                                        </div><br>
                                        <label for="alamat" style="color: black;">Status</label>
                                        <div class="input-group">
                                            <textarea name="status" id="nato" cols="80" rows="5" class="form-control" placeholder="Status"><?= $register['status']; ?></textarea>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email" style="color: black;">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $register['email']; ?>" readonly>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="jeniskelamin" style="color: black;">Jenis Kelamin</label>
                                        <div class="input-group">
                                            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                                <option value="<?= $register['jenis_kelamin']; ?>"><?= $register['jenis_kelamin']; ?></option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-mars-double"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="level" style="color: black;">Pilih Level Anda</label>
                                        <div class="input-group">
                                            <select name="level" id="level" class="form-control">
                                                <option value="<?= $register['level']; ?>"><?= $register['level']; ?></option>
                                                <option value="dokter">dokter</option>
                                                <option value="member">member</option>
                                            </select>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-users"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="" style="color: black;">Judul Website</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="judul" name="judul" readonly>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-users"></i></span>
                                            </div>
                                        </div><br>
                                        <label for="alamat" style="color: black;">Alamat</label>
                                        <div class="input-group">
                                            <textarea name="alamat" id="alamat" cols="80" rows="5" class="form-control" placeholder="Alamat"><?= $register['alamat']; ?></textarea>
                                            <div class="input-group-append bg-custom b-0">
                                                <span class="input-group-text btn btn-success">
                                                    <i class="fa fa-user"></i></span>
                                            </div>
                                        </div><br>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" id="alamatwebsite" name="alamatwebsite">
                                        </div>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" id="tlpwebsite" name="tlpwebsite">
                                        </div>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" id="websiterumahsakit" name="websiterumahsakit">
                                        </div>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" id="alamatemail" name="alamatemail">
                                        </div><br>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="form-control btn btn-primary">Update</button>
                                        <a href="<?= base_url('admin') ?>" class="btn btn-danger form-control" data-dismiss="modal" title="Click Untuk Kembali Ke Tabel User">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>