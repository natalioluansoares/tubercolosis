<!DOCTYPE html>
<html>

<head>
    <title>PDF DOKTER</title>

</head>

<body>
    <table>
        <!-- <img src="assets/img/profile/logo.png" style="position: absolute; width:60px; height:auto;"> -->
        <tr>
            <p align="center">
                LAPORAN RUMAH SAKIT KECAMATAN FATUBERLIO WEKIAR<br>
                <span style="font-family:Times New Roman">JL.Wekiar. 12-23 Fatuberlio-85225,Manufahi-Timor Leste <br>
                    Telp.(0380)833395- 831194</span>
                </font><br>
                Web:<span style="font-family:Times New Roman; color:#3366cc">
                    http//www.fatuberlio.ac.id</span>
                Email:<span style="font-family:Times New Roman; color:#3366cc">
                    fatuberlio.fatuberliorumahsakit@gmail.com</span>
            </p>
        </tr>
    </table>
    <hr class="line-title">
    <p align="center">
        LAPORAN DATA PASIEN<br>
        <!-- <b>Tahun :<?= date('F,Y', $pendaftaran['tgl_diagnosa']); ?></b> -->
    </p>
    <div class="row">
        <div class="col-lg-12">
            <table style="border: 1px solid black;">
                <thead>
                    <tr style="background-color: #8B6914;">
                        <th style="border: 1px solid black;">No</th>
                        <th style="border: 1px solid black;">Nama Dokter</th>
                        <th style="border: 1px solid black;">Nama Pasien</th>
                        <th style="border: 1px solid black;">Jenis Kelamin</th>
                        <th style="border: 1px solid black;">Tanggal Lahir</th>
                        <th style="border: 1px solid black;">Umur</th>
                        <th style="border: 1px solid black;">No.KTP</th>
                        <th style="border: 1px solid black;">Tgl Diagnosa</th>
                        <th style="border: 1px solid black;">Alamat</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($pendaf as $pendaftaran) : ?>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid black;"><?= $no++; ?></td>
                            <td style="border: 1px solid black;"><?= $pendaftaran['nama_dokter']; ?></td>
                            <td style="border: 1px solid black;"><?= $pendaftaran['namapasien']; ?></td>
                            <td style="border: 1px solid black;"><?= $pendaftaran['jenis_kelamin']; ?></td>
                            <td style="border: 1px solid black;"><?= $pendaftaran['tanggal_lahir']; ?></td>
                            <td style="border: 1px solid black;"><?= $pendaftaran['umurpasien']; ?></td>
                            <td style="border: 1px solid black;"><?= $pendaftaran['nomor_KTP']; ?></td>
                            <td style="border: 1px solid black;"><?= date('d,F,Y', $pendaftaran['tgl_diagnosa']); ?></td>
                            <td style="border: 1px solid black;"><?= $pendaftaran['alamat']; ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html