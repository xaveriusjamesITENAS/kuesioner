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
	<title>Kuesioner Mahasiswa | Institut Teknologi Nasional</title>

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
						<li class="has-sub">
							<a href="<?= base_url('user/editprofil_mhs_s2sipil'); ?>">
								<i class="far fa-id-card"></i></i>Profil Mahasiswa</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuesioner_mhs_s2sipil_ganjil'); ?>">
								<i class="far fa-file-alt"></i></i>Kuesioner (Ganjil)</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuebku_mhs_s2sipil_ganjil'); ?>">
								<i class="fas fa-shopping-cart"></i>Sarana/ Pra Sarana (Ganjil)</a>
						</li>
						<li class="active">
							<a class="js-arrow" href="<?= base_url('user/kuevimi_mhs_s2sipil_ganjil'); ?>">
								<i class="fas fa-thumbs-up"></i>Visi Misi (Ganjil)</a>
						</li>
					</ul>
				</div>
			</nav>
			<nav class="navbar-mobile">
				<div class="container-fluid">
					<ul class="navbar-mobile__list list-unstyled">
						<li class="has-sub">
							<a href="<?= base_url('user/kuesioner_mhs_s2sipil_genap'); ?>">
								<i class="far fa-file-alt"></i>Kuesioner (Genap)</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuebku_mhs_s2sipil_genap'); ?>">
								<i class="fas fa-copy"></i>Sarana/ Pra Sarana (Genap)</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuevimi_mhs_s2sipil_genap'); ?>">
								<i class="fas fa-thumbs-up"></i>Visi Misi (Genap)</a>
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
						<li class="has-sub">
							<a href="<?= base_url('user/editprofil_mhs_s2sipil'); ?>">
								<i class="far fa-id-card"></i></i>Profil Mahasiswa</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuesioner_mhs_s2sipil_ganjil'); ?>">
								<i class="far fa-file-alt"></i></i>Kuesioner (Ganjil)</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuebku_mhs_s2sipil_ganjil'); ?>">
								<i class="fas fa-shopping-cart"></i>Sarana/ Pra Sarana (Ganjil)</a>
						</li>
						<li class="active">
							<a class="js-arrow" href="<?= base_url('user/kuevimi_mhs_s2sipil_ganjil'); ?>">
								<i class="fas fa-thumbs-up"></i>Visi Misi (Ganjil)</a>
						</li>
					</ul>
				</nav>
				<nav class="navbar-sidebar">
					<ul class="list-unstyled navbar__list">
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuesioner_mhs_s2sipil_genap'); ?>">
								<i class="far fa-file-alt"></i></i>Kuesioner (Genap)</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuebku_mhs_s2sipil_genap'); ?>">
								<i class="fas fa-shopping-cart"></i>Sarana/ Pra Sarana (Genap)</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="<?= base_url('user/kuevimi_mhs_s2sipil_genap'); ?>">
								<i class="fas fa-thumbs-up"></i>Visi Misi (Genap)</a>
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
											<a class="js-acc-btn" href="#"><?= $this->session->userdata('nrp'); ?></a>
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
			<!-- END HEADER DESKTOP-->

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<strong class="card-title">Kuesioner Pemahaman Visi, Misi, dan Tujuan
											Itenas</strong>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<div class="card-body">
										<div class="typo-headers">
											<h1 class="pb-2 display-5" style="font-size: 25px;">Kuesioner Pemahaman
												Visi, Misi, dan Tujuan Itenas</h1>
										</div>
										<div class="typo-articles">
											<p>
												<!-- Kuesioner ini menanyakan pendapat anda mengenai pelayanan fakultas
												terhadap tenaga pendidik. Pengumpulan data menggunakan kuesioner ini
												bertujuan mengukur keefektifan pelayanan fakultas yang telah dilakukan.
												Berikan tanggapan berdasarkan pendapat sendiri dan bukan
												pandangan/pendapat orang lain. -->
												<p></p>
												<br>Pertanyaan untuk Mahasiswa, Dosen dan Tenaga Kependidikan</br>
											</p>
										</div>
									</div>
									<div class="card-body card-block">
										<?= form_open('user/kuevimi_mhs_s2sipil_ganjil'); ?>
										<input type="hidden" class="form-control" readonly placeholder="NRP"
											name="nrpmhs" value="<?= $this->session->userdata('nrp'); ?>">

										<?php
										$no = 1;
										foreach ($pertanyaan_visimisi as $prt) : ?>
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
												<?php
													$jawaban = $this->db->select('*')
														->from('jawaban_visimisi')
														->where('jawaban_visimisi.id_pertanyaan', $prt['id'])
														->get()->result_array();

													foreach ($jawaban as $key => $jwb) :
													?>
												<?php if ($jwb['id_pertanyaan'] == 3) : ?>
												<div class="form-check">
													<input class="form-check-input" type="checkbox"
														value="<?= $jwb['id'] ?>" name="3[]" id="defaultCheck1">
													<label class="form-check-label" for="defaultCheck1">
														<?= $jwb['jawaban'] ?>
													</label>
												</div>
												<?php elseif ($jwb['id_pertanyaan'] == 8) : ?>
												<textarea name="8" id="textarea-input" rows="9"
													placeholder="Mohon tuliskan saran terkait Visi, Misi, Tujuan Itenas:"
													class="form-control"></textarea>
												<?php else : ?>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="<?= $prt['id'] ?>" id="flexRadioDisabled"
														value="<?= $jwb['id'] ?>">
													<label class="form-check-label" for="flexRadioDisabled">
														<?= $jwb['jawaban'] ?>
													</label>
												</div>
												<?php endif; ?>
												<?php endforeach; ?>
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
