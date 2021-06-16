<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/icons/itenas-w.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Dosen Itenas</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/login.css">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= base_url('assets/'); ?>img/login.png" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?= base_url('assets/'); ?>img/logo.png" alt="logo" class="logo">
              </div>

              <p class="login-card-description">Login Dosen Itenas</p>
              <?= $this->session->flashdata('message'); ?>
              <form method="post" action="<?= base_url("Auth/index_dsn"); ?>" class="user">
                <div class="form-group">
                  <label for="email" class="sr-only">NIP</label>
                  <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="Masukkan NIP" value="<?= set_value('nip'); ?>">
                  <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" class="form-control form-control-user" id="pin" name="pin" placeholder="Masukkan Password">
                  <?= form_error('pin', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-block login-btn mb-4">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>