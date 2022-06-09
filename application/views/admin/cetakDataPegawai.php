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
                        <h3>NASI COKOT NANTA</h3>
                        <h2>Kabupaten Bogor</h2>
                        <h5>Rukan Aries Niaga Blok A1 No 3A. Taman Aries no. telp (021) 589069.</h5>
                        <br />
                        <h4>Daftar Data Pegawai</h4>
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
    <p>Periode Laporan Data Pegawai Bulan <?php echo $bulan ?>, Tahun <?php echo $tahun ?></p>
    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">tanggal_masuk</th>
            <th class="text-center">Status</th>
        </tr>



        <?php $no = 1;
        foreach ($pegawai as $p) : ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $p->nik ?></td>
                <td class="text-center"><?php echo $p->nama_pegawai ?></td>
                <td class="text-center"><?php echo $p->jenis_kelamin ?></td>
                <td class="text-center"><?php echo $p->jabatan ?></td>
                <td class="text-center"><?php echo $p->tanggal_masuk ?></td>
                <td class="text-center"><?php echo $p->status ?></td>

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