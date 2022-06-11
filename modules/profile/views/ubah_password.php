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
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?= base_url('profile');?>">Detail Profil</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?= base_url('profile/ubah_password');?>">Ubah Kata Sandi</a>
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
                        <h3 class="fw-bolder m-0">Ubah Password</h3>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Action-->
                    <a data-bs-toggle="modal" data-bs-target="#modalEditProfil" class="btn btn-primary align-self-center">Simpan</a>
                    <!--end::Action-->
                </div>
                <!--begin::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="me-7 mb-4 d-flex justify-content-center align-items-center flex-column">
                                    <div class="symbol symbol-100px symbol-lg-175px symbol-fixed position-relative">
                                        <img src="<?= base_url();?>assets/media/avatars/150-26.jpg" alt="image" />
                                    </div>
                                    <span class="text-gray-900  fs-2 fw-bolder mt-3">Max Smith</span>
                                    <span class="text-gray-500 text-hover-primary fs-5 fw-bolder">Admin Sidoarjo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row p-5 detail-profil">
                                <div class="col-12">
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Kata Sandi Lama</span>
                                        </label>
                                        <div class="position-relative d-flex align-items-center">
                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                <i class="fa-duotone fa-lock-keyhole" style="font-size: 1.3rem;"></i>
                                            </span>
                                            <input type="password" class="form-control form-control-solid ps-12" placeholder="Masukkan kata sandi lama"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Kata Sandi Baru</span>
                                        </label>
                                        <div class="position-relative d-flex align-items-center">
                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                <i class="fa-duotone fa-lock-keyhole" style="font-size: 1.3rem;"></i>
                                            </span>
                                            <input type="password" class="form-control form-control-solid ps-12" placeholder="Masukkan kata sandi baru"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Ulangi Kata Sandi</span>
                                        </label>
                                        <div class="position-relative d-flex align-items-center">
                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                <i class="fa-duotone fa-lock-keyhole" style="font-size: 1.3rem;"></i>
                                            </span>
                                            <input type="password" class="form-control form-control-solid ps-12" placeholder="Konfirmasi kata sandi"/>
                                        </div>
                                    </div>
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
