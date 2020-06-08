<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fa fa-desktop"></i><strong class="card-title" v-if="headerText">Surat Tugas</strong></h3>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                <h4>Daftar Surat Tugas</h4>
                                <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No Surat</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" width="85px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no=1;
                                        foreach($view as $data) { ?>
                                        <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data->no_surat ?></td>
                                        <td><?= $data->n_status ?></td>
                                        <td class="text-center"><a href="<?= base_url()?>/view_tgspegawai/<?= $data->idSurtu ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
                                        </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                    </table>
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