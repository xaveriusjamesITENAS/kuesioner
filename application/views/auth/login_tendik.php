<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/icons/itenas-w.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style_2.css" />
	<title>Kuesioner Tendik | Institut Teknologi Nasional</title>
</head>

<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form method="post" action="<?= base_url("Auth/index_tendik"); ?>" class="sign-in-form">
					<h1 class="title" style="color: green; font-size:medium">
						<?= $this->session->flashdata('message'); ?></h1>
					<h2 class="title">Login Tendik</h2>
					<h4 style="color: green;"> Silahkan Login menggunakan Username NIP (5 Angka) dan Password 'user'.
					</h4>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" class="form-control form-control-user" id="nip" name="nip"
							placeholder="Username (NIP 5 Angka)" value="<?= set_value('nip'); ?>">
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" class="form-control form-control-user" id="pin" name="pin"
							placeholder="Password ('user')">
					</div>
					<button type="submit" class="btn btn-block login-btn mb-4">Login</button>
				</form>
			</div>
		</div>

		<div class="panels-container">
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
</body>

</html>
