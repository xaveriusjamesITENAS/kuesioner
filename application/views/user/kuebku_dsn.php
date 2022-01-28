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
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/font-awesome-4.7/css/font-awesome.min.css"
		rel="stylesheet" media="all">
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/font-awesome-5/css/fontawesome-all.min.css"
		rel="stylesheet" media="all">
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/mdi-font/css/material-design-iconic-font.min.css"
		rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet"
		media="all">

	<!-- Vendor CSS-->
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/animsition/animsition.min.css" rel="stylesheet"
		media="all">
	<link
		href="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
		rel="stylesheet" media="all">
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet"
		media="all">
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="<?= base_url('assets/'); ?>vendor/theme/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"
		media="all">

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
						<li class="hs-sub">
							<a class="js-arrow" href="<?= base_url('user/kuesioner_dsn'); ?>">
								<i class="fas fa-graduation-cap"></i>Pembelajaran Daring</a>
						</li>
						<li class="hs-sub">
							<a class="js-arrow" href="<?= base_url('user/kuelp2m_dsn'); ?>">
								<i class="fas fa-copy"></i>Pelayanan LP2M</a>
						</li>
						<li class="hs-sub">
							<a class="js-arrow" href="<?= base_url('user/kuefkl_dsn'); ?>">
								<i class="fas fa-university"></i>Pelayanan Fakultas</a>
						</li>
						<li class="active">
							<a class="js-arrow" href="<?= base_url('user/kuebku_dsn'); ?>">
								<i class="fas fa-shopping-cart"></i>Sarana/ Pra Sarana</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuevimi_dsn'); ?>">
								<i class="fas fa-thumbs-up"></i>Visi Misi</a>
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
								<i class="fas fa-graduation-cap"></i>Pembelajaran Daring</a>
						</li>
						<li class="hs-sub">
							<a class="js-arrow" href="<?= base_url('user/kuelp2m_dsn'); ?>">
								<i class="fas fa-copy"></i>Pelayanan LP2M</a>
						</li>
						<li class="hs-sub">
							<a class="js-arrow" href="<?= base_url('user/kuefkl_dsn'); ?>">
								<i class="fas fa-university"></i>Pelayanan Fakultas</a>
						</li>
						<li class="active">
							<a class="js-arrow" href="<?= base_url('user/kuebku_dsn'); ?>">
								<i class="fas fa-shopping-cart"></i>Sarana/ Pra Sarana</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuevimi_dsn'); ?>">
								<i class="fas fa-thumbs-up"></i>Visi Misi</a>
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
								</div>
								<div class="account-wrap">
									<div class="account-item clearfix js-item-menu">
										<div class="image">
											<img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/user1.png"
												alt="John Doe" />
										</div>
										<div class="content">
											<a class="js-acc-btn" href="#"><?= $this->session->userdata('nip'); ?></a>
										</div>
										<div class="account-dropdown js-dropdown">
											<div class="info clearfix">
												<div class="image">
													<a href="#">
														<img src="<?= base_url('assets/'); ?>vendor/theme/images/icon/user1.png"
															alt="John Doe" />
													</a>
												</div>
												<div class="content">
													<h5 class="name">
														<a href="#"><?= $this->session->userdata('nama_dsn'); ?></a>
													</h5>
													<span class="email">Dosen</span>
												</div>
											</div>
											<div class="account-dropdown__footer">
												<a href="<?= base_url('auth/logout_dsn'); ?>">
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
										<strong class="card-title">Kuesioner Pelayanan Sarana/ Pra Sarana Umum</strong>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<div class="card-body">
										<div class="typo-headers">
											<h1 class="pb-2 display-5" style="font-size: 25px;">KUESIONER KEPUASAN
												PENGGUNA LAYANAN BIDANG KEUANGAN DAN SARANA-PRASARANA DI ITENAS</h1>
										</div>
										<div class="typo-articles">
											<p>
												<!-- Kuesioner ini menanyakan pendapat anda mengenai pelayanan fakultas
												terhadap tenaga pendidik. Pengumpulan data menggunakan kuesioner ini
												bertujuan mengukur keefektifan pelayanan fakultas yang telah dilakukan.
												Berikan tanggapan berdasarkan pendapat sendiri dan bukan
												pandangan/pendapat orang lain. -->
												<p></p>
												<br>Pertanyaan untuk Dosen dan Tenaga Kependidikan</br>
											</p>
										</div>
									</div>
									<div class="card-body card-block">
										<?= form_open('user/kuebku_dsn'); ?>
										<input type="hidden" name="id_dsn"
											value="<?= $this->session->userdata('nip') ?>" />
										<div class="row form-group">
											<div class="col col-md-3">
												<label class=" form-control-label"
													style="color:green; font-weight:bold">Petunjuk Pengisian</label>
											</div>
											<div class="col-12 col-md-9">
												<p class="form-control-static" style="color:green">Kuesioner ini terdiri
													dari 12 butir pertanyaan dengan bentuk jawaban pilihan ganda yang
													terdiri dari 4 (empat) pilihan jawaban. Anda dapat memilih satu
													pilihan sesuai pendapat pribadi.</p>
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
											</div>
											<div class="col-12 col-md-9">
												<div class="form-check">
													<div class="radio">
														<label for="radio1" class="form-check-label "
															style="color:green">
															<input type="radio" id="radio1" name="radios"
																value="option1" class="form-check-input" disabled>Kurang
															(Tidak Puas)
														</label>
													</div>
													<div class="radio">
														<label for="radio2" class="form-check-label "
															style="color:green">
															<input type="radio" id="radio2" name="radios"
																value="option2" class="form-check-input" disabled>Cukup
															(Kurang Puas)
														</label>
													</div>
													<div class="radio">
														<label for="radio3" class="form-check-label "
															style="color:green">
															<input type="radio" id="radio3" name="radios"
																value="option3" class="form-check-input" checked
																disabled>Baik (Puas)
														</label>
													</div>
													<div class="radio">
														<label for="radio3" class="form-check-label "
															style="color:green">
															<input type="radio" id="radio4" name="radios"
																value="option4" class="form-check-input" disabled>Sangat
															Baik (Sangat Puas)
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
										$no_set1 = 1;
										$no_set2 = 1;
										$no_set3 = 1;
										$no_set4 = 1;
										$no_error = 1;
										$name = 'jwb_';
										foreach ($pertanyaan_sarpras as $prt) : ?>
										<div class="form-group row">
											<div class="col col-md-3">
												<label class="form-control-label" style="font-weight:bold">Pertanyaan
													<?= $no++ ?></label>
											</div>
											<div class="col-12 col-md-9">
												<p class="form-control-static" aria-label="Disabled input example">
													<?= $prt['pertanyaan']; ?></p>
											</div>
										</div>
										<div class="row form-group">
											<div class="col col-md-3">
											</div>
											<div class="col-12 col-md-9">
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="<?= $name . $no_radio1++ ?>" id="flexRadioDisabled"
														value="1" <?php if (set_value($name . $no_set1++) == "1") : ?>
														checked <?php endif; ?>>
													<label class="form-check-label" for="flexRadioDisabled">
														Sangat Tidak Puas
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="<?= $name . $no_radio2++ ?>" id="flexRadioCheckedDisabled"
														value="2" <?php if (set_value($name . $no_set2++) == "2") : ?>
														checked <?php endif; ?>>
													<label class="form-check-label" for="flexRadioCheckedDisabled">
														Tidak Puas
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="<?= $name . $no_radio3++ ?>" id="flexRadioDisabled"
														value="3" <?php if (set_value($name . $no_set3++) == "3") : ?>
														checked <?php endif; ?>>
													<label class="form-check-label" for="flexRadioDisabled">
														Puas
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="<?= $name . $no_radio4++ ?>" id="flexRadioCheckedDisabled"
														value="4" <?php if (set_value($name . $no_set4++) == "4") : ?>
														checked <?php endif; ?>>
													<label class="form-check-label" for="flexRadioCheckedDisabled">
														Sangat Puas
													</label>
												</div>
												<div>
													<?= form_error(
															$name . $no_error++,
															'<small class="text-danger pl-3">',
															'</small>'
														); ?>
												</div>
											</div>
										</div>
										<?php endforeach; ?>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-success btn-sm">
											<i type="submit" class=""></i>Submit</button>
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
			<script
				src="<?= base_url('assets/'); ?>vendor/theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
			</script>
			<script src="<?= base_url('assets/'); ?>vendor/theme/vendor/counter-up/jquery.waypoints.min.js"></script>
			<script src="<?= base_url('assets/'); ?>vendor/theme/vendor/counter-up/jquery.counterup.min.js">
			</script>
			<script src="<?= base_url('assets/'); ?>vendor/theme/vendor/circle-progress/circle-progress.min.js">
			</script>
			<script src="<?= base_url('assets/'); ?>vendor/theme/vendor/perfect-scrollbar/perfect-scrollbar.js">
			</script>
			<script src="<?= base_url('assets/'); ?>vendor/theme/vendor/chartjs/Chart.bundle.min.js"></script>
			<script src="<?= base_url('assets/'); ?>vendor/theme/vendor/select2/select2.min.js">
			</script>

			<!-- Main JS-->
			<script src="<?= base_url('assets/'); ?>vendor/theme/js/main.js"></script>
</body>

</html>
<!-- end document-->
