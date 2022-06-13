<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body onload="print()">

    <center>

        <table>
            <tr>
                <td>
                    <img src="<?php echo base_url() ?>/assets/img/logo_rs.png" class="mb" style="width: 100px; height: 100px;">
                </td>
                <td>
                    <center>
                        <h2>Delicious <span>Resto.<span></h2>
                        <h2>Kabupaten Bogor</h2>
                        <h5>Rukan Aries Niaga Blok A1 No 3A. Taman Aries no. telp (021) 589069.</h5>
                        <h5>Website : https://www.rumahsakitumum.com</h5>
                        <br />
                        <h4>Daftar Gaji Pegawai</h4>
                    </center>
                </td>
            </tr>
        </table>


    </center>
    <hr>
    <?php

    if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
        $bulan = $_GET['bulan'];
        $tahun = $_GET['tahun'];
        $bulantahun = $bulan . $tahun;
    } else {
        $bulan = date('m');
        $tahun = date('Y');
        $bulantahun = $bulan . $tahun;
    }

    ?>
    <p>Periode Gaji Untuk Bulan <?php echo $bulan ?>, Tahun <?php echo $tahun ?></p>
    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Gaji Pokok</th>
            <th class="text-center">Tj. Transportasi</th>
            <th class="text-center">Uang Makan</th>
            <th class="text-center">Potongan</th>
            <th class="text-center">Total Gaji</th>
        </tr>


        <?php foreach ($potongan as $p) {
            $tanpa_keterangan = $p->jml_potongan;
        }  ?>


        <?php $no = 1;
        foreach ($cetakGaji as $g) : ?>
            <?php $potongan = $g->tanpa_keterangan * $tanpa_keterangan ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $g->nik ?></td>
                <td><?php echo $g->nama_pegawai ?></td>
                <td><?php echo $g->jenis_kelamin ?></td>
                <td><?php echo $g->nama_jabatan ?></td>
                <td>Rp.<?php echo number_format($g->gaji_pokok, 0, ',', '.') ?></td>
                <td>Rp.<?php echo number_format($g->tj_transport, 0, ',', '.') ?></td>
                <td>Rp.<?php echo number_format($g->uang_makan, 0, ',', '.') ?></td>
                <td>Rp.<?php echo number_format($potongan, 0, ',', '.') ?></td>
                <td>Rp.<?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan, 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td></td>
            <td width="200px">
                <p> Bogor, <?php echo date("d M Y") ?>
                    <br>
                    Pemilik
                </p>
                <img src="<?php echo base_url() ?>/assets/img/tanda_tangan.png" class="mb" style="width: 100px; height: 100px;">
                <p>Pamungkas</p>



            </td>
        </tr>
    </table>

</body>

</html>