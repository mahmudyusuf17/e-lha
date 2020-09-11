<div class="page-content--bge5" style="background-image:url(<?php echo base_url()?>/../assets/image/Login.jpg); background-repeat:no-repeat; background-position:center; background-size:cover;">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content col-md-10 offset-md-8">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?php echo base_url()?>/../assets/image/logo-BKN.png" alt="Logo BKN" width="70%">
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
                        <form method="post" action="<?= base_url('user/registrasi')?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nip" class=" form-control-label mt-2 text-hitam"><strong>NIP<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="nip" name="nip" class="form-control form-control-sm" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nama" class=" form-control-label mt-2 text-hitam"><strong>Nama<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="nama" name="nama" class="form-control form-control-sm" required>
                                                </div>
                                            </div>
                                            <input type="text" id="role_id" name="role_id" value="2" hidden>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email" class=" form-control-label mt-2 text-hitam"><strong>Email<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="email" id="email" name="email" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password" class=" form-control-label mt-2 text-hitam"><strong>Password<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="password" id="password" name="password" class="form-control form-control-sm active">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password2" class=" form-control-label text-hitam"><strong>Konfirmasi Password<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="password" id="password2" name="password2" class="form-control form-control-sm active">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="unit_kerja" class=" form-control-label text-hitam"><strong>Unit Kerja<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="unit_kerja" name="unit_kerja" class="form-control form-control-sm" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jabatan" class=" form-control-label mt-2 text-hitam"><strong>Jabatan<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="jabatan" name="jabatan" class="form-control form-control-sm" required>
                                                </div>
                                            </div>
                        <div class="text-right mt-4"><hr>
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-arrow-circle-right"></i> Daftar</button>
                            <button class="btn btn-danger btn-sm" type="reset"><i class="fa fa-ban"></i> Reset</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>