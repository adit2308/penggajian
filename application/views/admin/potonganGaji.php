                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <!--

                    <a class="btn btn-sm btn-success mb-3" href="<?php // echo base_url('admin/potonganGaji/tambahData') 
                                                                    ?>">
                        <i class="fas fa-plus"> Tambah Data</i></a>
                     -->
                    <?php echo $this->session->flashdata('pesan') ?>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Jenis Potongan</th>
                            <th class="text-center">Jumlah Potongan</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <!-- untuk menampilkan datanya disini kita menggunakan foreach(perulangan) berdasarkan query yang ada di data potongan-->
                        <?php $no = 1;
                        foreach ($potgaji as $p) : ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $p->potongan ?></td>
                                <td class="text-center">Rp. <?php echo number_format($p->jml_potongan, 2, ',', '.') ?></td>
                                <td>
                                    <center>
                                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/potonganGaji/updateData/' . $p->id_potongan) ?>">
                                            <i class="fas fa-edit"></i></a>
                                        <!--
                                        <a onclick="return confirm('Konfirmasi Penghapusan Data')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/potonganGaji/deleteData/' . $p->id_potongan) ?>">
                                            <i class="fas fa-trash"></i></a>
                                        -->
                                    </center>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->