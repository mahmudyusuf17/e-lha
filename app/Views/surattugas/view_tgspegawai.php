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
                                        <td><?php if($data->no_surat == NULL){
                                            echo('Belum ada nomor surat');
                                        }else{
                                            echo($data->no_surat);
                                        }
                                        ?></td>
                                        <td><?php if($data->n_status==1){
                                        echo('&#10004;&#65039; Diterima');
                                        } elseif ($data->n_status==2) {
                                            echo('&#10060 Ditolak');
                                        }
                                        elseif ($data->n_status==0){
                                        echo('&#10067; Belum Ditetapkan');
                                        }
                                        ?></td>
                                        <?php if ($data->n_status == 1) { ?>
                                        <td class="text-center"><a href="<?= base_url()?>/surattugas/view_cetak_surtu/<?= $data->idSurtu ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
                                        </td>
                                        <?php } ?>
                                        <?php if ($data->n_status != 1) { ?>
                                        <td class="text-center"><button class="btn btn-sm btn-primary" disabled><i class="fa fa-eye"></i> View</button>
                                        </td>
                                        <?php } ?>
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