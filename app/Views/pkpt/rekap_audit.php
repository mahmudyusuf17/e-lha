<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h4><i class="mr-2 fas fa-folder"></i><strong class="card-title" v-if="headerText">Rekap Kegiatan Audit Tahun 2020</strong></h4>
                                        <!-- <button class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i> Perbesar</button> -->
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm text-sm">
                                    <thead>
                                        <tr class="text-center">
                                        <th scope="col" colspan="2">Nama Audit Instansi Kegiatan Program DLL</th>
                                        <th scope="col" colspan="4">Tenaga Auditor</th>
                                        <th scope="col" colspan="3">Tenaga Tata Usaha</th>
                                        <th scope="col" colspan="3">Sarana dan Prasarana Unit</th>
                                        <th scope="col" colspan="2">Data Unit</th>
                                        <th scope="col" rowspan="2">Lain-lain</th>
                                        <th scope="col" rowspan="2">Tgl Awal</th>
                                        <th scope="col" rowspan="2">Tgl Akhir</th>
                                        <th scope="col" rowspan="2">Status</th>
                                        </tr>
                                        <tr>
                                        <th>Nama Audit Instansi Kegiatan Program DLL</th>
                                        <th>Besaran Resiko Audit</th>
                                        <th>Auditor Pengendali Mutu</th>
                                        <th>Auditor Pengendali Teknis</th>
                                        <th>Auditor Ketua Tim</th>
                                        <th>Auditor Anggota Tim</th>
                                        <th>Gol. IV</th>
                                        <th>Gol. III</th>
                                        <th>Gol. II</th>
                                        <th>Komunikasi</th>
                                        <th>Kendaraan</th>
                                        <th>Lainnya</th>
                                        <th>SPPD</th>                                        <th>Lainnya</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($audit as $data) { ?>
                                        <tr>
                                        <td><?= $data->nama_kegiatan ?></td>
                                        <td><?= $data->Besaran_audit_resiko ?></td>
                                        <td><?= $data->auditor_pengendali_mutu ?></td>
                                        <td><?= $data->auditor_pengendali_teknis ?></td>
                                        <td><?= $data->auditor_ketua_tim ?></td>
                                        <td><?= $data->auditor_anggota_tim ?></td>
                                        <td><?= $data->tu_gol4 ?></td>
                                        <td><?= $data->tu_gol3 ?></td>
                                        <td><?= $data->tu_gol2 ?></td>
                                        <td><?php if($data->status_sarana_komunikasi==1){
                                        echo('&#10004;&#65039;');
                                        } else{
                                        echo('&#10060');
                                        }
                                        ?></td>
                                        <td>
                                        <?php if($data->status_sarana_kendaraan==1){
                                        echo('&#10004;&#65039;');
                                        } else{
                                        echo('&#10060');
                                        }
                                        ?></td>
                                        <td>
                                        <?php if($data->status_sarana_lainnya==1){
                                        echo('&#10004;&#65039;');
                                        } else{
                                        echo('&#10060');
                                        }
                                        ?></td>
                                        <td>
                                        <?php if($data->status_dana_sppd==1){
                                        echo('&#10004;&#65039;');
                                        } else{
                                        echo('&#10060');
                                        }
                                        ?></td>
                                        <td><?php if($data->status_dana_lainnya ==1){
                                        echo('&#10004;&#65039;');
                                        } else{
                                        echo('&#10060');
                                        }
                                        ?></td>
                                        <td><?= $data->keterangan ?></td>
                                        <td><?= $data->tgl_awal ?></td>
                                        <td><?= $data->tgl_akhir ?></td>
                                        <td></td>
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