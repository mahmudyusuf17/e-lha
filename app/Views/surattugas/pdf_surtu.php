<html><head>
<!-- Bootstrap CSS-->
<link href="<?php echo base_url() ?>/temp-admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<link href="<?php echo base_url() ?>/temp-admin/css/theme.css" rel="stylesheet" media="all">
<style>
.page-break{
    page-break-before: always;
}

.borderless td, .borderless th {
    border: none;
}
</style>
    <title><?= $surat->judul?></title>
</head><body>
                                    <div class="col-md-12">
                                        <div class="image img-fluid img-header mt-5" style="text-align:center;">
                                        <img src="<?= site_url('/../assets/pdf_surtu/header.png')?>" alt="logo" width="80%">
                                        </div>
                                        <div class="col-md-10 ml-5">
                                            <hr style="border-bottom: 2px black solid;"></div>
                                            <div class="text-center h6"><u>SURAT - TUGAS</u></div>
                                            <div class="text-center">Nomor : <?= $surat->no_surat ?></div>
                                        <div class="col-md-12 my-2">
                                            <table class="table borderless">
                                                <tr>
                                                    <td width="100px"><div class="text-right mr-2">Dasar :</div></td>
                                                    <td><div class="col-md-12 mr-3" style="text-align: justify;"><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->dasar)) ?></div></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="text-center h6">MENUGASKAN</div>
                                        <div class="col-md-12 my-2">
                                            <table class="table borderless">
                                                <tr>
                                                    <td width="100px"><div class="text-right mr-2">Kepada :</div></td>
                                                    <td><div class="col-md-12 mr-3" style="text-align: justify;"><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->kepada)) ?></div></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-12 my-2">
                                            <table class="table borderless">
                                                <tr>
                                                    <td width="100px"><div class="text-right mr-2">Untuk :</div></td>
                                                    <td><div class="col-md-12 mr-3" style="text-align: justify;"><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->untuk)) ?></div></td>
                                                </tr>
                                            </table>                                           
                                        </div>
                                        <div class="col-md-3 ml-auto">
                                            <div class="text-left">Ditetapkan di Jakarta<br>
                                            Pada tanggal 31 Juli 2020</div>
                                            <div class="text-left mt-2">Inspektur,</div>
                                        <div class="image img-fluid img-logo" >
                                            <img src="<?= base_url()?>/../assets/pdf_surtu/ttd.png" alt="ttd">
                                        </div>
                                        <div class="text-left"><u>A. Darmuji, S.Sos, M.Si</u><br>
                                            NIP: 195612151982031002</div>
                                        </div>
                                        </div>
                                        <div class="col-md-10 my-2">
                                                <div class="col-md-7 ml-5">
                                                    <div class="text-left mb-2">Tembusan, kepada Yth:</div>
                                                    <div class="text-left"><?= htmlspecialchars_decode(htmlspecialchars_decode($surat->tembusan)) ?></div>
                                                </div>
                                        </div>
                                        <!-- <div class="page-break"> -->
                                        <div class="col-md-12 mt-5">
                                        <div class="col-md-3 ml-auto mt-3">
                                            <div class="text-left">Lampiran <?= $surat->judul?></div>
                                            <div class="text-left">Nomor   : <?= $surat->no_surat ?></div>
                                            <div class="text-left">Tanggal : 31 Juli 2020</div>
                                        </div>
                                        <div class="text-center h7 mt-4"><strong>SUSUNAN TIM EVALUASI LAKIP TAHUN ANGGARAN 2019</strong></div>
                                        <div class="text-center h7 mt-2"><strong>PADA UNIT KERJA DI LINGKUNGAN BKN</strong></div>
                                        </div>
                                        <div class="col-md-10 ml-5 mt-4">
                                    <table class="table table-bordered table-sm" style="border-width: 3px">
                                    <thead>
                                        <tr class="text-center">
                                        <th scope="col" width="20px">No</th>
                                        <th scope="col">NAMA / NIP</th>
                                        <!-- <th scope="col" width="20px">GOL RUANG</th> -->
                                        <th scope="col">JABATAN</th>
                                        <th scope="col">JABATAN DALAM TIM</th>
                                        <!-- <th scope="col">OBYEK EVALUASI</th> -->
                                        <th scope="col">TANGGAL</th>
                                        <th scope="col">JANGKA WAKTU</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no=1;
                                    foreach($team as $data) { ?>
                                    <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $data->nama?><br><?= $data->nip?></td>
                                    <!-- <td></td> -->
                                    <td><?= $data->jabatan?></td>
                                    <td><?= $data->unit_kerja?></td>
                                    <!-- <td></td> -->
                                    <td><?= tgl_bulan($surat->tgl_awal) . ' -' .tgl_indo($surat->tgl_akhir) ?></td>
                                    <td><?php 	
                                    $tgl1 = new DateTime($surat->tgl_awal); 	
                                    $tgl2 = new DateTime($surat->tgl_akhir); 	
                                    $d = $tgl2->diff($tgl1)->days + 1; 	echo $d." hari"; 
                                    ?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    <div class="col-md-3 ml-auto mt-4">
                                            <div class="text-left">Ditetapkan di Jakarta<br>
                                            Pada tanggal 31 Juli 2020</div>
                                            <div class="text-left mt-2">Inspektur,</div>
                                        <div class="image img-fluid img-logo" >
                                            <img src="<?= base_url()?>/../assets/pdf_surtu/ttd.png" alt="ttd">
                                        </div>
                                        <div class="text-left"><u>A. Darmuji, S.Sos, M.Si</u><br>
                                            NIP: 195612151982031002</div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
    <script src="<?= base_url() ?>/temp-admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
</body></html>