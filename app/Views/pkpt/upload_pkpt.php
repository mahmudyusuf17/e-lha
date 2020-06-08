<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header overview-wrap">
										<h4><i class="mr-2 fas fa-upload"></i><strong class="card-title" v-if="headerText">Upload PKPT Final</strong></h4>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                <div class="col-md-10 offset-md-1">
                                <form action="post">
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="nama_doc" class="form-control-label mt-2">Nama Dokumen*</label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <input type="text" id="nama_doc" name="nama_doc" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-doc" class="form-control-label mt-2">Tanggal Dokumen*</label>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <input type="date" name="tgl-doc" max="2500-12-31" 
                                                    min="1900-01-01" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3 text-right">
                                                    <label for="tgl-awal" class="form-control-label mt-2">File (*.xls, *.xlsx)*</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
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