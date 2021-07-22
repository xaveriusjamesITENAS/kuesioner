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
    <title>Kuesioner Dosen | Institut Teknologi Nasional</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/'); ?>vendor/theme/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/'); ?>vendor/theme/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
                        <li class="has-sub">
                            <a class="js-arrow" href="<?= base_url('user/kuesioner_dsn'); ?>">
                                <i class="fas fa-copy"></i>Kuesioner Matakuliah</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?= base_url('user/kuelp2m_kry'); ?>">
                                <i class="fas fa-copy"></i>Pelayanan LP2M</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?= base_url('user/kuefkl_kry'); ?>">
                                <i class="fas fa-copy"></i>Pelayanan Fakultas</a>
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
                        <li class="hs-sub">
                            <a class="js-arrow" href="<?= base_url('user/kuesioner_dsn'); ?>">
                                <i class="fas fa-copy"></i>Matakuliah</a>
                        </li>
                        <li class="active">
                            <a class="js-arrow" href="<?= base_url('user/kuelp2m_kry'); ?>">
                                <i class="fas fa-copy"></i>Pelayanan LP2M</a>
                        </li>
                        <li class="hs-sub">
                            <a class="js-arrow" href="<?= base_url('user/kuefkl_kry'); ?>">
                                <i class="fas fa-copy"></i>Pelayanan Fakultas</a>
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
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                <button class="au-btn--submit" type="submit">
                  <i class="zmdi zmdi-search"></i>
                </button> -->
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
                                                    <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-04.jpg" alt="Diane Myers" />
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
                                                    <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
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
                                            <a class="js-acc-btn" href="#"><?= $this->session->userdata('nip'); ?></a>
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
                                                        <a href="#"><?= $this->session->userdata('nama_dsn'); ?></a>
                                                    </h5>
                                                    <span class="email">Karyawan</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?= base_url('auth/logout_kry'); ?>">
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
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Kuesioner Pelayanan LP2M</strong>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="card-body">
                                        <div class="typo-headers">
                                            <h1 class="pb-2 display-5" style="font-size: 25px;">Instrumen Penilaian Pelayanan LP2M Terhadap Dosen</h1>
                                        </div>
                                        <div class="typo-articles">
                                            <p>
                                                Kuesioner ini menanyakan pendapat anda mengenai pelayanan LP2M terhadap tenaga pendidik. Pengumpulan data menggunakan kuesioner ini bertujuan mengukur keefektifan pelayanan LP2M yang telah dilakukan. Berikan tanggapan berdasarkan pendapat sendiri dan bukan pandangan/pendapat orang lain.
                                            <p></p>
                                            <br>Kami mengucapkan banyak terima kasih atas partisipasinya dalam pengisian kuesioner ini.</br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body card-block">
                                        <?= form_open('user/kuelp2m_kry'); ?>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label" style="color:green; font-weight:bold">Petunjuk Pengisian</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-static" style="color:green">Kuesioner ini terdiri dari 12 butir pertanyaan dengan bentuk jawaban pilihan ganda yang terdiri dari 4 (empat) pilihan jawaban. Anda dapat memilih satu pilihan sesuai pendapat pribadi.</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                        <label for="radio1" class="form-check-label " style="color:green">
                                                            <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input" disabled>Kurang (Tidak Puas)
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio2" class="form-check-label " style="color:green">
                                                            <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input" disabled>Cukup (Kurang Puas)
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio3" class="form-check-label " style="color:green">
                                                            <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input" checked disabled>Baik (Puas)
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio3" class="form-check-label " style="color:green">
                                                            <input type="radio" id="radio4" name="radios" value="option4" class="form-check-input" disabled>Sangat Baik (Sangat Puas)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $no = 1;
                                        $no_radio1 = 1;
                                        $no_radio2 = 1;
                                        $no_radio3 = 1;
                                        $no_radio4 = 1;
                                        $name = 'jwb';
                                        foreach ($pertanyaan_lp2m as $prt) : ?>
                                            <div class="form-group row">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label" style="font-weight:bold">Pertanyaan <?= $no++ ?></label>
                                                </div>

                                                <!-- <div class="col-sm-10"> -->
                                                <div class="col-12 col-md-9">
                                                    <!-- <input class="form-control" type="text" placeholder="Pertanyaan 1" aria-label="Disabled input example" disabled readonly> -->
                                                    <p class="form-control-static" aria-label="Disabled input example"><?= $prt['pertanyaan']; ?></p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="<?= $name . $no_radio1++ ?>" id="flexRadioDisabled" value="1">
                                                        <label class="form-check-label" for="flexRadioDisabled">
                                                            Sangat Tidak Puas
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="<?= $name . $no_radio2++ ?>" id="flexRadioCheckedDisabled" value="2">
                                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                            Tidak Puas
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="<?= $name . $no_radio3++ ?>" id="flexRadioDisabled" value="3">
                                                        <label class="form-check-label" for="flexRadioDisabled">
                                                            Puas
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="<?= $name . $no_radio4++ ?>" id="flexRadioCheckedDisabled" value="4">
                                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                            Sangat Puas
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="textarea-input" class=" form-control-label" style="font-weight:bold">Saran</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="saran" id="textarea-input" rows="9" value="saran" placeholder="Berikan saran anda mengenai kendala utama dalam pelayanan LP2M." class="form-control"></textarea>
                                                <!-- <textarea rows="4" cols="80" class="form-control" placeholder="" name="saran" value="saran"></textarea> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <!-- <div class="form-group"> -->
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i type="submit" class=""></i>Submit
                                            <!-- <button type="submit" class="btn btn-primary">Simpan Data</button> -->
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTAINER-->

            </div>

            <!-- Jquery JS-->
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/jquery-3.2.1.min.js"></script>
            <!-- Bootstrap JS-->
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-4.1/popper.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-4.1/bootstrap.min.js"></script>
            <!-- Vendor JS       -->
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/slick/slick.min.js">
            </script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/wow/wow.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/animsition/animsition.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
            </script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/counter-up/jquery.waypoints.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/counter-up/jquery.counterup.min.js">
            </script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/circle-progress/circle-progress.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/chartjs/Chart.bundle.min.js"></script>
            <script src="<?= base_url('assets/'); ?>vendor/theme/vendor/select2/select2.min.js">
            </script>

            <!-- Main JS-->
            <script src="<?= base_url('assets/'); ?>vendor/theme/js/main.js"></script>
</body>

</html>
<!-- end document-->