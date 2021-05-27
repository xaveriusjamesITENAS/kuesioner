<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/icons/itenas-w.png" />
  <!-- <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Profil Mahasiswa
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url('assets/'); ?>css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('assets/'); ?>demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <div class="brand-wrapper">
          <img src="<?= base_url('assets/'); ?>img/logo_itenas.png" alt="logo" class="logo">
        </div>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <!-- <li>
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li> -->
          <li method="post" action="<?= base_url("User"); ?>" class="active ">
            <a href="<?= base_url('user/edit'); ?>">
              <i class="now-ui-icons users_single-02"></i>
              <p>Profil Mahasiswa</p>
            </a>
          </li>
          <!-- <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li> -->
          <li method="post" action="<?= base_url("User"); ?>" class="active-pro">
            <a href="<?= base_url('auth'); ?>" data-toggle="modal" data-target="#logoutModal">
              <i class="now-ui-icons sport_user-run"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Profil Mahasiswa</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <!-- <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div> -->
            </form>
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?= base_url('auth'); ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
                  <!-- <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profil</h5>



              </div>
              <?= $this->session->flashdata('message'); ?>
              <div class="card-body">

                <!-- <form> -->

                <div class="row">
                  <div class="col-md-4 pr-1">
                    <?= form_open_multipart('user/edit'); ?>
                    <div class="form-group">
                      <label>NRP Mahasiswa</label>
                      <input type="text" class="form-control" readonly placeholder="NRP" name="nrpmhs" value="<?= $this->session->userdata('nrp'); ?>">
                    </div>
                  </div>
                  <!-- <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" readonly placeholder="Username" value="Nama Lengkap">
                      </div>
                    </div> -->
                  <div class="col-md-8 pl-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input type="email" class="form-control" readonly placeholder="Nama Lengkap" name="namamhs" value="<?= $this->session->userdata('nama'); ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pl-1">
                    <!-- <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                      </div> -->
                  </div>
                </div>
                <div class="row">
                  <!-- <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>NIK (No.KTP)</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                      </div>
                    </div> -->
                </div>
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label>NIK (No.KTP)</label>
                      <input type="text" class="form-control" placeholder="NIK (No.KTP)" id="noktpmhs" name="noktpmhs" value="<?= $user['noktpmhs'] ?>"><?= form_error('noktpmhs', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 px-1">
                    <div class="col-sm">
                      <div class="form-group row">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" aria-label=".form-select-sm example" name="jkmhs">
                          <option>Pilih Jenis Kelamin</option>
                          <option value="L" <?php if ($user['jkmhs'] === 'L') : ?> selected <?php endif; ?>>Laki-laki</option>
                          <option value="P" <?php if ($user['jkmhs'] === 'P') : ?> selected <?php endif; ?>>Perempuan</option>
                        </select>
                      </div>
                      <!-- <input type="text" class="form-control" placeholder="L/P" value=""> -->
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label>No. Handphone</label>
                      <input type="text" class="form-control" placeholder="08xxx" id="nohpmhs" name="nohpmhs" value="<?= $user['nohpmhs'] ?>"><?= form_error('nohpmhs', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">

              <!-- <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                      </div>
                    </div> -->
              <div class="col-md-4 pr-1">
                <div class="form-group">

                  <button type="submit" class="btn btn-primary">Simpan Edit Profil</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <!-- <img src="<?= base_url('assets/'); ?>img/img-01.jpg" alt="..."> -->
              </div>
              <div class="card-body">
                <div class="author">
                  <a>
                    <img class="avatar border-gray" src="<?= base_url('assets/'); ?>img/default.png" alt="...">
                    <h5 class="title"><?= $user['namamhs'] ?></h5>
                  </a>
                  <p class="description">
                    <?= $user['nrpmhs'] ?>
                  </p>
                </div>
                <!-- <p class="description text-center">
                  "Lamborghini Mercy <br>
                  Your chick she so thirsty <br>
                  I'm in that two seat Lambo"
                </p> -->
              </div>
              <!-- <hr> -->
              <div class="button-container">
                <!-- <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.itenas.ac.id">
                  Institut Teknologi Nasional, Bandung
                </a>
              </li>
              <!-- <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li> -->
            </ul>
          </nav>
          <!-- <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">UPT-TIK Itenas</a>.
          </div> -->
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(<?= date('Y'); ?>))
            </script>, <a href="https://tik.itenas.ac.id" target="_blank">UPT-TIK Itenas</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" jika anda yakin akan keluar dari sesi ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/'); ?>js/core/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url('assets/'); ?>js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url('assets/'); ?>js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/'); ?>js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url('assets/'); ?>demo/demo.js"></script>
</body>

</html>