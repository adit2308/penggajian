                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataJabatan/tambahData') ?>">
                        <i class="fas fa-plus"> Tambah Jabatan</i></a>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Jabatan</th>
                            <th class="text-center">Gaji Pokok</th>
                            <th class="text-center">Tj. Transport</th>
                            <th class="text-center">Uang Makan</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <!-- untuk menampilkan datanya disini kita menggunakan foreach(perulangan) berdasarkan query yang ada di data jabatan-->
                        <?php $no = 1;
                        foreach ($jabatan as $j) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $j->nama_jabatan ?></td>
                                <td class="text-center">Rp. <?php echo number_format($j->gaji_pokok, 2, ',', '.') ?></td>
                                <td class="text-center">Rp. <?php echo number_format($j->tj_transport, 2, ',', '.') ?></td>
                                <td class="text-center">Rp. <?php echo number_format($j->uang_makan, 2, ',', '.') ?></td>
                                <td class="text-center">Rp. <?php echo number_format($j->gaji_pokok + $j->tj_transport + $j->uang_makan, 2, ',', '.') ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataJabatan/updateData/' . $j->id_jabatan) ?>">
                                            <i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataJabatan/deleteData/' . $j->id_jabatan) ?>">
                                            <i class="fas fa-trash"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->