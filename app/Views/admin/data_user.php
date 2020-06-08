<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-user"></i><strong class="card-title" v-if="headerText">Detail User</strong></h3>
                                        <a href="<?= base_url('user') ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
									</div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-3 mt-3">
                                <div class="card">
                                    <div class="image img-fluid img-thumbnail text-center">
                                        <img src="<?= base_url() ?>/../assets/avatar/avatar.jpg" alt="Mahmud Yusuf" />
                                    </div>
                                        <h4 class="text-center mt-2 mb-2"><?= $data['name']; ?></h4>
                                </div>
                                    <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i> Edit Data User
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card-body card-block">
                                    <?= form_open('user/edit_user/') ?>
                                        <div class="form-group">
                                            <label for="name" name="name" class=" form-control-label"><h5>Nama:</h5><?= $data['name']; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" name="email" class=" form-control-label"><h5>Email:</h5><?= $data['email']; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="role" name="role" class=" form-control-label"><h5>Role:</h5></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="created_at" name="created_at" class=" form-control-label"><h5>Tanggal Dibuat:</h5><?= $data['created_at']; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label for="updated_at" name="updated_at" class=" form-control-label"><h5>Terakhir Diperbaruhi:</h5><?= $data['updated_at']; ?></label>
                                        </div>
                                    </div>
                                    <? form_close()  ?>

                                <!-- <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Apakah ingin hapus?')">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                </div> -->
                                </div>
                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>