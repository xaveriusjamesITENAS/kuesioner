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
          <!-- <li method="post" action="<?= base_url("User"); ?>" class="active">
                        <a href="<?= base_url('user/edit'); ?>">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Profil Mahasiswa</p>
                        </a>
                    </li> -->
          <li method="post" action="<?= base_url("User"); ?>" class="active">
            <a href="<?= base_url('user/kuesioner_dsn'); ?>">
              <i class="now-ui-icons education_paper"></i>
              <p>Kuesioner</p>
            </a>
          </li>
          <!-- <li>
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