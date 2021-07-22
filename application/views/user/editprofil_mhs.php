<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/icons/itenas-w.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Profil Mahasiswa | Institut Teknologi Nasional</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/'); ?>vendor/theme/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/'); ?>vendor/theme/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/itenas.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Profil Mahasiswa</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/itenas.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="<?= base_url('user/editprofil_mhs'); ?>">
                                <i class="far fa-check-square"></i>Profil Mahasiswa</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?= base_url('user/kuesioner_mhs'); ?>">
                                <i class="fas fa-copy"></i>Kuesioner</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="" action="" method="">
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $this->session->userdata('nrp'); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $this->session->userdata('nama'); ?></a>
                                                    </h5>
                                                    <span class="email">Mahasiswa</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?= base_url('auth/logout_mhs'); ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Mahasiswa</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1"><?= $this->session->userdata('nama'); ?></h5>
                                            <!-- <input type="text" class="text-sm-center mt-2 mb-1" placeholder="Nama Mahasiswa" disabled name="namamhs" value="<?= $this->session->userdata('nama'); ?>"> -->
                                            <div class="location text-sm-center">
                                                <i class=""></i><?= $this->session->userdata('nrp'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Profil</strong> Mahasiswa
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="card-body card-block">
                                        <!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                                        <?= form_open_multipart('user/editprofil_mhs'); ?>
                                        <div class="row form-group">
                                            <div class="col col-md-5">
                                                <label class=" form-control-label">NRP Mahasiswa</label>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <!-- <p class="form-control-static">NRP Mahasiswa</p> -->
                                                <input type="text" class="form-control-static" readonly placeholder="NRP" name="nrpmhs" value="<?= $this->session->userdata('nrp'); ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-5">
                                                <label for="text-input" class=" form-control-label">Nama Mahasiswa</label>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <!-- <input type="text" id="text-input" name="text-input" placeholder="Nama Mahasiswa" readonly="" class="form-control"> -->
                                                <input type="text" class="form-control-static" placeholder="Nama Mahasiswa" readonly name="namamhs" value="<?= $this->session->userdata('nama'); ?>">
                                                <small class="form-text text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-5">
                                                <label for="text-input" class=" form-control-label">NIK (No. KTP)</label>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <!-- <input type="text" id="text-input" name="text-input" placeholder="NIK (No. KTP)" class="form-control"> -->
                                                <input type="text" class="form-control" placeholder="NIK (No.KTP)" id="noktpmhs" name="noktpmhs" value="<?= $user['noktpmhs'] ?>">
                                                <?= form_error('noktpmhs', '<small class="text-danger pl-3">', '</small>'); ?>
                                                <small class="form-text text-muted">Pastikan NIK (No. KTP) benar!</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-5">
                                                <label for="select" class=" form-control-label">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <!-- <select name="select" id="select" class="form-control">
                                                    <option value="0">Pilih Jenis Kelamin</option>
                                                    <option value="1">Laki-laki</option>
                                                    <option value="2">Perempuan</option>
                                                </select> -->
                                                <select class="form-control" aria-label=".form-select-sm example" name="jkmhs">
                                                    <option>Pilih Jenis Kelamin</option>
                                                    <option value="L" <?php if ($user['jkmhs'] === 'L') : ?> selected <?php endif; ?>>Laki-laki</option>
                                                    <option value="P" <?php if ($user['jkmhs'] === 'P') : ?> selected <?php endif; ?>>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-5">
                                                <label for="text-input" class=" form-control-label">No. Handphone</label>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <input type="text" class="form-control" placeholder="No. Handphone" id="nohpmhs" name="nohpmhs" value="<?= $user['nohpmhs'] ?>">
                                                <?= form_error('nohpmhs', '<small class="text-danger pl-3">', '</small>'); ?>
                                                <small class="form-text text-muted">Pastikan No. Handphone benar!</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!-- <div class="form-group"> -->
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i type="submit" class=""></i> Simpan Data
                                            <!-- <button type="submit" class="btn btn-primary">Simpan Data</button> -->
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021 Institut Teknologi Nasional. Developed by <a href="https://colorlib.com">UPT-TIK Itenas</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/slick/slick.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/'); ?>vendor/theme/js/main.js"></script>

</body>

</html>
<!-- end document-->