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
                         <?php if ($this->fungsi->user_login()->level == 'admin') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Dashboard Dan Logout"><i class="fa  fa-bank (alias)"></i>Dashboard</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('dashboard'); ?>">Data Dashboard</a></li>
                                     <li><a href="<?= base_url('judulwebsite') ?>" title="Click Untuk Kembali Ke Login">Judul Website</a></li>
                                     <li><a href="<?= base_url('auth/logout') ?>" title="Click Untuk Kembali Ke Login">Logout</a></li>
                                 </ul>
                             </li>
                         <?php } ?>
                         <?php if ($this->fungsi->user_login()->level == 'admin') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Regis dan Data Penyakit TBC"><i class="fa fa-user-plus"></i>Data Admin</a>
                                 <ul class="submenu megamenu">
                                     <li>
                                         <ul>
                                             <li><a href="<?= base_url('admin'); ?>">Data Register</a></li>
                                             <li><a href="<?= base_url('admin/downloadpasien'); ?>">Download Pend Pasien</a></li>
                                             <li><a href="<?= base_url('admin/downloaddiagnosa'); ?>">Download Diag Pasien</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>

                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'admin') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data User"><i class="fa fa-user-circle"></i><?= ucfirst($this->fungsi->user_login()->level) ?></a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('user'); ?>">
                                             <img src="<?= base_url('assets/'); ?>tutorialcssjsadmin/images/images.jpg" class="rounded-circle mr-2" width="30px" alt=""><?= ucfirst($this->fungsi->user_login()->username) ?></a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'admin') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Berita"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Data Berita</a>
                                 <ul class="submenu megamenu">
                                     <li>
                                         <ul>
                                             <li><a href="<?= base_url('admin/anual'); ?>">Data Berita Anual</a></li>
                                             <li><a href="<?= base_url('admin/mensal'); ?>">Data Berita Mensal</a></li>
                                             <li><a href="<?= base_url('admin/databeritasemanal'); ?>">Data Berita Semanal</a></li>
                                         </ul>
                                     </li>
                                     <li>
                                         <ul>
                                             <li><a href="<?= base_url('admin/databeritamensal'); ?>">Data Berita Setiap Hari</a></li>
                                             <li><a href="<?= base_url('admin/tutorial') ?>">Data Tutorial</a></li>
                                             <li><a href="<?= base_url('admin/tutorial') ?>">Informasi Penyakit</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'admin') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Pendaftaran"><i class="fa fa-file-text-o" aria-hidden="true"></i>Data Pendaftaran</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('pendaftaranpasien'); ?>">Pendaftaran Pasien</a></li>
                                     <li><a href="<?= base_url('pendaftaranpasien/ubahpendaftaranpasien'); ?>">Input Pendaftaran Pasien</a></li>
                                     <li><a href="<?= base_url('pendaftaranpasien/pendaftaran'); ?>">Detail Pendaftaran</a></li>
                                     <li><a href="<?= base_url(''); ?>">Data Aturan Hasil Diagnosa</a></li>
                                     <li><a href="<?= base_url(''); ?>">Data Aturan Hasil Gejala</a></li>
                                     <li><a href="<?= base_url('pendaftaranpasien/sendemail'); ?>">Send Email</a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'admin') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Wilayah"><i class="fa  fa-bank (alias)"></i>Data Wilayah</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('kabupaten'); ?>">Data Kabupaten</a></li>
                                     <li><a href="<?= base_url('kecamatan'); ?>">Data Kecamatan</a></li>
                                     <li><a href="<?= base_url('kelurahan'); ?>">Data Kelurahan</a></li>
                                 </ul>
                             </li>
                         <?php } ?>
                         <?php if ($this->fungsi->user_login()->level == 'admin') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Rumah Sakit dan Data DokterPerawatBidan"><i class="fa fa-home"></i>Data Rumah Sakit</a>
                                 <ul class="submenu megamenu">
                                     <li>
                                         <ul>
                                             <li><a href="<?= base_url('admin/rumahsakit'); ?>">Rumah Sakit</a></li>
                                             <li><a href="<?= base_url('admin/jenisobat'); ?>">Jenis Obat</a></li>
                                             <li><a href="<?= base_url('admin/dokterperawatbidan'); ?>">
                                                     DokterPerawatBidan</a></li>
                                         </ul>
                                     </li>
                                     <li>
                                         <ul>
                                             <li><a href="<?= base_url('admin/obat_keluar'); ?>">Obat Keluar</a></li>
                                             <li><a href="advanced-highlight.html">Data Apoteker</a></li>
                                             <li><a href="advanced-rating.html">Data Pegawai RS</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <!-- DATA DOKTER PERAWAT -->
                         <?php if ($this->fungsi->user_login()->level == 'dokter') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Dashboard Dan Logout"><i class="fa  fa-bank (alias)"></i>Dashboard</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('dashboard'); ?>">Data Dashboard</a></li>
                                     <li><a href="<?= base_url('auth/logout') ?>" title="Click Untuk Kembali Ke Login">Logout</a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'dokter') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data User"><i class="fa fa-user-circle"></i><?= ucfirst($this->fungsi->user_login()->level) ?></a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('user'); ?>"><?= ucfirst($this->fungsi->user_login()->username) ?></a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'dokter') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Berita"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Data Berita</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('user/anualberita'); ?>">Berita Anual</a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'dokter') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Hasil Diagnosa Penyakit TBC"><i class="fa fa-file-text-o" aria-hidden="true"></i>Hasil Diagnosa</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('hasildiagnosa'); ?>">Data Pendaftaran Pasien</a></li>
                                     <li><a href="<?= base_url('hasildiagnosa/hasildiagnosapasien'); ?>">Hasil Diagnosa Pasien</a></li>
                                     <li><a href="<?= base_url('hasildiagnosa/hasilpdfpasien'); ?>">Hasil Data PDF Pasien</a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'dokter') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Dokter & Perawat & Bidan"><i class="fa fa-fw fa-users" aria-hidden="true"></i>Data Dokter Perawat</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('dokterperawatbidan'); ?>">Data Dokter Perawat</a></li>
                                     <li><a href="advanced-highlight.html">Data Apoteker</a></li>
                                 </ul>
                             </li>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'dokter') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Penyakit & Gejala & Solusi & Keterangan"><i class="fa fa-cloud-download" aria-hidden="true"></i>Data Penyakit TBC</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('relasidiagnosa'); ?>">Data Relasi Diagnosa</a></li>
                                     <li><a href="<?= base_url('dokterperawatbidan/penyakit'); ?>">Data Penyakit</a></li>
                                     <li><a href="<?= base_url('dokterperawatbidan/gejala'); ?>">Data Gejala</a></li>
                                     <li><a href="<?= base_url('dokterperawatbidan/solusi'); ?>">Data Solusi</a></li>
                                     <li><a href="<?= base_url('dokterperawatbidan/keterangan'); ?>">Data Keterangan</a></li>
                                     <li><a href="<?= base_url('dokterperawatbidan/konsultasi'); ?>">Data Konsultasi</a></li>
                                     <li><a href="<?= base_url('dokterperawatbidan/jenisobat'); ?>">Data Obat TBC</a></li>
                                 </ul>
                             </li>

                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'dokter') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Rumah Sakit"><i class="fa fa-home"></i>Data Rumah Sakit</a>
                                 <ul class="submenu megamenu">
                                     <li>
                                         <ul>
                                             <li><a href="<?= base_url('dokterperawatbidan/rumahsakit'); ?>">Rumah Sakit</a></li>
                                             <li><a href="<?= base_url('dokterperawatbidan/jenisobat'); ?>">Jenis Obat</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <!-- DATA MEMBER -->
                         <?php if ($this->fungsi->user_login()->level == 'member') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data User"><i class="fa fa-user-circle"></i><?= ucfirst($this->fungsi->user_login()->level) ?></a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('user'); ?>"><?= ucfirst($this->fungsi->user_login()->username) ?></a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'member') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Pendaftaran"><i class="fa fa-file-text-o" aria-hidden="true"></i>Data Pendaftaran</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('pendaftaranpasien'); ?>">Pendaftaran Pasien</a></li>
                                     <li><a href="<?= base_url('diagnosa/relasidiagnosa'); ?>">Input Pendaftaran Pasien</a></li>
                                     <li><a href="<?= base_url('pendaftaranpasien/detailhasilpendaftaran'); ?>">Detail Pendaftaran Pasien</a></li>
                                     <li><a href="<?= base_url('pendaftaranpasien/detailhasildiagosa'); ?>">Detail Diagnosa Pasien</a></li>
                                     <li><a href="<?= base_url(''); ?>">Data Aturan Hasil Diagnosa</a></li>
                                     <li><a href="<?= base_url('dokterperawatbidan/aturangejala'); ?>">Data Aturan Hasil Gejala</a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'member') { ?>
                             <li class="has-submenu">
                                 <a href="#" title="Data Berita"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Data Berita</a>
                                 <ul class="submenu">
                                     <li><a href="<?= base_url('user/anualberita'); ?>">Berita Anual</a></li>
                                 </ul>
                             </li>
                         <?php } ?>

                         <?php if ($this->fungsi->user_login()->level == 'member') { ?>
                             <li class="has-submenu">
                                 <a href="<?= base_url('auth/logout') ?>" title="Click Untuk Kembali Ke Login">
                                     <i class="fa fa-arrow-circle-right"></i>Logout</a>
                             </li>
                         <?php } ?>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </header>