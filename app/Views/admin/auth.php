<div class="page-content--bge5" style="background-image:url(<?php echo base_url()?>/../assets/image/Login.jpg); background-repeat:no-repeat; background-position:center; background-size:cover;">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content col-md-8 offset-md-5">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?php echo base_url()?>/../assets/image/logo-BKN.png" alt="Logo BKN">
                            </a>
                    </div>
                    
                    <div class="login-form">
                    <?php 
                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) {?>
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <ul class="mb-3 ml-3">
                                            <?php foreach ($errors as $error) {?>
                                                <li><?= esc($error)  ?></li>
                                            <?php } ?>
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
                                    
                                    <?php 
                                    $gagal = session()->getFlashdata('gagal');
                                    if (!empty($gagal)) {?>
                                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                            <span class="badge badge-pill badge-danger"><strong>Mohon Maaf</strong></span><br>
                                            <?= session()->getFlashdata('gagal') ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                                </div>
                                    <?php } ?>
                        <form method="post" action="<?= base_url('auth/login')?>">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                        </div>
                            
                        <div class="input-group mt-3">
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="login-checkbox mt-3">
                            <label>
                                <input type="checkbox" name="remember">Remember Me
                            </label>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-arrow-circle-right"></i> Masuk</button>
                            <button class="btn btn-danger btn-md" type="reset"><i class="fa fa-ban"></i> Reset</button>
                        </div>
                        </form>
                        <div class="register-link">
                            <label>
                                <a href="#">Lupa Password?</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>