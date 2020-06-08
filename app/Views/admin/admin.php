<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fas fa-users"></i><strong class="card-title" v-if="headerText">Data User</strong></h3>
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
                                                <th>Created</th>
                                                <th>Last Update</th>
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($admin as $value) { ?>
                                            <form action="admin/delete/<?= $value->id ?>" method="post">
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value->name ?></td>
                                                <td><?= $value->email ?></td>
                                                <td><?= $value->created_at ?></td>
                                                <td><?= $value->updated_at ?></td>
                                                <td width="20px"><?= anchor('user/data_user/'. $value->id, '<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></button>') ?></td>
                                                <td width="20px"><?= anchor('user/edit_user/'. $value->id, '<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>') ?></td>
                                                <!-- <td><button type="submit" class="btn btn-sm btn-danger" onclick="hapusdata();"><i class="fa fa-trash"></i></button></td> -->
                                                <td><button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah ingin Hapus?');"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                            </form>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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