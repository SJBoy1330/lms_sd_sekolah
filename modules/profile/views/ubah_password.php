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
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?= base_url('profile'); ?>">Detail Profil</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?= base_url('profile/ubah_password'); ?>">Ubah Kata Sandi</a>
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
                        <h3 class="fw-bolder m-0">Ubah Kata Sandi</h3>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Action-->
                    <a class="btn btn-primary align-self-center" onclick="submit_form(this, '#formEditPassword', 0)" id="btn_submitFormEditPassword">Simpan</a>
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
                                        <img src="<?= $data_profile->foto ?>" alt="image" />
                                    </div>
                                    <span class="text-gray-900  fs-2 fw-bolder mt-3"><?= $data_profile->nama ?></span>
                                    <span class="text-gray-500 text-hover-primary fs-5 fw-bolder"><?= $data_profile->nama_bidang ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <form action="<?= base_url('func_profile/ubah_password') ?>" method="post" id="formEditPassword">
                                <div class="row p-5 detail-profil">
                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row" id="req_password_lama">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required" for="password_lama">Kata Sandi Siswa</span>
                                            </label>
                                            <div class="input-group input-group-solid">
                                                <input type="password" class="form-control form-control-solid" name="password_lama" id="password_lama" placeholder="Masukkan kata sandi lama" autocomplete="off">
                                                <div class="input-group-append show-hide">
                                                    <span class="input-group-text">
                                                        <i class="fa-duotone fa-eye" id="toggle1" onclick="password_show_hide(this,'#password_lama')" style="cursor: pointer; font-size: 1.2rem;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row" id="req_password_baru">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required" for="password_baru">Kata Sandi Baru</span>
                                            </label>
                                            <div class="input-group input-group-solid">
                                                <input type="password" class="form-control form-control-solid" name="password_baru" id="password_baru" placeholder="Masukkan kata sandi baru" autocomplete="off">
                                                <div class="input-group-append show-hide">
                                                    <span class="input-group-text">
                                                        <i class="fa-duotone fa-eye" id="toggle2" onclick="password_show_hide(this,'#password_baru')" style="cursor: pointer; font-size: 1.2rem;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row" id="req_konfirmasi_password">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required" for="konfirmasi_password">Ulangi Kata Sandi</span>
                                            </label>
                                            <div class="input-group input-group-solid">
                                                <input type="password" class="form-control form-control-solid" name="konfirmasi_password" id="konfirmasi_password" placeholder="Konfirmasi kata sandi" autocomplete="off">
                                                <div class="input-group-append show-hide">
                                                    <span class="input-group-text">
                                                        <i class="fa-duotone fa-eye" id="toggle3" onclick="password_show_hide(this,'#konfirmasi_password')" style="cursor: pointer; font-size: 1.2rem;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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