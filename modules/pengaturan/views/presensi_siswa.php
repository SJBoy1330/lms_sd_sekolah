<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container mb-4">
        <div class="card shadow-sm mb-4 fadein anim-4">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Hari</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Senin</option>
                                    <option value="2">Selasa</option>
                                    <option value="3">Rabu</option>
                                    <option value="4">Kamis</option>
                                    <option value="5">Jum'at</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 align-self-end text-start" style="padding:5px; margin-top:7px;">
                            <button type="button" id="btn-filter" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card fadein-bottom anim-3">
            <div class="card-header">
                <div class="card-toolbar">
                    <h3>Setting Presensi Siswa</h3>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jam Masuk</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-alarm-clock" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" id="masuk" placeholder="Jam Masuk" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jam Pulang</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-alarm-clock" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" id="pulang" placeholder="Jam Pulang" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jam Masuk Mulai</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-alarm-clock" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" id="masukmulai" placeholder="Jam Masuk Mulai" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jam Masuk Selesai</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-alarm-clock" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" id="masukselesai" placeholder="Jam Masuk Selesai" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jam Pulang Mulai</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-alarm-clock" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" id="pulangmulai" placeholder="Jam Pulang Mulai" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jam Pulang Selesai</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-alarm-clock" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" id="pulangselesai" placeholder="Jam Pulang Selesai" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Radius</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-street-view" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan Radius" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Toleransi Pulang Cepat (menit)</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-timer" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan toleransi pulang cepat" />
                                <!--end::Datepicker-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Toleransi Terlambat</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-timer" style="font-size: 1.3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan toleransi terlambat" />
                                <!--end::Datepicker-->
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
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>