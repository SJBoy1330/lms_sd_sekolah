<style>
    .show-hide {
        background: transparent !important;
        border: 0;
        position: relative;
        z-index: 2;
        top: 50%;
        right: 0px;
        padding: 5px 10px;
        line-height: 26px;
    }
</style>
<div class="modal-content" id="parent_drop_select">
    <!--begin::Modal header-->
    <div class="modal-header">
        <!--begin::Modal title-->
        <h2 class="fw-bolder"><?= $modal_title ?></h2>
        <!--end::Modal title-->
        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close" type="button">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
            <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Close-->
    </div>
    <!--end::Modal header-->
    <!--begin::Modal body-->
    <div class="modal-body scroll-y mx-10 my-2">
        <form id="formTambahEditSiswa" action="<?= $url_action ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Foto Siswa</span>
                        </label>
                        <div class="col-sm-10 col-12">
                            <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url(<?= ('assets/img/no-image.jpg') ?>)">
                                <?php if (isset($staf_data->foto)) : ?>
                                    <img class="image-input-wrapper w-125px h-125px" src="<?= $staf_data->foto; ?>" alt="" id="photouser">
                                <?php else : ?>
                                    <img class="image-input-wrapper w-125px h-125px" src="<?= site_url('assets/img/no-image.jpg') ?>" alt="" id="photouser">

                                <?php endif; ?>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input id="photo" name="gambar" type="file" accept=".png, .jpg, .jpeg" onchange="previewImage()" />
                                    <input type="hidden" name="foto_remove">
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Batal">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_idkelas">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kelas</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid select2_load" data-control="select2" data-placeholder="Pilih" name="idkelas">
                                    <option></option>
                                    <?php foreach ($kelas as $k) : ?>
                                        <option value="<?= $k->id_kelas ?>"><?= $k->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_agama">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Agama</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid select2_load" data-control="select2" data-placeholder="Pilih Agama" name="agama">
                                    <option></option>
                                    <option value="1">Islam</option>
                                    <option value="2">Kristen</option>
                                    <option value="3">Katholik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Budha</option>
                                    <option value="6">Kong Hu Chu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_gender">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Jenis Kelamin</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid select2_load" data-control="select2" data-placeholder="Pilih Jenis Kelamin" name="gender">
                                    <option></option>
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_status_aktif">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Aktif</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid select2_load" data-control="select2" data-placeholder="Pilih Status" name="status_aktif">
                                    <option></option>
                                    <option value="Y">Aktif</option>
                                    <option value="T">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xl-12 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_idwali">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Orang Tua</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid select2_load" data-control="select2" data-placeholder="Pilih Orang Tua" name="idwali">
                                    <option></option>
                                    <?php foreach ($wali as $w) : ?>
                                        <option value="<?= $w->id_wali ?>"><?= $w->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_username">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Username</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-id-card" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan username" name="username" />
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_nama">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-id-card" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama" name="nama" />
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_nis">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">NIS</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-id-card-clip" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan nis" name="nis" />
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Alamat</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-location-dot" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan alamat" name="alamat" />
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>Email</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-envelope" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan email" name="email" />
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>No. Telepon</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute p-4 fw-bold telepon-input">
                                <i class="fa-duotone fa-phone" style="font-size: 1.3rem;"></i> +62
                            </span>
                            <input class="form-control form-control-solid ps-25" placeholder="Masukkan nomor telepon" name="telp" />
                        </div>
                    </div>
                </div>

                <!-- <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_sandi">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kata Sandi Siswa</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan kata sandi" name="sandi" />
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_sandi_ulang">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Konfirmasi Kata Sandi Siswa</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Konfirmasi kata sandi" name="sandi_ulang" />
                        </div>
                    </div>
                </div> -->

                <div class="col-12">
                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-4">
                        <input class="form-check-input" type="checkbox" onchange="password(this)">
                        <label class="form-check-label">Defaultkan kata sandi (12345)</label>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_sandi">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required" for="password_siswa">Kata Sandi Siswa</span>
                        </label>
                        <!-- <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" type="password" id="inputan" placeholder="Masukkan kata sandi" name="sandi" />
                            </div> -->
                        <div class="input-group input-group-solid">
                            <input type="password" class="form-control form-control-solid" name="sandi" id="password_siswa" placeholder="Password" autocomplete="off">
                            <div class="input-group-append show-hide">
                                <span class="input-group-text">
                                    <i class="fa-duotone fa-eye" id="toggle1" onclick="password_show_hide(this,'#password_siswa')" style="cursor: pointer; font-size: 1.2rem;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_sandi_ulang">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Konfirmasi Kata Sandi Siswa</span>
                        </label>
                        <!-- <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" type="password" id="inputan2" placeholder="Konfirmasi kata sandi" name="sandi_ulang" />
                            </div> -->
                        <div class="input-group input-group-solid">
                            <input type="password" class="form-control form-control-solid" name="sandi_ulang" id="konfirmasi_password_siswa" placeholder="Password" autocomplete="off">
                            <div class="input-group-append show-hide">
                                <span class="input-group-text">
                                    <i class="fa-duotone fa-eye" id="toggle2" onclick="password_show_hide(this,'#konfirmasi_password_siswa')" style="cursor: pointer; font-size: 1.2rem;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_idwali">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Orang Tua</span>
                        </label>
                        <label class="fs-7 fw-medium text-dark mb-2">Apakah orang tua atau wali sudah terdaftar?</label>
                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-4">
                            <input class="form-check-input" type="checkbox" onchange="ganti(this)">
                            <label class="form-check-label">Tidak / Ada</label>
                        </div>

                        <!-- DIV YANG AKTIF -->
                        <div id="target_div_1" class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Username</span>
                                    </label>
                                    <div class="position-relative d-flex align-items-center">
                                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                            <i class="fa-duotone fa-id-card" style="font-size: 1.3rem;"></i>
                                        </span>
                                        <input class="form-control form-control-solid ps-12" placeholder="Masukkan username" />
                                    </div>
                                </div>

                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Nama</span>
                                    </label>
                                    <div class="position-relative d-flex align-items-center">
                                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                            <i class="fa-duotone fa-id-card" style="font-size: 1.3rem;"></i>
                                        </span>
                                        <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama" />
                                    </div>
                                </div>

                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span>No. Telp</span>
                                    </label>
                                    <div class="position-relative d-flex align-items-center">
                                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                            <i class="fa-duotone fa-phone" style="font-size: 1.3rem;"></i>
                                        </span>
                                        <input class="form-control form-control-solid ps-12" placeholder="Masukkan nomor telpon" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DIV YANG GA AKTIF -->
                        <div id="target_div_2" class="position-relative d-flex align-items-center d-none">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid select2_load" data-control="select2" data-placeholder="Pilih Orang Tua" name="idwali">
                                    <option></option>
                                    <?php foreach ($wali as $w) : ?>
                                        <option value="<?= $w->id_wali ?>"><?= $w->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row mb-4">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="submit_form(this, '#formTambahEditSiswa', 1)" id="btn_submitTambahEditSiswa">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <i class="fa-duotone fa-floppy-disk" style="font-size: 1.3rem;"></i>
                    </span>
                    <!--end::Svg Icon-->Simpan
                </button>
                <!--end::Add user-->
            </div>
        </div>
    </div>
    <!--end::Modal body-->
</div>
<script>
    $('.select2_load').select2({
        dropdownParent: $('#parent_drop_select')
    });
</script>

<script>
    function ganti(element) {
        // DEKLARASI DIV
        // DEKLARASI DI PERLUKAN UNTUK MERUBAH CLASS ATAU STYLE DARI TARGET
        var div1 = document.getElementById('target_div_1');
        var div2 = document.getElementById('target_div_2');
        if ($(element).prop('checked') == true) {
            // MENAMPILKAN DIV
            div2.classList.remove('d-none');
            div1.classList.add('d-none');

        } else {
            // MENAMPILKAN DIV YANG BERBEDA
            div2.classList.add('d-none');
            div1.classList.remove('d-none');
        }
    }

    function password(element) {
        if ($(element).prop('checked') == true) {
            // MERUBAH VALUE INPUTAN
            $('#password_siswa').val('12345');
            $('#konfirmasi_password_siswa').val('12345');

        } else {
            // MERUBAH VALUE INPUTAN MENJADI KOSONG
            $('#password_siswa').val('');
            $('#konfirmasi_password_siswa').val('');
        }
    }
</script>