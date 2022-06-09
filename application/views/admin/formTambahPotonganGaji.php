                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <!-- Disini kita baca datanya dengan method POST sesuai pada controllers/admin/dataJabatan-->
                            <form method="post" action="<?php echo base_url('admin/potonganGaji/tambahDataAksi') ?>">
                                <div class="form-group">
                                    <label>Jenis Gaji</label>
                                    <input type="text" name="potongan" class="form-control">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('potongan', '<div class="text small text-danger"></div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Potongan</label>
                                    <input type="number" name="jml_potongan" class="form-control">
                                    <!-- function rules kita panggil dengan form_error, untuk menampilkan pesan masalahnya-->
                                    <?php echo form_error('jml_potongan', '<div class="text small text-danger"></div>') ?>
                                </div>


                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->


                </div>
                <!-- End of Main Content -->