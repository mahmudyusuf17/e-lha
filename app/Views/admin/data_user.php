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
                                <div class="col-md-3 mt-4">
                                <div class="card">
                                    <div class="image img-fluid img-thumbnail text-center">
                                        <img src="<?= base_url() ?>/../assets/avatar/avatar.jpg" alt="Mahmud Yusuf" />
                                    </div>
                                        <h4 class="text-center mt-2 mb-2"><?= $data['name']; ?></h4>
                                </div>
                                    <div class="text-center">
                                    <a href="<?= base_url() ?>/user/edit_user/<?= $data['id']; ?>" class="btn btn-success btn-sm"><span class="fa fa-edit"></span> Edit Data User</a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body card-block">
                                    <div class="row">
                                        <div class="table-responsive m-b-40 mt-3">
                                        <table class="table table-bordered">
                                        <tbody>
                                        <tr><td class="text-hitam"><strong>NIP</strong></td>
                                        <td><?= $data['nip']; ?></td></tr>
                                        <tr><td class="text-hitam" width="100px"><strong>Nama</strong></td>
                                        <td><?= $data['name']; ?></td></tr>
                                        <tr><td class="text-hitam"><strong>Email</strong></td>
                                        <td><?= $data['email']; ?></td></tr>
                                        <tr><td class="text-hitam"><strong>Jabatan</strong></td>
                                        <td><?= $data['jabatan']; ?></td></tr>
                                        <tr><td class="text-hitam"><strong>Unit Kerja</strong></td>
                                        <td><?= $data['unit_kerja']; ?></td></tr>
                                        <tr><td class="text-hitam"><strong>Tanggal Pembuatan</strong></td>
                                        <td><?= $data['created_at']; ?></td></tr>
                                        </tbody>
                                        </table>
                                        </div>
                                    </div>

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