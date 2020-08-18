<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fa fa-rotate-right"></i><strong class="card-title" v-if="headerText">Program Kerja Audit</strong></h3>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                <h4>Program Kerja Audit</h4>
                                <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                        <th scope="col">Unit Organisasi</th>
                                        <th scope="col">Kegiatan</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Tujuan Audit</th>
                                        <th scope="col">Prosedur/Metode Pemilihan Sample dan Waktu</th>
                                        <th scope="col">Nama Auditor</th>
                                        <th scope="col">Anggaran Waktu</th>
                                        <th scope="col">Realisasi Waktu</th>
                                        <th scope="col">No KKA</th>
                                        <th scope="col">Temuan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" width="85px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($review as $data) { ?>
                                        <tr>
                                        <td><?= $data->unit_organisasi ?></td>
                                        <td><?= $data->nama_kegiatan ?></td>
                                        <td><?= $data->tahun_pelaksanaan ?></td>
                                        <td><?= $data->tujuan_audit ?></td>
                                        <td><?= $data->Besaran_audit_resiko ?></td>
                                        <td><?= $data->auditor_ketua_tim ?></td>
                                        <td><?= $data->perkiraan_waktu_audit ?></td>
                                        <td><?= $data->realisasi_waktu_audit ?></td>
                                        <td><?= $data->no_kka ?></td>
                                        <td class="text-center"><a href="<?= base_url()?>/view_tgspegawai/<?= $data->id ?>" class="btn btn-sm btn-warning"><i class="fa fa-book"></i></a>
                                        </td>
                                        <td><?php if($data->status_lhr==2){
                                        echo('Selesai');
                                        } elseif ($data->status_lhr==1) {
                                            echo('Progress');
                                        }
                                        else{
                                        echo('');
                                        }
                                        ?></>
                                        <td><?php if($data->status_lhr ==1){
                                        echo('<a href="<?= base_url()?>/view_tgspegawai/<?= $data->id ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a><a href="<?= base_url()?>/view_tgspegawai/<?= $data->id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>');
                                        } elseif ($data->status_lhr ==2) {
                                            echo('<a href="<?= base_url()?>/view_tgspegawai/<?= $data->id ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>');
                                        }
                                        else{
                                        echo('<a href="<?= base_url()?>/view_tgspegawai/<?= $data->id ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>');
                                        }
                                        ?></td>
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