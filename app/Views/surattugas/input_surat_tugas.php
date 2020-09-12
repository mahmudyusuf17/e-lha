<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                            <?php 
                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) {?>
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger"><strong>Mohon Maaf</strong></span>
                                        Terdapat kesalahan dalam memasukkan data, yaitu: 
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
                                    $sukses = session()->getFlashdata('sukses');
                                    if (!empty($sukses)) {?>
                                    <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                        <h4><span class="badge badge-pill badge-primary"><strong>Berhasil</strong></span>
                                        Surat Tugas Telah Disimpan</h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
								<div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <ul class="progressbar">
                                                <li class="active">Input Data Surat Tugas</li>
                                                <li>Input Team</li>
                                                <li>Preview</li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-5">
                                <h5><span id="judul1"><i class="fa fa-download mr-2"></i>Form Input Surat Tugas</h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <form method="post" id="forminputsurtu" enctype="multipart/form-data" action="<?php echo base_url('surattugas/input')?>">
                                <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="judul" class="form-control-label mt-2 text-hitam"><strong>Judul<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="judul" name="judul" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam"><strong>Tanggal Awal<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_awal" max="2500-12-31" 
                                                    min="1900-01-01" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam"><strong>Tanggal Akhir<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_akhir" max="3000-12-31" 
                                                    min="1000-01-01" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="dasar" class=" form-control-label mt-3 text-hitam"><strong>Dasar<span class="text-danger">*</span></strong></label>
                                                </div>
                                                    <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="dasar" id="ckeditor" cols="30" rows="5" required></textarea>
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="kepada" class="form-control-label mt-2 text-hitam"><strong>Kepada<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                    <textarea class="ckeditor" name="kepada" id="ckeditor" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="untuk" class=" form-control-label mt-3 text-hitam"><strong>Untuk<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="untuk" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="status" class=" form-control-label mt-2 text-hitam"><strong>Status Surat<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <?php if ($role->role_id == 1) { ?>
                                                <div class="col-12 col-md-5">
                                                    <select name="status_surat" id="SelectLm" class="form-control">
                                                            <option></option>
                                                            <option value="0" selected>Belum disahkan</option>
                                                            <option value="1">Ditetapkan</option>
                                                            <option value="2">Ditolak</option>
                                                        </select>
                                                </div>
                                                <?php } ?>
                                                <?php if ($role->role_id == 2) { ?>
                                                <div class="col-12 col-md-5">
                                                    <select name="status_surat" id="SelectLm" class="form-control">
                                                            <option value="0" selected>Belum disahkan</option>
                                                        </select>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tembusan" class=" form-control-label mt-3 text-hitam"><strong>Tembusan<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="tembusan" id="ckeditor" required></textarea>
                                                </div>
                                            </div>
                                            <div class="mt-5" id="buttonpage1"><hr>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                <div class="float-right">
                                                <button class="btn btn-warning" type="button" disabled>Finish</button>
                                                <button class="btn btn-success" onclick="notif()" type="button">Next</button>
                                                <button class="btn btn-danger" type="button" disabled>Previous</button>
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
                        </div>
                    </div>
                </div>
</div>