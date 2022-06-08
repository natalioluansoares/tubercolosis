<section style="background-color: rgba(0, 0, 0, 0.5); height:696px">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow my-5">
                    <div class="card-body p-0" style="background-color: rgb(241, 233, 233); color: black">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="flash" data-flas1="<?php echo $this->session->flashdata('success'); ?>"></div>
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="justify-content-center">
                                        <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/background/logo.jpg" class="rounded-circle" width="150px" style="display:block; margin-left:auto; margin-right:auto;">
                                    </div><br>
                                    <!-- <form class="user" method="POST" action="<?= base_url(''); ?>"> -->
                                    <?= form_open('auth/process') ?>
                                    <label for="username">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="username" value="<?= set_value('username'); ?>">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                <i class="fa fa fa-users"></i></span></div>
                                    </div>
                                    <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" value="<?= set_value('password'); ?>" placeholder="Password">
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text btn btn-info">
                                                <i class="fa fa fa-key"></i></span></div>
                                    </div>
                                    <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?><br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block" name="login" title="Login Data">
                                        Login
                                    </button>
                                    <?= form_close() ?>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/register'); ?>" title="Regis Akun">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>