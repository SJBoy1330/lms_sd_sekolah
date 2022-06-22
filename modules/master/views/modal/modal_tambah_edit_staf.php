<!--begin::Modal content-->
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
        <form id="formTambahEditStaf" action="<?= $url_action ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_gambar">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Foto</span>
                        </label>
                        <div class="col-sm-10 col-12">
                            <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url(<?= site_url('assets/img/no-image.jpg') ?>)">
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

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_username">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">User ID</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-id-badge" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan user ID" value="<?= $staf_data->username ?>" name="username" />
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
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama" value="<?= $staf_data->nama ?>" name="nama" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_nip">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">NIP</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-id-card-clip" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan nip" value="<?= $staf_data->nip ?>" name="nip" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_alamat">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Alamat</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-location-dot" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan alamat" value="<?= $staf_data->alamat ?>" name="alamat" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_telp">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">No. Telp</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-phone" style="font-size: 1.3rem;"></i>
                            </span>
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan nomor telpon" value="<?= $staf_data->telp ?>" name="telp" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_bidang_tugas">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Bidang Tugas</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid load_select" data-control="select2" data-placeholder="Pilih Bidang Tugas" name="bidang_tugas">
                                    <option disabled></option>
                                    <?php foreach ($bidang_tugas as $bt) : ?>
                                        <option value="<?= $bt->id_bidang_tugas ?>" <?= $kelas_data->id_bidang_tugas === $bt->id_bidang_tugas ? 'selected' : '' ?>><?= $bt->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_gender">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Jenis Kelamin</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid load_select" data-control="select2" data-placeholder="Jenis Kelamin" name="gender">
                                    <option disabled></option>
                                    <option value="L" <?= $staf_data->gender === 'L' ? 'selected' : '' ?>>Laki - laki</option>
                                    <option value="P" <?= $staf_data->gender === 'P' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_tipe">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Role</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid load_select" data-control="select2" data-placeholder="Pilih Role" name="tipe">
                                    <option disabled></option>
                                    <option value="1" <?= $staf_data->tipe === '1' ? 'selected' : '' ?>>Admin</option>
                                    <option value="2" <?= $staf_data->tipe === '2' ? 'selected' : '' ?>>Operator</option>
                                    <option value="3" <?= $staf_data->tipe === '3' ? 'selected' : '' ?>>Staf/Guru</option>
                                    <option value="4" <?= $staf_data->tipe === '4' ? 'selected' : '' ?>>Kuangan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_aktif">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Aktif</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <div style="width:100vw;">
                                <select class="form-select form-select-solid load_select" data-control="select2" data-placeholder="Status" name="aktif">
                                    <option disabled></option>
                                    <option value="Y" <?= $staf_data->aktif === 'Y' ? 'selected' : '' ?>>Aktif</option>
                                    <option value="T" <?= $staf_data->aktif === 'T' ? 'selected' : '' ?>>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_password">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Kata Sandi</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                            </span>
                            <input type="password" class="form-control form-control-solid ps-12" placeholder="Masukkan kata sandi" name="password" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column mb-8 fv-row" id="req_password_ulang">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Konfirmasi Kata Sandi</span>
                        </label>
                        <div class="position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                            </span>
                            <input type="password" class="form-control form-control-solid ps-12" placeholder="Konfirmasi kata sandi" name="password_ulang" />
                        </div>
                    </div>
                </div>
        </form>
        <div class="row mb-4">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="submit_form(this, '#formTambahEditStaf')" id="btn_submitTambahEditStaf">
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
</div>
<!--end::Modal body-->
</div>
<!--end::Modal content-->
<script>
    $('.load_select').select2({
        dropdownParent: $('#parent_drop_select')
    });
</script>