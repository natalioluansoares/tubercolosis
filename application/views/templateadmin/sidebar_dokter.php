 <!-- Navigation Bar-->
 
 <header id="topnav">
        <div class="menu-extras topbar-custom">
            <!-- end topbar-main -->
            <div class="menu-extras topbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>
            </div>
            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="index.html"><i class="mdi mdi-airplay"></i>Dashboard</a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-user-circle"></i>Data User</a>
                                <ul class="submenu">
                                    <li><a href="<?= base_url('user');?>">Profil User</a></li>
                                    <li><a href="<?= base_url('user/anualberita');?>">Berita Anual</a></li>
                                    <li><a href="<?= base_url('pendaftaranpasien');?>">Pendaftaran Pasien</a></li>
                                    <li><a href="<?= base_url('pendaftaranpasien/ubahpendaftaranpasien');?>">Pendaftaran Pasien</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-home"></i>Data Rumah Sakit</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?= base_url('rumahsakit');?>">Rumah Sakit</a></li>
                                            <li><a href="<?= base_url('konsultasi');?>">Data Konsultasi</a></li>
                                            <li><a href="<?= base_url('penyakit');?>">Data Penyakit</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="<?= base_url('jenisobat');?>">Jenis Obat</a></li>
                                            <li><a href="<?= base_url('obat_keluar');?>">Obat Keluar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-group (alias) "></i>Data Petugas RS</a>
                                <ul class="submenu">
                                    <li><a href="<?= base_url('dokter/dokter');?>">Dokter & Perawat & Bidan</a></li>
                                    <li><a href="advanced-highlight.html">Data Apoteker</a></li>
                                    <li><a href="advanced-rating.html">Data Pegawai RS</a></li>
                                    <li><a href="advanced-highlight.html">Data Gaji Petugas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div> 
            </div> 
        </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
