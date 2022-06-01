<style>
    .card.three-card{
        height: 550px;
        overflow-y: scroll;
    }

    div.card.card-stretch{
        max-width: 287px;
    }

    div.scrollmenu {
        overflow: auto;
        display: flex;
    }

    div.scrollmenu .col-3 {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    span.badge.notif{
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .mapouter{
        position:relative;
        text-align:right;
        height:100%;
        width:100%;
    }

    .gmap_canvas{
        overflow:hidden;
        background:none!important;
        height:100%;
        width:100%;
    }

    .gmap_canvas iframe{
        width:100%;
    }
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Misc Widget 1-->
                <div class="row mb-5 mb-xl-8 g-5 g-xl-8">
                    <h2 class="card-title d-flex justify-content-between align-items-center">
                        <span class="fw-bolder text-dark">Daftar Ujian</span>
                        <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalAbsen">Absen</a>
                    </h2>
                    <div class="scrollmenu">
                        <div class="col-3">
                            <!--begin::Card-->
                            <div class="card card-stretch">
                                <!--begin::Link-->
                                <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10 card-ujian">
                                    <span class="badge badge-light-success fs-8 fw-bolder notif">Ujian Beralangsung</span>
                                    <span class="svg-icon svg-icon-3x mb-5">
                                        <i class="fa-duotone fa-book-bookmark mt-5 mb-7" style="font-size: 3rem;"></i>
                                    </span>
                                    <span class="fs-4 fw-bolder">Paket Ujian 01</span>
                                    <span class="fs-5 fw-medium">Bahasa Indonesia</span>
                                    <span class="fs-7 fw-medium">20 Agustus 2022 | 08:00 - 10:00</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-3">
                            <!--begin::Card-->
                            <div class="card card-stretch">
                                <!--begin::Link-->
                                <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10 card-ujian">
                                    <span class="badge badge-light-warning fs-8 fw-bolder notif">Belum Ujian</span>
                                    <span class="svg-icon svg-icon-3x mb-5">
                                        <i class="fa-duotone fa-book-bookmark mt-5 mb-7" style="font-size: 3rem;"></i>
                                    </span>
                                    <span class="fs-4 fw-bolder">Paket Ujian 02</span>
                                    <span class="fs-5 fw-medium">Bahasa Indonesia</span>
                                    <span class="fs-7 fw-medium">20 Agustus 2022 | 11:00 - 12:00</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-3">
                            <!--begin::Card-->
                            <div class="card card-stretch">
                                <!--begin::Link-->
                                <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10 card-ujian">
                                    <span class="badge badge-light-danger fs-8 fw-bolder notif">Tidak Ujian</span>
                                    <span class="svg-icon svg-icon-3x mb-5">
                                        <i class="fa-duotone fa-book-bookmark mt-5 mb-7" style="font-size: 3rem;"></i>
                                    </span>
                                    <span class="fs-4 fw-bolder">Paket Ujian 03</span>
                                    <span class="fs-5 fw-medium">Bahasa Indonesia</span>
                                    <span class="fs-7 fw-medium">20 Agustus 2022 | 13:00 - 14:00</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-3">
                            <!--begin::Card-->
                            <div class="card card-stretch">
                                <!--begin::Link-->
                                <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10 card-ujian">
                                    <span class="badge badge-light-success fs-8 fw-bolder notif">Ujian Beralangsung</span>
                                    <span class="svg-icon svg-icon-3x mb-5">
                                        <i class="fa-duotone fa-book-bookmark mt-5 mb-7" style="font-size: 3rem;"></i>
                                    </span>
                                    <span class="fs-4 fw-bolder">Paket Ujian 04</span>
                                    <span class="fs-5 fw-medium">Bahasa Indonesia</span>
                                    <span class="fs-7 fw-medium">20 Agustus 2022 | 08:00 - 10:00</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-3">
                            <!--begin::Card-->
                            <div class="card card-stretch">
                                <!--begin::Link-->
                                <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10 card-ujian">
                                    <span class="badge badge-light-warning fs-8 fw-bolder notif">Belum Ujian</span>
                                    <span class="svg-icon svg-icon-3x mb-5">
                                        <i class="fa-duotone fa-book-bookmark mt-5 mb-7" style="font-size: 3rem;"></i>
                                    </span>
                                    <span class="fs-4 fw-bolder">Paket Ujian 05</span>
                                    <span class="fs-5 fw-medium">Bahasa Indonesia</span>
                                    <span class="fs-7 fw-medium">20 Agustus 2022 | 11:00 - 12:00</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <div class="col-3">
                            <!--begin::Card-->
                            <div class="card card-stretch">
                                <!--begin::Link-->
                                <a href="#" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10 card-ujian">
                                    <span class="badge badge-light-danger fs-8 fw-bolder notif">Tidak Ujian</span>
                                    <span class="svg-icon svg-icon-3x mb-5">
                                        <i class="fa-duotone fa-book-bookmark mt-5 mb-7" style="font-size: 3rem;"></i>
                                    </span>
                                    <span class="fs-4 fw-bolder">Paket Ujian 06</span>
                                    <span class="fs-5 fw-medium">Bahasa Indonesia</span>
                                    <span class="fs-7 fw-medium">20 Agustus 2022 | 13:00 - 14:00</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                </div>
                <!--end::Misc Widget 1-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <!--begin::List Widget 5-->
                        <div class="card mb-5 mb-xl-8 three-card">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder mb-2 text-dark">Jadwal</span>
                                    <span class="text-muted fw-bold fs-7">Hari ini</span>
                                </h3>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61bc3dda19278">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Filter Hari:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Hari" data-dropdown-parent="#kt_menu_61bc3dda19278" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Senin</option>
                                                        <option value="2">Selasa</option>
                                                        <option value="3">Rabu</option>
                                                        <option value="4">Kamis</option>
                                                        <option value="5">Jum'at</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Batal</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampilkan</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Timeline-->
                                <div class="timeline-label">
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">08:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Content-->
                                        <div class="timeline-content d-flex flex-column flex-wrap">
                                            <span class="fw-bolder text-gray-800 ps-3">Matematika</span>
                                            <span class="timeline-content fw-mormal text-muted ps-3">Drs. Astutik S.Pd</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Content-->
                                        <div class="timeline-content d-flex flex-column flex-wrap">
                                            <span class="fw-bolder text-gray-800 ps-3">Pendidikan Jasmani, Olahraga, dan Kesehatan</span>
                                            <span class="timeline-content fw-mormal text-muted ps-3">Pak Raditya Candra</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">12:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content d-flex flex-column flex-wrap">
                                            <span class="fw-bolder text-gray-800 ps-3">Ilmu Pengetahuan Alam Bawah Sadar</span>
                                            <span class="timeline-content fw-mormal text-muted ps-3">Pak Ngatmudji</span>
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">14:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content d-flex flex-column flex-wrap">
                                            <span class="fw-bolder text-gray-800 ps-3">Bahasa Indonesia</span>
                                            <span class="timeline-content fw-mormal text-muted ps-3">Pak Agus</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">17:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content d-flex flex-column flex-wrap">
                                            <span class="fw-bolder text-gray-800 ps-3">Bahasa Inggris</span>
                                            <span class="timeline-content fw-mormal text-muted ps-3">Bu Sri Wahyuni</span>
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">18:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content d-flex flex-column flex-wrap">
                                            <span class="fw-bolder text-gray-800 ps-3">Ilmu Pengetahuan Agama dan Aklhakul Karimah</span>
                                            <span class="timeline-content fw-mormal text-muted ps-3">Pak Muslim</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item">
                                        <!--begin::Label-->
                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">19:00</div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content d-flex flex-column flex-wrap">
                                            <span class="fw-bolder text-success ps-3">Pulang</span>
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: List Widget 5-->
                    </div>
                    <!--end::Col-->
                    <div class="col-xl-4">
                        <!--begin::List Widget 4-->
                        <div class="card mb-5 mb-xl-8 three-card">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Pengumuman</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::List Widget 4-->
                        <div class="card mb-5 mb-xl-8 three-card">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Berita</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5">
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-camera text-secondary" style="font-size:2rem;"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="#" class="text-gray-800 fs-6 fw-bolder">Orasi kandidat calon ketua osis diadakan di sekolah...</a>
                                            <span class="text-muted fw-bold d-block fs-7">3 Bulan yang lalu</span>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 4-->
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
<div class="modal fade" id="modalAbsen" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Modal Absensi</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid">
                    <!--begin::Content-->
                    <div class="flex-row-fluid px-lg-5">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="modalAbsen_form">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=jakarta&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">  
                                    </iframe>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-around align-items-center">
                                <div class="col-5 d-flex align-items-center bg-secondary rounded p-5 my-5">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-warning me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Jam Masuk</a>
                                        <span class="text-muted fw-bold d-block">07:00 WIB</span>
                                    </div>
                                </div>
                                <div class="col-5 d-flex align-items-center bg-secondary rounded p-5 my-5">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-warning me-5">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Jam Pulang</a>
                                        <span class="text-muted fw-bold d-block">16:00 WIB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-stack">
                                <div style="width: 100%;">
                                    <button type="button" class="btn btn-lg btn-primary" style="width: 100%;">Presensi Masuk</button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>