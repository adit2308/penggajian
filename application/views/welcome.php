<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $title ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url() ?>/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <i class="fa-regular fa-hospital"></i>
                Pillbox Hill <span>Medical Center<span>.
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="#portfolio">Service</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link active bg-light text-dark rounded font-weight-bold" href="#loginModal" data-bs-toggle="modal">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead Baru -->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Hospital!</div>
            <div class="masthead-heading text-uppercase"> <span class="auto-type"><span></div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Tell Me More</a>
        </div>
    </header>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <?php foreach ($portfolio as $p) : ?>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $p['nama_portfolio'] ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $p['deskripsi'] ?><span></h3>
                </div>
            <?php endforeach; ?>

            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <?php foreach ($portfolio1 as $p1) : ?>
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url() . 'assets/portfolio/' . $p1['photo'] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $p1['nama_portfolio'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $p1['deskripsi'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <?php foreach ($portfolio2 as $p2) : ?>
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url() . 'assets/portfolio/' . $p2['photo'] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $p2['nama_portfolio'] ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $p2['deskripsi'] ?></div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/9.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">NASI COKOT</div>
                            <div class="portfolio-caption-subheading text-muted">Menu Andalan Galang</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/10.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">NASI LEMAK</div>
                            <div class="portfolio-caption-subheading text-muted">Teri Import dari Amerika</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/11.jpeg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">NASI GORENG</div>
                            <div class="portfolio-caption-subheading text-muted">Telor dan Daging Suwir</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo base_url() ?>/assets/img/portfolio/12.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">NASI RENDANG</div>
                            <div class="portfolio-caption-subheading text-muted">Daging Rendang Empuk</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">This is our team, happy to give the best for you.</h3>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <?php foreach ($team1 as $t1) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>/assets/img/team/g.jpg" alt="..." />
                            <h4><?php echo $t1['nama'] ?></h4>
                            <p><?php echo $t1['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-3">
                    <?php foreach ($team2 as $t2) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>/assets/img/team/d.jpg" alt="..." />
                            <h4><?php echo $t2['nama'] ?></h4>
                            <p><?php echo $t2['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-3">
                    <?php foreach ($team3 as $t3) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>/assets/img/team/w.jpg" alt="..." />
                            <h4><?php echo $t3['nama'] ?></h4>
                            <p><?php echo $t3['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-3">
                    <?php foreach ($team4 as $t4) : ?>
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url() ?>/assets/img/team/y.jpg" alt="..." />
                            <h4><?php echo $t4['nama'] ?></h4>
                            <p><?php echo $t4['npm'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Delicious <span>Resto.<span> 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://github.com/galanghanaf/penggajian" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://github.com/galanghanaf/penggajian" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://github.com/galanghanaf/penggajian" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="https://github.com/galanghanaf/penggajian">GitHub</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php foreach ($portfolio1 as $p1) : ?>
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $p1['nama_portfolio'] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $p1['deskripsi'] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>/assets/img/portfolio/7.jpg" alt="..." />
                                    <p><?php echo $p1['content'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Nasi Daging</h2>
                                <p class="item-intro text-muted">Daging Sapi Olahan Khas Dapoer Galang.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>/assets/img/portfolio/8.jpg" alt="..." />
                                <p>Daging sapi olahan khas dapoer Galang yang masak dengan bumbu rahasia.</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Nasi Cokot</h2>
                                <p class="item-intro text-muted">Paket Nasi Khas Dapoer Galang.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>/assets/img/portfolio/9.jpg" alt="..." />
                                <p>Nasi yang dicampur dengan berbagai lauk pauk khas dapoer Galang.</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Nasi Lemak</h2>
                                <p class="item-intro text-muted">Nasi Lemak Khas Dapoer Galang.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>/assets/img/portfolio/10.jpg" alt="..." />
                                <p>Nasi lemak adalah jenis makanan khas suku Melayu yang lazim ditemukan di Malaysia di
                                    mana hidangan ini dianggap sebagai salah satu hidangan nasionalnya, dan Indonesia,
                                    khususnya di Riau, Kepulauan Riau dan Sumatera Utara. Hidangan ini pun dapat
                                    ditemukan di Singapura dan Brunei.</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Nasi Goreng</h2>
                                <p class="item-intro text-muted">Nasi Goreng Khas Dapoer Galang.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>/assets/img/portfolio/11.jpeg" alt="..." />
                                <p>Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak
                                    goreng, margarin, atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang
                                    putih, asam jawa, lada dan bumbu-bumbu lainnya; seperti telur, ayam, dan kerupuk.
                                </p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url() ?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Nasi Rendang</h2>
                                <p class="item-intro text-muted">Daging Rendang Khas Dapoer Galang.</p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo base_url() ?>/assets/img/portfolio/12.jpg" alt="..." />
                                <p>Rendang atau randang adalah masakan yang berbahan dasar daging asli Indonesia yang
                                    berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah
                                    dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan.</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase text-center">Login</h2>
                                <p class="item-intro text-muted text-center">Silahkan Login Terlebih Dahulu.</p>
                                <div class="row">

                                    <div class="col-lg-12 mt-3">
                                        <div class="p-10">
                                            <?php echo $this->session->flashdata('pesan') ?> <form class="user" method="POST" action="<?php echo base_url('Welcome') ?>">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Enter Username..." name="username">
                                                    <?php echo form_error('username', '<div class="text small text-danger"></div>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                                    <?php echo form_error('password', '<div class="text small text-danger"></div>') ?>
                                                </div>

                                                <hr>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>



                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <center class="mt-5 mb-3">
                                    <button class="btn btn-danger btn-user " data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Tutup
                                    </button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url() ?>/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Ditambahin 4 -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: ["", "Nice To Meet You", "Have a Nice Day", "Enjoy Our Meal"],
            typeSpeed: 70,
            backSpeed: 70,
            loop: true
        });
    </script>
    <!-- Ditambahin 4 -->
</body>

</html>