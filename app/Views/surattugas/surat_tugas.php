<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h3><i class="mr-2 fa fa-file"></i><strong class="card-title" v-if="headerText">Surat Tugas</strong></h3>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                <h4>Daftar Surat Tugas Pegawai</h4>
                                <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr class="text-center">
                                        <th scope="col">Judul</th>
                                        <th scope="col">Tanggal Awal</th>
                                        <th scope="col">Tanggal Akhir</th>
                                        <th scope="col">Kepada</th>
                                        <th scope="col">Untuk</th>
                                        <th scope="col">Status Surat</th>
                                        <th scope="col" colspan="2">Aksi</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($surat as $data) { ?>
                                        <tr>
                                        <td><?= $data->judul ?></td>
                                        <td><?= tgl_indo($data->tgl_awal) ?></td>
                                        <td><?= tgl_indo($data->tgl_akhir) ?></td>
                                        <td><?= htmlspecialchars_decode(htmlspecialchars_decode($data->kepada)) ?></td>
                                        <td><?= htmlspecialchars_decode(htmlspecialchars_decode($data->untuk)) ?></td>
                                        <td><?php if($data->n_status==1){
                                            echo('&#10004;&#65039;<br>Diterima');
                                        }elseif($data->n_status==2){
                                            echo('&#10060<br>Ditolak');
                                        }elseif($data->n_status==0){
                                            echo('&#10067;<br>Belum Ditetapkan');
                                        }
                                        ?></td>
                                        <?php if($data->n_status!=2){ ?>
                                        <td class="text-center"><a href="<?= base_url()?>/surattugas/edit_surat_tugas/<?= $data->idSurtu ?>" class="btn btn-sm btn-success mb-2"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" type="button" onclick="hapus_surat('<?= $data->idSurtu ?>')"><i class="fa fa-trash"></i></button>
                                        </td>
                                        <td class="text-center"><a href="<?= base_url()?>/surattugas/edit_team/<?= $data->idSurtu ?>" class="btn btn-sm btn-primary mb-2"><i class="fa fa-users"></i></a>
                                        <a href="<?= base_url()?>/surattugas/preview_edit/<?= $data->idSurtu ?>" class="btn btn-sm btn-warning"><i class="fa fa-book"></i></a>
                                        </td>
                                        <?php } ?>
                                        <?php if($data->n_status==2){ ?>
                                            <td class="text-center"><button class="btn btn-sm btn-success mb-2" disabled><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" onclick="hapus_surat('<?= $data->idSurtu ?>')"><i class="fa fa-trash"></i></button>
                                        </td>
                                        <td class="text-center"><button class="btn btn-sm btn-primary mb-2" disabled><i class="fa fa-users"></i></button><button class="btn btn-sm btn-warning mb-2" disabled><i class="fa fa-book"></i></button>
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