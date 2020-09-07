<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">   
                                    <?php 
                                    $sukses = session()->getFlashdata('sukses');
                                    if (!empty($sukses)) {?>
                                    <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                        <h4><span class="badge badge-pill badge-primary"><strong>Berhasil</strong></span>
                                        Data User Telah Disimpan</h4> 
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
                                    <?php 
                                    $hapus = session()->getFlashdata('hapus');
                                    if (!empty($hapus)) {?>
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <h4><span class="badge badge-pill badge-danger"><strong>Berhasil</strong></span>
                                        <?= session()->getFlashdata('hapus') ?></h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
                                    
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-users"></i><strong class="card-title" v-if="headerText">Data Users</strong></h3>
                                        <!-- <button type="button" class="au-btn au-btn-icon au-btn--blue btn-sm overview-item--c5" data-toggle="modal" data-target="#scrollmodal" aria-labelledby="scrollmodalLabel">
                                        <i class="zmdi zmdi-plus"></i>Tambah User</button>  -->
									</div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
								<!-- DATA TABLE-->
                                <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-striped table-hover table-bordered table-primary table-sm text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
												<th>NIP</th>
												<th>Role</th>
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($users as $user => $value) :
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['name']; ?></td>
                                                <td><?= $value['email']; ?></td>
												<td><?= $value['nip']; ?></td>
                                                <td><?= $value['name_role']; ?></td>
                                                <td width="20px"><?= anchor('user/data_user/'. $value['user_id'], '<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button>') ?></td>
                                                <td width="20px"><?= anchor('user/edit_user/'. $value['user_id'], '<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>') ?></td>
                                                <td><button class="btn btn-sm btn-danger tombol-hapus" onclick="hapus('<?= $value['id']; ?>');"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <script>
                                    function hapus(id){
                                        Swal.fire({
                                            title: 'Hapus User?',
                                            text: "User Akan Dihapus!!!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Ya, Hapus!'
                                        }).then((result) => {
                                            if (result.value) {
                                            window.location.href = ("user/delete/")+ id;
                                            }else{
                                                return false;
                                            }
                                        });
                                    }
                                    </script>
                                </div>
                                <!-- END DATA TABLE-->
                                        </div>
                                        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- modal scroll tambah data
			<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content offset-md-1">
						<div class="modal-body">
						<div class="modal-header">
							<h3 class="modal-title" id="scrollmodalLabel"><i class="fas fa-user"></i>  Tambah User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <div class="col-lg-12">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('/user/tambah_user')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nama" class=" form-control-label mt-2">NAMA</label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="nama" name="name" placeholder="nama user" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email" class=" form-control-label mt-2">EMAIL</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="email" id="email" name="email" placeholder="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password" class=" form-control-label mt-2">PASSWORD</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="password" id="password" name="password" placeholder="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password2" class=" form-control-label">KONFIRMASI PASSWORD</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="password" id="password2" name="password2" placeholder="konfirmasi password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="role" class=" form-control-label mt-2">ROLE</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <select name="role" id="role" class="form-control">
                                                        <option value="0">pilih role</option>
                                                        <option value="1">Administrator</option>
                                                        <option value="2">Maker</option>
                                                        <option value="3">Approval</option>
                                                        <option value="4">Atasan</option>
                                                        <option value="6">Karyawan</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus-circle"></i> Tambah
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">
                                            <i class="fa fa-ban"></i> Batal
                                        </button>
                                    </div>
                                    </div>
                                        </form>
                                </div> -->
                    <!-- end of form -->