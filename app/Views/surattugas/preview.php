<div class="main-content">
				<div class="section__content section__content--p28">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
                                    <div class="col-md-12 text-center mt-5 mb-5">
                                        <div class="container">
                                            <ul class="progressbar">
                                                <li class="active"><a href="<?= base_url()?>/surattugas/input_team/<?= $surat->idSurtu?>"><span class="text-hitam">Input Data Surat Tugas</span></a></li>
                                                <li class="active"><a href="<?= base_url()?>/surattugas/input_team/<?= $surat->idSurtu?>"><span class="text-hitam">Input Team</span></a></li>
                                                <li class="active">Preview</li>
                                            </ul>
                                        </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-12 mt-5">
                                <h5><i class="fa fa-book mr-2"></i>Preview</h5>
                                <hr>
                                <div class="col-md-10 offset-md-1">
                                <a href="<?= base_url()?>/surattugas/pdf/<?= $surat->idSurtu?>" class="btn btn-success btn-sm float-right" type="button"><i class="fa fa-print"> Print</i></a>
                                <!-- <a href="<?= base_url()?>/surattugas/download_pdf/<?= $surat->idSurtu?>" class="btn btn-primary btn-sm float-right mr-2" type="button"><i class="fa fa-download"> Export</i></a> -->
                                <form method="post" id="formpreview">
                                <h5>Preview Surat Tugas</h5><hr>
                                <div class="col-md-12">
                                    <iframe src="<?= base_url()?>/surattugas/pdf/<?=$surat->idSurtu?>" type="app/pdf" frameborder="2" width="100%" height="600px"></iframe>
                                </div>
                                <div class="mt-5" id="buttonpage3"><hr>
                                <div class="float-right">
                                <a href="<?= base_url()?>/surattugas" class="btn btn-warning" type="button">Finish</a>
                                <button class="btn btn-success" type="button" disabled>Next</button>
                                <a href="<?= base_url()?>/surattugas/input_team/<?= $surat->idSurtu?>" class="btn btn-danger" type="button">Previous</a>
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
