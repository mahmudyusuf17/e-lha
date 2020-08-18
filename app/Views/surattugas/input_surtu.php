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
                                        Surat Tugas Telah Disimpan</h4> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                    <?php } ?>
								<div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <ul class="progressbar">
                                                <li class="active">Input Data Surat Tugas</li>
                                                <li id="step1">Input Team</li>
                                                <li id="step2">Preview</li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-5">
                                <h5><span id="judul1"><i class="fa fa-download mr-2"></i>Form Input Surat Tugas</h5>
                                <h5><span id="judul2" style="display:none;"><i class="fa fa-download mr-2"></i>Input Team</span></h5>
                                <h5><span id="judul3" style="display:none;"><i class="fa fa-eye mr-2"></i>Preview</span></h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <form method="post" id="forminputsurtu" enctype="multipart/form-data" action="<?php echo base_url('surattugas/input')?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="judul" class="form-control-label mt-2 text-hitam">Judul*</label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="judul" name="judul" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam">Tanggal Awal*</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_awal" max="2500-12-31" 
                                                    min="1900-01-01" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam">Tanggal Akhir*</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl_akhir" max="3000-12-31" 
                                                    min="1000-01-01" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="nopagu_anggaran" class=" form-control-label mt-3 text-hitam">Dasar*</label>
                                                </div>
                                                    <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="dasar" id="ckeditor" cols="30" rows="5" required></textarea>
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="kepada" class="form-control-label mt-2 text-hitam">Kepada*</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="kepada" name="kepada" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="untuk" class=" form-control-label mt-3 text-hitam">Untuk*</label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="untuk" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="status" class=" form-control-label mt-2 text-hitam">Status Surat*</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <select name="status_surat" id="SelectLm" class="form-control">
                                                            <option></option>
                                                            <option value="0">Belum disahkan</option>
                                                            <option value="1">Ditetapkan</option>
                                                            <option value="2">Ditolak</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tembusan" class=" form-control-label mt-3 text-hitam">Tembusan*</label>
                                                </div>
                                                <div class="col col-md-9 text-right">
                                                        <textarea class="ckeditor" name="tembusan" id="ckeditor" required></textarea>
                                                </div>
                                            </div>
                                            <div class="mt-5" id="buttonpage1"><hr>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                <div class="float-right">
                                                <button class="btn btn-warning" type="button" disabled>Finish</button>
                                                <button onClick=next() class="btn btn-success" type="button">Next</button>
                                                <button onClick=back() class="btn btn-danger" type="button" disabled>Previous</button>
                                                </div>
                                            </div>
                                </form>
                                <form action="<?php echo base_url('surattugas/input_team')?>" method="post" id="forminputteam" style="display:none">
                                <div class="row form-group">
                                    <div class="table-responsive m-b-40 mt-3">
                                    <table class="table table-bordered table-sm">
                                    <tbody>
                                    <tr>
                                    <td>Judul</td>
                                    <td>Surat Dinas</td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal Awal</td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td>Tanggal Akhir</td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td>Kepada</td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td>Status Surat</td>
                                    <td></td>
                                    </tr>
                                    <tr>
                                    <td>Tembusan</td>
                                    <td></td>
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
                                        <th scope="col" width="50px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>1</td>
                                    <td><input type="text" id="nip" name="nip" class="form-control form-control-sm" required></td>
                                    <td><input type="text" id="nama" name="nama" class="form-control form-control-sm" required></td>
                                    <td><input type="text" id="unit" name="unit" class="form-control form-control-sm" required></td>
                                    <td><input type="text" id="jabatan" name="jabatan" class="form-control form-control-sm" required></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success btn-sm">+</button></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    <div class="mt-5" id="buttonpage2" style="display:none"><hr>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <div class="float-right">
                                        <button class="btn btn-warning" type="button" disabled>Finish</button>
                                        <button onClick=next() class="btn btn-success" type="button">Next</button>
                                        <button onClick=back() class="btn btn-danger" type="button">Previous</button>
                                        </div>
                                    </div>
                                </form>
                                <form method="post" id="formpreview" style="display:none">
                                <h5>Preview Surat Tugas</h5><hr>
                                    <p>(isi PDF disini)</p>
                                <div class="mt-5" id="buttonpage3" style="display:none"><hr>
                                <div class="float-right">
                                <button class="btn btn-warning" type="button">Finish</button>
                                <button onClick=next() class="btn btn-success" type="button" disabled>Next</button>
                                <button onClick=back() class="btn btn-danger" type="button">Previous</button>
                                </div></div>
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