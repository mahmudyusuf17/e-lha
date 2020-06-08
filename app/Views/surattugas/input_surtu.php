<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
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
                                <h5><span id="judul2" style="display:none"><i class="fa fa-download mr-2"></i>Input Team</span></h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <form action="post" id="forminputsurtu">
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="select2" class="form-control-label mt-2 text-hitam">Select2*</label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="select2" name="select2" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="judul" class="form-control-label mt-2 text-hitam">Judul*</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="judul" name="judul" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="lokasi" class="form-control-label mt-2 text-hitam">Lokasi*</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="lokasi" name="lokasi" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam">Tanggal Awal*</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl-awal" max="2500-12-31" 
                                                    min="1900-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2 text-hitam">Tanggal Akhir*</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl-akhir" max="3000-12-31" 
                                                    min="1000-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="klasifikasi" class="form-control-label mt-2 text-hitam">Klasifikasi*</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="klasifikasi" name="klasifikasi" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="nopagu_anggaran" class=" form-control-label mt-2 text-hitam">No Pagu Anggaran*</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group mb-0">
                                                <div class="col col-md-3 text-right">
                                                    <label for="nopagu_anggaran" class=" form-control-label mt-3 text-hitam">Menimbang*</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">a</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">b</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                        <div class="text-right mt-3">
                                                            <button class="btn btn-danger btn-sm hapusform" onclick="hapusform()">-</button>
                                                            <button class="btn btn-success btn-sm tambahform" onclick="tambahform()">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="nopagu_anggaran" class=" form-control-label mt-3 text-hitam">Dasar*</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">a</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">b</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                        <div class="text-right mt-3">
                                                            <button class="btn btn-danger btn-sm hapusform" onclick="hapusform()">-</button>
                                                            <button class="btn btn-success btn-sm tambahform" onclick="tambahform()">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="nopagu_anggaran" class=" form-control-label mt-3 text-hitam">Untuk*</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">a</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">b</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                        <div class="text-right mt-3">
                                                            <button class="btn btn-danger btn-sm hapusform" onclick="hapusform()">-</button>
                                                            <button class="btn btn-success btn-sm tambahform" onclick="tambahform()">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group mt-5">
                                                <div class="col col-md-3 text-right">
                                                    <label for="nopagu_anggaran" class=" form-control-label mt-3 text-hitam">Detail Aturan*</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">a</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3 text-right">
                                                        <label for="nopagu_anggaran" class=" form-control-label text-hitam">b</label>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <input type="text" id="nopagu_anggaran" name="nopagu_anggaran" class="form-control" required>
                                                        <div class="text-right mt-3">
                                                            <button class="btn btn-danger btn-sm hapusform" onclick="hapusform()">-</button>
                                                            <button class="btn btn-success btn-sm tambahform" onclick="tambahform()">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </form>
                                <form method="post" id="forminputteam" style="display:none">
                                    <div class="row form-group">
                                        <div class="col col-md-3 text-right">
                                            <label for="maker" class="form-control-label mt-2 text-hitam">Maker*</label>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input type="text" id="maker" name="maker" class="form-control" required>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <div class="mt-5"><hr>
                                <button class="btn btn-primary ml-5" type="submit">Submit</button>
                                <div class="float-right">
                                <button class="btn btn-warning" type="button" style="display:none;">Finish</button>
                                <button onClick=next() class="btn btn-success" type="button">Next</button>
                                <button onClick=back() class="btn btn-danger" type="button">Previous</button>
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