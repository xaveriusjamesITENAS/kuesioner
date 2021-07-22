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
        <form method="post" action="<?= base_url("Auth/index_dsn"); ?>" class="sign-in-form">
          <h2 class="title">Login Karyawan</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="Username" value="<?= set_value('nip'); ?>">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" class="form-control form-control-user" id="pin" name="pin" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-block login-btn mb-4">Login</button>
        </form>
        <form method="post" action="<?= base_url("Auth/index_mhs"); ?>" class="sign-up-form">
          <h2 class="title">Login Mahasiswa</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control form-control-user" id="nrp" name="nrp" placeholder="Username" value="<?= set_value('nrp'); ?>">
            <?= form_error('nrp', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" class="form-control form-control-user" id="pin" name="pin" placeholder="Password">
            <?= form_error('pin', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <button type="submit" class="btn btn-block login-btn mb-4">Login</button>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Bukan Karyawan ?</h3>
          <p>
            Jika Anda bukan Karyawan, silahkan Login sebagai Mahasiswa
          </p>
          <button type="submit" class="btn transparent" id="sign-up-btn">Mahasiswa</button>
        </div>
        <img src="<?= base_url('assets/'); ?>img/mahasiswa.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Bukan Mahasiswa ?</h3>
          <p>
            Jika Anda bukan Mahasiswa, silahkan Login sebagai Karyawan
          </p>
          <button type="submit" class="btn transparent" id="sign-in-btn">karyawan</button>
        </div>
        <img src="<?= base_url('assets/'); ?>img/karyawan.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="<?= base_url('assets/'); ?>js/app_2.js"></script>
</body>

</html>