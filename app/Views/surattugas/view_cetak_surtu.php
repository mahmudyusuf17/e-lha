<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                            <div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <div class="text-left"><h3><i class="fa fa-check-square"> Approval Surat Tugas</i></h3></div>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                <div class="float-right mr-5"><a href="<?= base_url()?>/surattugas/pdf/<?= $surat->idSurtu?>" class="btn btn-success btn-sm" type="button"><i class="fa fa-print"> Print</i></a></div>
                                <h5>Surat Tugas</h5>
                                <hr>
                                <div class="h6">No. Surat: <?= $surat->no_surat?></div>
                                <div class="col-md-10 offset-md-1">
                                <div class="row form-group">
                                    <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-sm text-hitam">
                                    <tbody>
                                    <tr><td width="50%">Perihal</td>
                                    <td><?= $surat->judul?></td></tr>
                                    <tr><td>Tanggal Awal</td>
                                    <td><?= tgl_indo($surat->tgl_awal)?></td></tr>
                                    <tr><td>Tanggal Akhir</td>
                                    <td><?= tgl_indo($surat->tgl_akhir)?></td></tr>
                                    <tr><td>Kepada</td>
                                    <td><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->kepada)) ?></td></tr>
                                    <tr><td>Kegiatan</td>
                                    <td><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->untuk)) ?></td></tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    
                                </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h5>Peserta</h5><hr>
                                        </div>
                                    </div>
                                    <div class="col-md-10 offset-md-1">
                                    <div class="row form-group">
                                    <div class="table-responsive m-b-40 mt-3 text-hitam">
                                    <table id="dataTable" class="table table-bordered table-striped table-sm display">
                                    <thead>
                                        <tr>
                                            <th width="20px">No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($team as $data) { ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $data->nama?></td>
                                                <td><?= $data->nip?></td>
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
                        </div>
                    </div>
                </div>
</div>