<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/icons/itenas-w.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style_2.css" />
	<title>Kuesioner | Institut Teknologi Nasional</title>
</head>

<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form method="post" action="" class="sign-in-form">
					<h1 class="title" style="color: green; font-size:medium">
						<h6 class="title" align="center" style="font-size: 30px;">Selamat Datang di<br>Sistem Kuesioner
							Umpan Balik terhadap
							Pelayanan Itenas
							</h5>
							<!-- <div class="row">
								<div class="col-sm"> -->
							<a type="submit" class="btn btn-outline-primary"
								style="text-align: center; line-height: 2.75em;"
								href="<?= base_url('auth/index_dsn'); ?>">Dosen</a>
							<a type=" submit" class="btn btn-outline-primary" href="<?= base_url('auth/index_mhs'); ?>"
								style="text-align: center; line-height: 2.75em;">Mahasiswa</a>
							<a type=" submit" class="btn btn-outline-primary"
								href="<?= base_url('auth/index_tendik'); ?>"
								style="text-align: center; line-height: 2.75em;">Tendik</a>
							<!-- <button type="button" class="btn btn-outline-primary">Primary</button>
									<button type="button" class="btn btn-outline-secondary">Secondary</button>
									<button type="button" class="btn btn-outline-success">Success</button> -->
							<!-- <button type="button" class="btn btn-outline-danger">Danger</button>
									<button type="button" class="btn btn-outline-warning">Warning</button>
									<button type="button" class="btn btn-outline-info">Info</button>
									<button type="button" class="btn btn-outline-light">Light</button>
									<button type="button" class="btn btn-outline-dark">Dark</button> -->
							<!-- </div>
							</div> -->

				</form>
			</div>
		</div>

		<div class=" panels-container">
			<div class="panel left-panel">
				<div class="content">
					<img src="<?= base_url('assets/'); ?>img/itenas_edit.png" style="margin-bottom:-40px" class="image"
						alt="" />
				</div>
				<img src="<?= base_url('assets/'); ?>img/mahasiswa.svg" class="image" alt="" />
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/'); ?>js/app_2.js"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
