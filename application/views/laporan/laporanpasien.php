<!DOCTYPE html>
<html>

<head>
  <title>PDF DOKTER</title>
  <style type="text/css">
    #outtable {
      padding: 20px;
      border: 2px solid #e3e3e3;
      width: 680px;
      border-radius: 5px;
    }

    .short {
      width: 50px;
    }

    .normal {
      width: 150px;
    }

    table {
      /* border-collapse: collapse; */
      font-family: arial;
      color: #5E5B5C;
    }

    thead th {
      text-align: left;
      padding: 10px;
    }

    tbody td {
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }

    tbody tr:nth-child(even) {
      background: #F6F5FA;
    }

    tbody tr:hover {
      background: #EAE9F5
    }

    .line-title {
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
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
    LAPORAN DATA DOKTER<br>
    <b>Tahun 2018</b>
  </p>
  <div id="outtable">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered table-striped">
          <thead class="table-primary">
            <tr>
              <th>
                <h5 style="font-family:Times New Roman">Kode Pasien</h5>
              </th>
              <th>
                <h5 style="font-family:Times New Roman">Nama Pasien</h5>
              </th>
              <th>
                <h5 style="font-family:Times New Roman">No.KTP</h5>
              </th>
              <th>
                <h5 style="font-family:Times New Roman">Kelamin</h5>
              </th>
              <th>
                <h5 style="font-family:Times New Roman">Umur</h5>
              </th>
              <th>
                <h5 style="font-family:Times New Roman">Alamat</h5>
              </th>
              <th>
                <h5 style="font-family:Times New Roman">Tgl Penf</h5>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="font-family:Bodoni MT Black">
                <?= $pendaftaran['kodepasien']; ?>
              </td>
              <td style="font-family:Bodoni MT Black">
                <?= $pendaftaran['namapasien']; ?>
              </td>
              <td style="font-family:Bodoni MT Black">
                <?= $pendaftaran['nomor_KTP']; ?>
              </td>
              <td style="font-family:Bodoni MT Black">
                <?= $pendaftaran['jenis_kelamin']; ?>
              </td>
              <td style="font-family:Bodoni MT Black">
                <?= $pendaftaran['umurpasien']; ?>
              </td>
              <td style="font-family:Bodoni MT Black">
                <?= $pendaftaran['kecamatan']; ?>
              </td>
              <td style="font-family:Bodoni MT Black">
                <?= $pendaftaran['tgl_diagnosa']; ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html