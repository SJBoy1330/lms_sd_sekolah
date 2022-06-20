<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="card shadow-sm" id="card">
            <div class="card-header pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">Import data master</span>
                </h3>
                <!--end::Title-->
            </div>
            <div class="card-body">

                <ul class="nav nav-pills nav-pills-custom mb-3 mx-9 justify-content-center">
                    <!--begin::Item-->
                    <li class="nav-item mb-3 me-3 me-lg-12">
                        <!--begin::Link-->
                        <a class="nav-link row justify-content-center btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-150px h-125px active" data-bs-toggle="pill" id="kt_charts_widget_10_tab_2" href="#kt_charts_widget_10_tab_content_2">
                            <!--begin::Icon-->
                            <div class="nav-icon mb-5">
                                <i class="fa-duotone fa-chalkboard-user" style="font-size: 1.8rem;"></i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Data Staf</span>
                            <!--end::Title-->
                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-danger"></span>
                            <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mb-3 me-3 me-lg-12">
                        <!--begin::Link-->
                        <a class="nav-link row justify-content-center btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-150px h-125px" data-bs-toggle="pill" id="kt_charts_widget_10_tab_3" href="#kt_charts_widget_10_tab_content_3">
                            <!--begin::Icon-->
                            <div class="nav-icon mb-5">
                                <i class="fa-duotone fa-screen-users" style="font-size: 1.8rem;"></i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Data Kelas</span>
                            <!--end::Title-->
                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-danger"></span>
                            <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="nav-item mb-3 me-3 me-lg-12">
                        <!--begin::Link-->
                        <a class="nav-link row justify-content-center btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-150px h-125px" data-bs-toggle="pill" id="kt_charts_widget_10_tab_4" href="#kt_charts_widget_10_tab_content_4">
                            <!--begin::Icon-->
                            <div class="nav-icon mb-5">
                                <i class="fa-duotone fa-graduation-cap" style="font-size: 1.8rem;"></i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Data Siswa</span>
                            <!--end::Title-->
                            <!--begin::Bullet-->
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-danger"></span>
                            <!--end::Bullet-->
                        </a>
                        <!--end::Link-->
                    </li>
                    <!--end::Item-->
                </ul>

                <div class="tab-content mt-10">
                    <!--begin::Tap pane-->
                    <div class="tab-pane px-md-6 px-lg-20 pb-10 active" id="kt_charts_widget_10_tab_content_2">
                        <form action="" id="formuploadstaf" class="form-horizontal" method="post" accept-charset="utf-8">
                            <div class="row mb-3">
                                <label for="contoh" class="col-sm-4 col-12 col-form-label">Contoh Format Excel</label>
                                <div class="col-sm-8 col-12">
                                    <a href="#" class="btn btn-light w-auto  text-start ps-8">
                                        <img alt="Logo" src="<?= base_url('assets/img/xls.png') ?>" class="h-20px me-3">Download Excel
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-10">
                                <label for="dropzone-staf" class="col-sm-4 col-12 col-form-label">File <span class="text-danger">*</span></label>
                                <!--end::Label-->
                                <div class="col-sm-8 col-12">
                                    <input class="form-control" type="file" id="formFile">
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
                        </form>
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane px-md-6 px-lg-20 pb-10" id="kt_charts_widget_10_tab_content_3">
                        <form action="" id="formuploadkelas" class="form-horizontal" method="post" accept-charset="utf-8">
                            <div class="row mb-3">
                                <label for="contoh" class="col-sm-4 col-12 col-form-label">Contoh Format Excel</label>
                                <div class="col-sm-8 col-12">
                                    <a href="#" class="btn btn-light w-auto  text-start ps-8">
                                        <img alt="Logo" src="<?= base_url('assets/img/xls.png') ?>" class="h-20px me-3">Download Excel
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Tahun Ajaran <span class="text-danger">*</span></label>
                                <div class="col-sm-8 col-12">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                        <option></option>
                                        <option value="1">2020/2021</option>
                                        <option value="2">2021/2022</option>
                                        <option value="2">2022/2023</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="id_tingkat_kelas" class="col-sm-4 col-12 col-form-label">Tingkat <span class="text-danger">*</span></label>
                                <!--end::Label-->
                                <div class="col-sm-8 col-12">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                        <option></option>
                                        <option value="1">X</option>
                                        <option value="2">XI</option>
                                        <option value="2">XII</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="id_wali_kelas" class="col-sm-4 col-12 col-form-label">Wali Kelas <span class="text-danger">*</span></label>
                                <div class="col-sm-8 col-12">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                        <option></option>
                                        <option value="1">Dian S.Pd</option>
                                        <option value="2">Indrawan S.Pd</option>
                                        <option value="2">Prasetyo S.Pd</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-10">
                                <label for="dropzone-kelas" class="col-sm-4 col-12 col-form-label">File <span class="text-danger">*</span></label>
                                <!--end::Label-->
                                <div class="col-sm-8 col-12">
                                    <input class="form-control" type="file" id="formFile">
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
                        </form>
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane px-md-6 px-lg-20 pb-10" id="kt_charts_widget_10_tab_content_4">
                        <form action="" id="formuploadsiswa" class="form-horizontal" method="post" accept-charset="utf-8">
                            <div class="row mb-3">
                                <label for="contoh" class="col-sm-4 col-12 col-form-label">Contoh Format Excel</label>
                                <div class="col-sm-8 col-12">
                                    <a href="#" class="btn btn-light w-auto  text-start ps-8">
                                        <img alt="Logo" src="<?= base_url('assets/img/xls.png') ?>" class="h-20px me-3">Download Excel
                                    </a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="id_tahun_ajaran_siswa" class="col-sm-4 col-form-label">Tahun Ajaran <span class="text-danger">*</span></label>
                                <div class="col-sm-8 col-12">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                        <option></option>
                                        <option value="1">2020/2021</option>
                                        <option value="2">2021/2022</option>
                                        <option value="2">2022/2023</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="id_tingkat_siswa" class="col-sm-4 col-12 col-form-label">Tingkat <span class="text-danger">*</span></label>
                                <!--end::Label-->
                                <div class="col-sm-8 col-12">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                        <option></option>
                                        <option value="1">X</option>
                                        <option value="2">XI</option>
                                        <option value="2">XII</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="id_kelas_siswa" class="col-sm-4 col-12 col-form-label">Kelas <span class="text-danger">*</span></label>
                                <!--end::Label-->
                                <div class="col-sm-8 col-12">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                        <option></option>
                                        <option value="1">X IPA 1</option>
                                        <option value="2">XI IPA 1</option>
                                        <option value="2">XII IPA 1</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-10">
                                <label for="dropzone-siswa" class="col-sm-4 col-12 col-form-label">File <span class="text-danger">*</span></label>
                                <!--end::Label-->
                                <div class="col-sm-8 col-12">
                                    <input class="form-control" type="file" id="formFile">
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
                        </form>
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->