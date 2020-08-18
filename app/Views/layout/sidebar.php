<body class="animsition">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo img-fluid img-logo" href="<?php echo base_url() ?>">
                            <img class="image" src="<?php echo base_url()?>/../assets/image/logo-BKN.png" alt="E-LHA" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo base_url('administrator/dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <!-- <hr class="sidebar-divider">
                        <div class="text-muted ml-2">PKPT</div>
                        <li>
                            <a href="<?php echo base_url('rekapaudit')?>">
                                <i class="fas fa-folder"></i>Rekap Audit</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekapaudit/peta_audit')?>">
                                <i class="far fa-map"></i>Peta Audit</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekapaudit/upload_pkpt')?>">
                                <i class="fas fa-upload"></i>Upload PKPT Final</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekapaudit/pkpt_final')?>">
                                <i class="far fa-check-square"></i>PKPT Final</a>
                        </li>
                        <li> -->
                        <hr class="sidebar-divider">
                        <div class="text-muted ml-2">Surat Tugas</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url('surattugas') ?>">
                                <i class="fa fa-file"></i>Surat Tugas</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('surattugas/input_surat_tugas')?>">
                                <i class="fa fa-download"></i>Input Surat Tugas</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('surattugas/view_tgspegawai')?>">
                                <i class="fas fa-desktop"></i>View Tugas Pegawai</a>
                        </li>
                        <!-- <hr class="sidebar-divider">
                        <div class="text-muted ml-2">Laporan Hasil Audit (LHA)</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url('lha') ?>">
                                <i class="fa fa-file-text"></i>Program Kerja Audit</a>
                        </li>
                        <hr class="sidebar-divider">
                        <div class="text-muted ml-2">Laporan Hasil Evaluasi (LHE)</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url('lhe') ?>">
                                <i class="fa fa-copy"></i>Evaluasi Audit</a>
                        </li>
                        <hr class="sidebar-divider">
                        <div class="text-muted ml-2">Laporan Hasil Review (LHR)</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url('lhr') ?>">
                                <i class="fa fa-rotate-right"></i>Review Audit</a>
                        </li> -->
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cog"></i>Pengaturan
                                <span class="arrow ml-5">
                                    <i class="fas fa-angle-down ml-2"></i>
                                </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="register.html"><i class="zmdi zmdi-account"></i>Account</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html"><i class="fa fa-user-circle"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('auth/logout') ?>">
                                <i class="fa fa-sign-out-alt"></i>Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <div id="wrapper" class="toggled">
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php echo base_url('dashboard') ?>">
                    <img src="<?php echo base_url() ?>/../assets/image/logo-bkn.png" alt="E-LHA" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo base_url() ?>">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <!-- <h5><hr class="sidebar-divider"><div class="text-muted">PKPT</div></h5>
                        <li>
                            <a href="<?php echo base_url('rekapaudit')?>">
                                <i class="fas fa-folder"></i>Rekap Audit</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekapaudit/peta_audit')?>">
                                <i class="far fa-map"></i>Peta Audit</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekapaudit/upload_pkpt')?>">
                                <i class="fas fa-upload"></i>Upload PKPT Final</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('rekapaudit/pkpt_final')?>">
                                <i class="far fa-check-square"></i>PKPT Final</a>
                        </li>
                        <li> -->
                        <h5><hr class="sidebar-divider">
                        <div class="text-muted">Surat Tugas</div></h5>
                        </li>
                        <li>
                            <a href="<?php echo base_url('surattugas') ?>">
                                <i class="fa fa-file"></i>Surat Tugas</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('surattugas/input_surat_tugas')?>">
                                <i class="fa fa-download"></i>Input Surat Tugas</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('surattugas/view_tgspegawai')?>">
                                <i class="fas fa-desktop"></i>View Tugas Pegawai</a>
                        </li>
                        <!-- <h5><hr class="sidebar-divider">
                        <div class="text-muted">Laporan Hasil Audit (LHA)</div></h5>
                        </li>
                        <li>
                            <a href="<?php echo base_url('lha') ?>">
                                <i class="fa fa-file-text"></i>Program Kerja Audit</a>
                        </li>
                        <hr class="sidebar-divider">
                        <h5><div class="text-muted">Laporan Hasil Evaluasi (LHE)</div></h5>
                        </li>
                        <li>
                            <a href="<?php echo base_url('lhe') ?>">
                                <i class="fa fa-copy"></i>Evaluasi Audit</a>
                        </li>
                        <hr class="sidebar-divider">
                        <h5><div class="text-muted">Laporan Hasil Review (LHR)</div></h5>
                        </li>
                        <li>
                            <a href="<?php echo base_url('lhr') ?>">
                                <i class="fa fa-rotate-right"></i>Review Audit</a>
                        </li> -->
                        <hr class="sidebar-divider">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cog"></i>Pengaturan
                                <span class="arrow ml-5">
                                    <i class="fas fa-angle-down ml-1"></i>
                                </span></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('user') ?>"><i class="zmdi zmdi-account"></i>Account</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html"><i class="fa fa-user-circle"></i>Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('auth/logout') ?>">
                                <i class="fa fa-sign-out-alt"></i>Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        </div>
        <!-- END MENU SIDEBAR-->