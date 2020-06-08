<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-user"></i><strong class="card-title" v-if="headerText">Ubah Data User</strong></h3>
									</div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-3 mt-3">
                                <div class="card">
                                    <div class="image img-fluid img-thumbnail text-center">
                                        <img src="<?= base_url() ?>/../assets/avatar/avatar.jpg" alt="Mahmud Yusuf" />
                                    </div>
                                </div>
                                    <?= form_open('user/save') ?>
                                    <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="name" name="name" class=" form-control-label"><h5>Nama:</h5></label>
                                            <input type="text" name="name" class="form-control col-md-5" value="<?= $data['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" name="email" class=" form-control-label"><h5>Email:</h5></label>
                                            <input type="text" name="name" class="form-control col-md-6" value="<?= $data['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="role" name="role" class=" form-control-label"><h5>Role:</h5></label>
                                            <input type="text" name="name" class="form-control col-md-4" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="created_at" name="created_at" class=" form-control-label"><h5>Tanggal Dibuat:</h5></label>
                                            <input type="text" name="name" class="form-control col-md-5" value="<?= $data['created_at']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="updated_at" name="updated_at" class=" form-control-label"><h5>Terakhir Diperbaruhi:</h5></label>
                                            <input type="text" name="name" class="form-control col-md-5" value="<?= $data['updated_at']; ?>">
                                        </div>
                                    </div>
                                    <? form_close()  ?>

                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-save"></i> Simpan
                                        </button>
                                        <a href="<?= base_url('user') ?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Batal</a>
                                </div>
                                </div>
                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>