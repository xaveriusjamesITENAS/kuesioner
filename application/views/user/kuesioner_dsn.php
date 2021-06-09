<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="title">Kuesioner Dosen</h5>
                </div>
                <div class="card-body ">
                    <h1 class="h3 mb-4 text-gray-800">Instrumen Penilaian Efektivitas Proses Pembelajaran Online</h1>
                    <div class="form-group row">
                        <label for="nama_dsn" class="col-sm-10">Kuesioner ini menanyakan pendapat anda mengenai pembelajaran daring selama semester ini. Pengumpulan data menggunakan kuesioner ini bertujuan mengukur keefektifan kegiatan belajar daring yang telah dilakukan. Berikan tanggapan berdasarkan pendapat sendiri dan bukan pandangan/pendapat orang lain. Kami mengucapkan banyak terima kasih atas partisipasinya dalam pengisian kuesioner ini. </label>
                    </div>

                    <?= $this->session->flashdata('message'); ?>

                    <div class="row">
                        <div class="col-lg-10">
                            <?= form_open('user/kuesioner_dsn'); ?>
                            <div class="form-group row">
                                <label for="id_dsn" class="col-sm-2 col-form-label">NIP Dosen</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id_dsn" name="id_dsn" value="<?= $this->session->userdata('nip'); ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="namamhs" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="passw_dsn" name="passw_dsn" value="<?= $this->session->userdata('nama_dsn'); ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kodemk" class="col-sm-2 col-form-label">Kode Matakuliah</label>
                                <div class="col-sm-10">
                                    <select class="form-control" aria-label=".form-select-sm example" name="kode_mk" id="pilihmatkul">
                                        <option>Pilih Kode Matakuliah</option>
                                        <?php foreach ($matkul as $mtk) { ?>
                                            <option value="<?= $mtk->kode_mk . '-' . $mtk->kelas ?>"><?= $mtk->kode_mk ?> - <?= $mtk->kelas ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="hidden" name="pilihkelas" id="pilihkelas">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="namamk" class="col-sm-2 col-form-label">Nama Matakuliah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namamk" name="namamk" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kelas" name="kelas" value="" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm col-form-label" style="color: red">Petunjuk Pengisian:</label>
                                <div class="col-sm-10">
                                    <label readonly class="form-control-plaintext" style="color: red">Kuesioner ini terdiri dari 12 butir pertanyaan dengan bentuk jawaban pilihan ganda yang terdiri dari 4 (empat) pilihan jawaban. Anda dapat memilih satu pilihan sesuai pendapat pribadi.</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                                        <label class="form-check-label" for="flexRadioDisabled" style="color: red">
                                            Kurang (Tidak Puas)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" disabled>
                                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="color: red">
                                            Cukup (Kurang Puas)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked disabled>
                                        <label class="form-check-label" for="flexRadioDisabled" style="color: red">
                                            Baik (Puas)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" disabled>
                                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="color: red">
                                            Sangat Baik (Sangat Puas)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $no = 1;
                            $no_radio1 = 13;
                            $no_radio2 = 13;
                            $no_radio3 = 13;
                            $no_radio4 = 13;
                            $name = 'jwb';
                            foreach ($pertanyaan as $prt) : ?>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pertanyaan <?= $no++ ?></label>
                                    <div class="col-sm-10">
                                        <!-- <input class="form-control" type="text" placeholder="Pertanyaan 1" aria-label="Disabled input example" disabled readonly> -->
                                        <p class="form-control" aria-label="Disabled input example" readonly><?= $prt['pertanyaan']; ?></p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $name . $no_radio1++ ?>" id="flexRadioDisabled" value="1">
                                            <label class="form-check-label" for="flexRadioDisabled">
                                                Kurang (Tidak Puas)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $name . $no_radio2++ ?>" id="flexRadioCheckedDisabled" value="2">
                                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                Cukup (Kurang Puas)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $name . $no_radio3++ ?>" id="flexRadioDisabled" value="3">
                                            <label class="form-check-label" for="flexRadioDisabled">
                                                Baik (Puas)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?= $name . $no_radio4++ ?>" id="flexRadioCheckedDisabled" value="4">
                                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                Sangat Baik (Sangat Puas)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <div class="form-group row">
                                <label class="col-sm col-form-label">Saran:</label>
                                <div class="col-sm-10">
                                    <label readonly class="form-control-plaintext">Berikan saran anda mengenai kendala utama dalam pembelajaran daring.</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="" name="saran" value="saran"></textarea>
                                </div>
                            </div>


                            <div class="form-group row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // jika user memilih non akademik, kemudian memilih unit
            $(document).on('change', '#pilihmatkul', function(e) {
                e.preventDefault();
                let idmatkul = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('user/getNamaMatkul_dsn'); ?>",
                    type: 'POST',
                    data: {
                        idmatkul: idmatkul,
                    },
                    dataType: 'json',
                    cache: false,
                    success: function(res) {
                        console.log(res)
                        $("#namamk").val(res.nama_mk)
                        $("#kelas").val(res.kelas)
                        $("#pilihkelas").val(res.kelas)
                        // if (res[0].idunit == 21) {
                        //     $("#formpemeriksa").css('display', 'none')
                        // } else {
                        //     $("#pemeriksa").empty()
                        //     $("#formpemeriksa").css('display', 'flex')
                        //     $("#pemeriksa").append(`<option selected value="${res[0].idpegawai}">${res[0].namajabatan} ${res[0].namaunit}</option>`)
                        // }
                    }
                });
            })
        </script>