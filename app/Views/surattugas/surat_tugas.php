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
                                        <th scope="col" rowspan="2">Kegiatan</th>
                                        <th scope="col" rowspan="2">Klasifikasi Surat</th>
                                        <th scope="col" rowspan="2">Tanggal Awal</th>
                                        <th scope="col" rowspan="2">Tanggal Akhir</th>
                                        <th scope="col" colspan="3">Tahapan</th>
                                        <th scope="col" rowspan="2" colspan="2">Aksi</th>
                                        </tr>
                                        <tr>
                                        <th>Pembuatan</th>
                                        <th>Approval</th>
                                        <th>Penandatanganan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($surat as $data) { ?>
                                        <tr>
                                        <td><?= $data->keterangan_klasifikasi_surat ?></td>
                                        <td><?= $data->klasifikasi_surat ?></td>
                                        <td><?= $data->tgl_awal ?></td>
                                        <td><?= $data->tgl_akhir ?></td>
                                        <td><?= $data->maker ?></td>
                                        <td><?= $data->approval ?></td>
                                        <td><?= $data->signer ?></td>
                                        <td class="text-center"><a href="<?= base_url()?>/user/hapus_data/<?= $data->idSurtu ?>" class="btn btn-sm btn-success mb-2"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url()?>/user/hapus_data/<?= $data->idSurtu ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <td class="text-center"><a href="<?= base_url()?>/user/hapus_data/<?= $data->idSurtu ?>" class="btn btn-sm btn-primary mb-2"><i class="fa fa-users"></i></a>
                                        <a href="<?= base_url()?>/user/hapus_data/<?= $data->idSurtu ?>" class="btn btn-sm btn-warning"><i class="fa fa-book"></i></a>
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