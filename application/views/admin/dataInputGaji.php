<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="card mb-3">
        <div class="card-header" bg-primary text-white>
            Filter Input Gaji Pegawai
        </div>
        <div class="card-body">

            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="staticEmail2">Bulan:</label>
                    <select class="form-control ml-3" name="bulan">
                        <option value="">--Pilih Bulan--</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>

                <div class="form-group ml-5">
                    <label for="staticEmail2">Tahun: </label>
                    <select class="form-control ml-3" name="tahun">
                        <option value="">--Pilih Tahun--</option>
                        <?php $tahun = date('Y');
                        for ($i = 2021; $i < $tahun + 4; $i++) { ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>

                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ml-3 ml-auto"><i class="fas fa-eye"></i>Tampilkan Data</button>
                <a href="<?php echo base_url('admin/dataInputGaji/inputGajiPegawai') ?>" class="btn btn-success ml-3"><i class="fas fa-plus"></i>Input Gaji</a>
            </form>

        </div>
    </div>

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


    <div class="alert alert-info">
        Menampilkan Data Pegawai Yang Menerima Gaji Pada Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span>
        Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
    </div>
    <?php if (count($absensi) > 0) { ?>
        <a onclick="return confirm('Konfirmasi Penghapusan Semua Data Input Gaji')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataInputGaji/deleteAllInputGaji/') ?>">
            <i class="fas fa-trash"> Hapus Semua Input Data Gaji</i></a>
    <?php }  ?>
    <br>
    <?php
    $jml_data = count($absensi);
    if ($jml_data > 0) { ?>
        <?php echo $this->session->flashdata('pesan') ?>
        <br>
        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-center">No</td>
                <td class="text-center">Nik</td>
                <td class="text-center">Nama pegawai</td>
                <td class="text-center">Jenis Kelamin</td>
                <td class="text-center">Jabatan</td>
                <td class="text-center">Tanpa Keterangan</td>
                <td class="text-center">Action</td>
            </tr>

            <?php $no = 1;
            foreach ($absensi as $b) : ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td class="text-center"><?php echo $b->nik ?></td>
                    <td class="text-center"><?php echo $b->nama_pegawai ?></td>
                    <td class="text-center"><?php echo $b->jenis_kelamin ?></td>
                    <td class="text-center"><?php echo $b->nama_jabatan ?></td>
                    <td class="text-center"><?php echo $b->tanpa_keterangan ?></td>
                    <td>
                        <center>
                            <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataInputGaji/deleteData/' . $b->id_absensi) ?>">
                                <i class="fas fa-trash"></i></a>
                        </center>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table><br><br><br><br><br>
    <?php } else { ?>
        <span class="badge badge-danger"><i class="fas fa-info-circle"></i>Data belum terisi, silahkan input data gaji terlebih dahulu pada bulan dan tahun yang anda pilih!</span>
    <?php } ?>


</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->