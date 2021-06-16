<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Data Dosen</h5>



                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="card-body">

                    <!-- <form> -->

                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <?= form_open_multipart('user/data_dosen'); ?>
                            <div class="form-group">
                                <label>NIK (No.KTP)</label>
                                <input type="text" class="form-control" placeholder="NIK (No.KTP)" name="nik_dsn" value="">
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
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_dsn" value="">
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
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" placeholder="Tgl.Lahir" id="tgllahir_dsn" name="tgllahir_dsn" value="">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="text" class="form-control" placeholder="Umur" id="umur_dsn" name="umur_dsn" value="">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="col-sm">
                                <div class="form-group row">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" aria-label=".form-select-sm example" name="jkmhs">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option value="L" <?php if ($user['jkdsn'] === 'L') : ?> selected <?php endif; ?>>Laki-laki</option>
                                        <option value="P" <?php if ($user['jkdsn'] === 'P') : ?> selected <?php endif; ?>>Perempuan</option>
                                    </select>
                                </div>
                                <!-- <input type="text" class="form-control" placeholder="L/P" value=""> -->
                            </div>
                        </div>

                        <!-- <div class="row"> -->
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Instansi</label>
                                <input type="text" class="form-control" placeholder="Instansi" id="instansi_dsn" name="instansi_dsn" value="">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Jenis Pekerjaan</label>
                                <input type="text" class="form-control" placeholder="Jenis Pekerjaan" id="pekerjaan_dsn" name="pekerjaan_dsn" value="">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>No. Handphone</label>
                                <input type="text" class="form-control" placeholder="No.Handphone" id="nohp_dsn" name="nohp_dsn" value="">
                            </div>
                        </div>

                        <!-- <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" id="birthday" name="birthday"></input> -->
                        <!-- <input type="submit" value="Submit"> -->
                        <!-- </div>
            </div> -->
                        <!-- <div class="col-md-4 px-1">
              <div class="col-sm"> -->
                        <!-- <div class="form-group row">
                  <label>Umur</label>
                  <input class="form-control" aria-label=".form-select-sm example" name="jkmhs">
                  </input>
                </div> -->
                        <!-- <input type="text" class="form-control" placeholder="L/P" value=""> -->
                        <!-- </div>
            </div> -->

                        <!-- <div class="row"> -->
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Alamat sesuai KTP</label>
                                <textarea rows="4" cols="80" class="form-control" id=alamatktp placeholder="Masukkan alamat anda sesuai KTP" name="alamatktp" value=""></textarea>
                            </div>
                        </div>
                        <!-- </div> -->
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
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <!-- <img src="<?= base_url('assets/'); ?>img/img-01.jpg" alt="..."> -->
                </div>
                <div class="card-body" style="min-height: 20px;">
                    <div class="author">
                        <a>
                            <img class="avatar border-gray" src="<?= base_url('assets/'); ?>img/mom.png" alt="...">
                            <h5 class="title">Dosen</h5>
                        </a>
                        <!-- <p class="description">
              <?= $user['nrpmhs'] ?>
            </p> -->
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