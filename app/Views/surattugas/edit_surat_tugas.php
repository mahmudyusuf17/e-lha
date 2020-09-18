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
                                        Surat Tugas Telah Diperbarui</h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
								<div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <ul class="progressbar">
                                                <li class="active">Update Data Surat Tugas</li>
                                                <li><a href="<?= base_url()?>/surattugas/edit_team/<?= $surat->idSurtu?>"><span class="text-hitam">Update Team</span></a></li>
                                                <li><a href="<?= base_url()?>/surattugas/preview_edit/<?= $surat->idSurtu?>"><span class="text-hitam">Preview</span></a></li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-5">
                                <h5><i class="fa fa-edit mr-2"></i>Form Update Surat Tugas</h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <form method="post" id="forminputsurtu" enctype="multipart/form-data" action="<?php echo base_url('surattugas/update_surtu')?>/<?= $surat->idSurtu?>">
                                            <?php if ($role->role_id == 1) { ?>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="no_surat" class="form-control-label mt-2 text-hitam"><strong>Nomor Surat<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="no_surat" name="no_surat" class="form-control" value="<?= $surat->no_surat?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="judul" class="form-control-label mt-2 text-hitam"><strong>Judul<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="judul" name="judul" class="form-control" value="<?= $surat->judul?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam"><strong>Tanggal Awal<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_awal" max="2500-12-31" 
                                                    min="1900-01-01" class="form-control" value="<?= $surat->tgl_awal?>" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam"><strong>Tanggal Akhir<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_akhir" max="3000-12-31" 
                                                    min="1000-01-01" class="form-control" value="<?= $surat->tgl_akhir?>" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="dasar" class=" form-control-label mt-3 text-hitam"><strong>Dasar<span class="text-danger">*</span></strong></label>
                                                </div>
                                                    <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="dasar" id="ckeditor" cols="30" rows="5" required><?= $surat->dasar?></textarea>
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="kepada" class="form-control-label mt-2 text-hitam"><strong>Kepada<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                    <textarea class="ckeditor" name="kepada" id="ckeditor" required><?= $surat->kepada?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="untuk" class=" form-control-label mt-3 text-hitam"><strong>Untuk<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="untuk" required><?= $surat->untuk?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="status" class=" form-control-label mt-2 text-hitam"><strong>Status Surat<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <select name="status_surat" id="SelectLm" class="form-control">
                                                            <option></option><?= $surat->n_status?>
                                                            <option <?php if ($surat->n_status == 0) echo'selected';?> value="0">Belum disahkan</option>
                                                            <option <?php if ($surat->n_status == 1) echo'selected';?> value="1">Ditetapkan</option>
                                                            <option <?php if ($surat->n_status == 2) echo'selected';?> value="2">Ditolak</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tembusan" class=" form-control-label mt-3 text-hitam"><strong>Tembusan<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="tembusan" id="ckeditor" required><?= $surat->tembusan?></textarea>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php if ($role->role_id == 2) { ?>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="judul" class="form-control-label mt-2 text-hitam"><strong>Judul<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="judul" name="judul" class="form-control" value="<?= $surat->judul?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam"><strong>Tanggal Awal<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_awal" max="2500-12-31" 
                                                    min="1900-01-01" class="form-control" value="<?= $surat->tgl_awal?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam"><strong>Tanggal Akhir<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_akhir" max="3000-12-31" 
                                                    min="1000-01-01" class="form-control" value="<?= $surat->tgl_akhir?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="dasar" class=" form-control-label mt-3 text-hitam"><strong>Dasar<span class="text-danger">*</span></strong></label>
                                                </div>
                                                    <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="dasar" id="ckeditor" cols="30" rows="5" disabled><?= $surat->dasar?></textarea>
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="kepada" class="form-control-label mt-2 text-hitam"><strong>Kepada<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                    <textarea class="ckeditor" name="kepada" id="ckeditor" disabled><?= $surat->kepada?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="untuk" class=" form-control-label mt-3 text-hitam"><strong>Untuk<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="untuk" disabled><?= $surat->untuk?></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="status" class=" form-control-label mt-2 text-hitam"><strong>Status Surat<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <select name="status_surat" id="SelectLm" class="form-control" disabled>
                                                            <option></option><?= $surat->n_status?>
                                                            <option <?php if ($surat->n_status == 0) echo'selected';?> value="0">Belum disahkan</option>
                                                            <option <?php if ($surat->n_status == 1) echo'selected';?> value="1">Ditetapkan</option>
                                                            <option <?php if ($surat->n_status == 2) echo'selected';?> value="2">Ditolak</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tembusan" class=" form-control-label mt-3 text-hitam"><strong>Tembusan<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="tembusan" id="ckeditor" disabled><?= $surat->tembusan?></textarea>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="mt-5" id="buttonpage1"><hr>
                                                <?php if ($role->role_id == 1) { ?>
                                                <button class="btn btn-primary" type="submit">Update</button>
                                                <?php } ?>
                                                <?php if ($role->role_id == 2) { ?>
                                                <button class="btn btn-primary" type="submit" disabled>Update</button>
                                                <?php } ?>
                                                <div class="float-right">
                                                <button class="btn btn-warning" type="button" disabled>Finish</button>
                                                <a href="<?= base_url()?>/surattugas/edit_team/<?= $surat->idSurtu?>" class="btn btn-success" type="button">Next</a>
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