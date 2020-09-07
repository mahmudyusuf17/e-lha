<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
                                <?php 
                                    $sukses = session()->getFlashdata('sukses');
                                    if (!empty($sukses)) {?>
                                    <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                        <h4><span class="badge badge-pill badge-primary"><strong>Berhasil</strong></span>
                                        Data User Telah Diperbarui</h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
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
                                <form action="<?= base_url()?>/user/update_user/<?= $data['id']; ?>" method="post">
                                    <!-- <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div> -->
                                </div>
                                <?= csrf_field() ?>
                                <div class="col-md-9">
                                    <div class="card-body card-block">
                                    <div class="row">
                                        <div class="table-responsive m-b-40">
                                        <table class="table table-bordered">
                                        <tbody>
                                        <tr><td class="text-hitam"><strong>NIP</strong></td>
                                        <td><input type="text" class="form-control form-control-sm" name="nip" value="<?= $data['nip']; ?>"></td></tr>
                                        <tr><td class="text-hitam" width="100px"><strong>Nama</strong></td>
                                        <td><input type="text" class="form-control form-control-sm" name="name" value="<?= $data['name']; ?>"></td></tr>
                                        <tr><td class="text-hitam"><strong>Email</strong></td>
                                        <td><input type="text" class="form-control form-control-sm" name="email" value="<?= $data['email']; ?>"></td></tr>
                                        <tr><td class="text-hitam"><strong>Jabatan</strong></td>
                                        <td><input type="text" class="form-control form-control-sm" name="jabatan" value="<?= $data['jabatan']; ?>"></td></tr>
                                        <tr><td class="text-hitam"><strong>Unit Kerja</strong></td>
                                        <td><input type="text" class="form-control form-control-sm" name="unit_kerja" value="<?= $data['unit_kerja']; ?>"></td></tr>
                                        <tr><td class="text-hitam"><strong>Tanggal Pembuatan</strong></td>
                                        <td><input type="text" class="form-control form-control-sm" name="created_at" value="<?= $data['created_at']; ?>" disabled></td></tr>
                                        </tbody>
                                        </table>
                                        </div>
                                    </div>

                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-save"></i> Simpan
                                        </button>
                                        <a href="<?= base_url('user') ?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
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