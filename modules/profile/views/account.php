<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Navbar-->
            <div class="card" style="border-radius: 20px 20px 0px 0px">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                        <!--begin::Nav item-->
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?= base_url('profile');?>">Detail Profil</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?= base_url('profile/ubah_password');?>">Ubah Kata Sandi</a>
                        </li>
                    </ul>
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view" style="border-radius: 00px 00px 20px 20px">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Detail Profil</h3>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Action-->
                    <a data-bs-toggle="modal" data-bs-target="#modalEditProfil" class="btn btn-primary align-self-center">Edit Profil</a>
                    <!--end::Action-->
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="me-7 mb-4 d-flex justify-content-center align-items-center flex-column">
                                    <!-- <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="<?= base_url();?>assets/media/avatars/150-26.jpg" alt="image" class="rounded-circle" />
                                    </div> -->

                                    <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url(<?= site_url('assets/media/avatars/150-26.jpg') ?>)">
                                        <!--begin::Image preview wrapper-->
                                        <div class="image-input-wrapper w-175px h-175px rounded-2" style="background-image: url(<?= site_url('assets/media/avatars/150-26.jpg') ?>)"></div>
                                        <!--end::Image preview wrapper-->

                                        <!--begin::Edit button-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Tambah Gambar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="gambar" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="foto_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit button-->

                                        <!--begin::Cancel button-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Batal">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel button-->
                                    </div>

                                    <span class="text-gray-900  fs-2 fw-bolder mt-3">Max Smith</span>
                                    <span class="text-gray-500 text-hover-primary fs-5 fw-bolder">Admin Sidoarjo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row p-5 detail-profil">
                                <label class="col-lg-4 fw-bold text-muted">Username</label>
                                <label class="col-lg-2 fw-bold text-muted">:</label>
                                <div class="col-lg-6">
                                    <span class="fw-bolder fs-6 text-gray-800">Max Smith</span>
                                </div>
                            </div>
                            <div class="row p-5 detail-profil2">
                                <label class="col-lg-4 fw-bold text-muted">Nama</label>
                                <label class="col-lg-2 fw-bold text-muted">:</label>
                                <div class="col-lg-6">
                                    <span class="fw-bolder fs-6 text-gray-800">Admin Sidoarjo</span>
                                </div>
                            </div>
                            <div class="row p-5 detail-profil">
                                <label class="col-lg-4 fw-bold text-muted">Alamat</label>
                                <label class="col-lg-2 fw-bold text-muted">:</label>
                                <div class="col-lg-6">
                                    <span class="fw-bolder fs-6 text-gray-800">Pakuwon City, Kejawaan Putih Tamba, Kota Surabaya, Jawa Timur</span>
                                </div>
                            </div>
                            <div class="row p-5 detail-profil2">
                                <label class="col-lg-4 fw-bold text-muted">Telepon</label>
                                <label class="col-lg-2 fw-bold text-muted">:</label>
                                <div class="col-lg-6">
                                    <span class="fw-bolder fs-6 text-gray-800">08123456789</span>
                                </div>
                            </div>
                            <div class="row p-5 detail-profil">
                                <label class="col-lg-4 fw-bold text-muted">Email</label>
                                <label class="col-lg-2 fw-bold text-muted">:</label>
                                <div class="col-lg-6">
                                    <span class="fw-bolder fs-6 text-gray-800">email@gmail.com</span>
                                </div>
                            </div>
                            <div class="row p-5 detail-profil2">
                                <label class="col-lg-4 fw-bold text-muted">Jenis Kelamin</label>
                                <label class="col-lg-2 fw-bold text-muted">:</label>
                                <div class="col-lg-6">
                                    <span class="fw-bolder fs-6 text-gray-800">Laki-Laki</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end::Card body-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

<div class="modal fade" id="modalEditProfil" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Edit Profil</h2>
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
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Username</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-file-user" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-user" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Alamat</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-location-dot" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Telepon</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-phone" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Email</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-envelope" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jenis Kelamin</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Jenis Kelamin">
                                    <option></option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">
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
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>