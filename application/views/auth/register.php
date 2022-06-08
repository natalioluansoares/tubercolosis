    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow my-5">
                    <div class="card-body p-0" style="background-color: rgb(241, 233, 233); color: black">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="height: 600px; overflow-y: scroll; ">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="justify-content-center">
                                        <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/background/logo.jpg" class="rounded-circle" width="130px" style="display:block; margin-left:auto; margin-right:auto;">
                                    </div><br>
                                    <form class="user" method="POST" action="<?= base_url('auth/register'); ?>">
                                        <label for="">Last Name</label>
                                        <div class="input-group">
                                            <input type="text" autofocus class="form-control form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?= set_value('username'); ?>">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-user"></i></span></div>
                                        </div>
                                        <?= form_error('lastname', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">First Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control" id="firstname" name="firstname" placeholder="First Name" value="<?= set_value('username'); ?>">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-user-plus"></i></span></div>
                                        </div>
                                        <?= form_error('firstname', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Username</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="name" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-user-circle"></i></span></div>
                                        </div>
                                        <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Email</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-at"></i></span></div>
                                        </div>
                                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Passoword</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Password">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-key"></i></span></div>
                                        </div>
                                        <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                        <label for="">Repeat Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Repeat Password">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-unlock-alt"></i></span></div>
                                        </div><br>
                                        <label for="kecamatan">Kecamatan</label>
                                        <div class="input-group">
                                            <input type="text" id="kecamatan" name="kecamatan" class="form-control">
                                            <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                    <i class="fa fa-globe"></i></span></div>
                                        </div><br>
                                        <div class="input-group">
                                            <input type="hidden" class="form-control" id="judul" name="judul">
                                        </div>
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
                                        <div class="input-group">
                                            <input type="hidden" class="form-control form-control" name="level" id="level" value="member">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" title="Regis Akun">
                                            Register Akun
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>auth">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>