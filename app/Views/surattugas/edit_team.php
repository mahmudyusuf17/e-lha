<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
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
                                    $sukses = session()->getFlashdata('sukses');
                                    if (!empty($sukses)) {?>
                                    <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                        <h4><span class="badge badge-pill badge-primary"><strong>Berhasil</strong></span>
                                        Surat Tugas Telah Di Update</h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
								<div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <ul class="progressbar">
                                                <li class="active">Edit Data Surat Tugas</li>
                                                <li class="active">Edit Team</li>
                                                <li>Preview</li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-5">
                                <h5><span id="judul2"><i class="fa fa-download mr-2"></i>Edit Team</span></h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <form action="<?php echo base_url('surattugas/edit_datateam')?>/<?= $surat->idSurtu?>" method="post" id="forminputteam">
                                <div class="row form-group">
                                    <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm">
                                    <tbody>
                                    <tr>
                                    <td>Judul</td>
                                    <td><?= $surat->judul?></td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal Awal</td>
                                    <td><?= $surat->tgl_awal?></td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal Akhir</td>
                                    <td><?= $surat->tgl_akhir?></td>
                                    </tr>
                                    <tr>
                                    <td>Kepada</td>
                                    <td><?= $surat->kepada?></td>
                                    </tr>
                                    <tr>
                                    <td>Status Surat</td>
                                    <td><?php if($surat->n_status==0){
                                        echo('Belum Ditetapkan');
                                        }elseif ($surat->n_status==1) {
                                        echo('Ditetapkan');
                                        }else{
                                        echo('Ditolak');
                                        }
                                        ?>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>Tembusan</td>
                                    <td><?= $surat->tembusan?></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                <h5>Tabel Input Team</h5>
                                    <div class="row form-group">
                                    <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm" id="dynamic_field">
                                    <thead>
                                        <tr>
                                        <th scope="col" width="20px">No</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col" width="50px">Aksi</td></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no=1;
                                    foreach($team as $data) { ?>
                                    <tr>
                                    <td><?= $no++ ?></td>
                                    <td><input type="text" id="nip" name="nip" class="form-control form-control-sm" value="<?= $data->nip?>" ></td>
                                    <td><input type="text" id="nama" name="nama" class="form-control form-control-sm" value="<?= $data->nama?>" ></td>
                                    <td><input type="text" id="unit" name="unit" class="form-control form-control-sm" value="<?= $data->unit_kerja?>" ></td>
                                    <td><input type="text" id="jabatan" name="jabatan" class="form-control form-control-sm" value="<?= $data->jabatan?>" ></td>
                                    <td><button class="btn btn-sm btn-danger" type="button" onclick="hapus_team('<?= $data->id ?>')">x</i></button></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><input type="text" id="nip" name="nip" class="form-control form-control-sm" ></td>
                                    <td><input type="text" id="nama" name="nama" class="form-control form-control-sm" ></td>
                                    <td><input type="text" id="unit" name="unit" class="form-control form-control-sm" ></td>
                                    <td><input type="text" id="jabatan" name="jabatan" class="form-control form-control-sm" ></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success btn-sm">+</button></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <div class="mt-5" id="buttonpage2"><hr>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                        <div class="float-right">
                                        <button class="btn btn-warning" type="button" disabled>Finish</button>
                                        <a href="<?= base_url()?>/surattugas/preview_edit/<?= $surat->idSurtu?>" class="btn btn-success" type="button">Next</a>
                                        <a href="<?= base_url()?>/surattugas/edit_surat_tugas/<?= $surat->idSurtu?>" class="btn btn-danger" type="button">Previous</a>
                                        </div>
                                    </div>
                                </form>
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