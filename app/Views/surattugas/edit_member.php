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
                                        Data Team Telah Di Update</h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
								<div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <ul class="progressbar">
                                                <li class="active">Edit Data Surat Tugas</li>
                                                <li class="active">Edit Team</li>
                                                <li>Preview</li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-5">
                                <h5><span id="judul2"><i class="fa fa-user mr-2"></i>Edit Anggota Team</span></h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <form action="<?php echo base_url('surattugas/edit_datateam')?>/<?= $team->id?>" method="post" id="forminputteam">
                                <div class="col-md-8 offset-md-2">
                                    <div class="card border border-primary">
                                        <div class="card-header text-center">
                                            <strong class="card-title h6">Tabel Edit Team</strong>
                                        </div>
                                        <div class="card-body">
                                        <input type="hidden" name="idSurtu" value="<?= $team->idSurtu?>">
                                        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nip" class=" form-control-label mt-2"><strong>NIP<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="nip" name="nip" class="form-control form-control-sm" value="<?= $team->nip?>" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class="form-control-label mt-2"><strong>Nama<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="name" name="nama"  class="form-control form-control-sm" value="<?= $team->nama?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="unit" class=" form-control-label mt-2"><strong>Unit<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="unit" name="unit" class="form-control form-control-sm" value="<?= $team->unit_kerja?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="jabatan" class=" form-control-label mt-2"><strong>Jabatan<span class="text-danger">*</span></strong></label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="jabatan" name="jabatan" class="form-control form-control-sm" value="<?= $team->jabatan?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="mt-5" id="buttonpage2"><hr>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                        <div class="float-right">
                                        <a href="<?= base_url()?>/surattugas/edit_team/<?= $team->idSurtu?>" class="btn btn-danger" type="button">Kembali</a>
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