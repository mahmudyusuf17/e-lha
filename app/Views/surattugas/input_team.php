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
                                        Data Team Telah Ditambahkan</h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
								<div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <ul class="progressbar">
                                                <li class="active"><a href="<?= base_url()?>/surattugas/input_surattugas/<?= $surat->idSurtu?>"><span class="text-hitam">Input Data Surat Tugas</span></a></li>
                                                <li class="active">Input Team</li>
                                                <li><a href="<?= base_url()?>/surattugas/preview/<?= $surat->idSurtu?>"><span class="text-hitam">Preview</span></a></li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-5">
                                <h5><i class="fa fa-users mr-2"></i>Input Team</h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <div class="row form-group">
                                    <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm">
                                    <tbody>
                                    <tr><td>Judul</td>
                                    <td><?= $surat->judul?></td></tr>
                                    <tr><td>Tanggal Awal</td>
                                    <td><?= tgl_indo($surat->tgl_awal)?></td></tr>
                                    <tr><td>Tanggal Akhir</td>
                                    <td><?= tgl_indo($surat->tgl_akhir)?></td></tr>
                                    <tr><td>Kepada</td>
                                    <td><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->kepada)) ?></td></tr>
                                    <tr><td>Status Surat</td>
                                    <td><?php if($surat->n_status==0){
                                        echo('Belum Ditetapkan');
                                        }elseif ($surat->n_status==1) {
                                        echo('Ditetapkan');
                                        }else{
                                        echo('Ditolak');
                                        }
                                        ?>
                                    </td></tr>
                                    <tr><td>Tembusan</td>
                                    <td><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->tembusan)) ?></td></tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                        <h4>Tabel Team</h4><hr></div>
                                    <div class="col-md-4">
                                    <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambah_team" aria-labelledby="scrollmodalLabel">Tambah Peserta</button></td></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="table-responsive m-b-40 mt-3">
                                    <table id="dataTable" class="table table-bordered table-striped table-sm display">
                                    <thead>
                                        <tr>
                                            <th width="20px">No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Unit</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $no=1;
                                        foreach($team as $data) { ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $data->nip?></td>
                                                <td><?= $data->nama?></td>
                                                <td><?= $data->unit_kerja?></td>
                                                <td><?= $data->jabatan?></td>
                                                <td><a href="<?= base_url()?>/surattugas/edit_member/<?= $data->id ?>" class="btn btn-sm btn-success my-2"><i class="fa fa-edit"></i></a><button class="btn btn-sm btn-danger" type="button" onclick="hapus_team('<?= $data->id ?>')"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <div class="mt-5" id="buttonpage2"><hr>
                                        <button id="button_update" class="btn btn-primary" type="submit" style="display:none;">Update</button>
                                        <div class="float-right">
                                        <button class="btn btn-warning" type="button" disabled>Finish</button>
                                        <a href="<?= base_url()?>/surattugas/preview/<?= $surat->idSurtu?>" class="btn btn-success" type="button">Next</a>
                                        <a href="<?= base_url()?>/surattugas/input_surattugas/<?= $surat->idSurtu?>" class="btn btn-danger" type="button">Previous</a>
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
<!-- modal scroll tambah data team-->
<div class="modal fade" id="tambah_team" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content offset-md-1 border-primary">
						<div class="modal-body">
						<div class="modal-header">
							<h3 class="modal-title" id="scrollmodalLabel"><i class="fas fa-users"></i>  Tambah Data Peserta</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <div class="col-lg-12">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('surattugas/tambah_team/')?>/<?= $surat->idSurtu?>" method="post" class="form-horizontal">
                                        <div class="col-12">
                                        <?= csrf_field() ?>
                                                <input type="text" name="nip" class="form-control form-control-sm" value="<?= session()->get('nip') ?>" hidden>
                                                    <label for="nama" class="form-control-label mt-2 text-hitam"><strong>NAMA<span class="text-danger">*</span></strong></label>
                                                    <select name="nama" id="SelectLm" class="form-control">
                                                            <option value="0"></option>
                                                            <option value="<?= session()->get('nama') ?>"><?= session()->get('nama') ?></option>
                                                    </select>
                                                    <input type="text" name="unit_kerja" class="form-control form-control-sm" value="<?= session()->get('unit_kerja') ?>" hidden>
                                                    <input type="text" name="jabatan" class="form-control form-control-sm" value="<?= session()->get('jabatan') ?>" hidden>
                                                    <input type="text" name="tgl_awal" class="form-control form-control-sm" value="<?= $surat->tgl_awal ?>" hidden>
                                                    <input type="text" name="tgl_akhir" class="form-control form-control-sm" value="<?= $surat->tgl_akhir ?>" hidden>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- end of form -->