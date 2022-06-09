                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <div class="alert alert-success font-weight-bold ">Selamat Datang <?php echo $this->session->userdata('nama_pegawai') ?>, Anda Login Sebagai Pegawai</div>

                    <div class="card" style="margin-bottom: 120px;">
                        <div class="card-header font-weight-bold bg-primary text-white">
                            Data Saya
                        </div>
                        <?php foreach ($pegawai as $p) : ?>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Nik : <?php echo  $p->nik ?></li>
                                    <li class="list-group-item">Nama : <?php echo $p->nama_pegawai ?></li>
                                    <li class="list-group-item">Nik : <?php echo $p->jenis_kelamin ?></li>
                                    <li class="list-group-item">Jabatan : <?php echo $p->jabatan ?></li>
                                    <li class="list-group-item">Tanggal Masuk : <?php echo $p->tanggal_masuk ?></li>
                                    <li class="list-group-item">Status : <?php echo $p->status ?></li>
                                </ul>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->