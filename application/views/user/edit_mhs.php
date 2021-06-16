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
              <?= form_open_multipart('user/edit_mhs'); ?>
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