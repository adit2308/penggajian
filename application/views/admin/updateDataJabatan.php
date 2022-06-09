                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($jabatan as $j) : ?>
                                <!--foreach/perulangan berguna untuk mengambil data dari query table-->
                                <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                                <form method="post" action="<?php echo base_url('admin/dataJabatan/updateDataAksi') ?>">
                                    <div class="form-group">
                                        <label>Nama Jabatan</label>
                                        <input type="hidden" name="id_jabatan" class="form-control" value="<?php echo $j->id_jabatan ?>">
                                        <input type="text" name="nama_jabatan" class="form-control" value="<?php echo $j->nama_jabatan ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('nama_jabatan', '<div class="text small text-danger"></div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Gaji Pokok</label>
                                        <input type="number" name="gaji_pokok" class="form-control" value="<?php echo $j->gaji_pokok ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('gaji_pokok', '<div class="text small text-danger"></div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Tunjangan Transportasi</label>
                                        <input type="number" name="tj_transport" class="form-control" value="<?php echo $j->tj_transport ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('tj_transport', '<div class="text small text-danger"></div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Uang Makan</label>
                                        <input type="number" name="uang_makan" class="form-control" value="<?php echo $j->uang_makan ?>">
                                        <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                        <?php echo form_error('uang_makan', '<div class="text small text-danger"></div>') ?>
                                    </div>

                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->