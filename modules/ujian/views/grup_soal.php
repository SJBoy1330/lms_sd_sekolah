<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="row g-5 g-xl-8">
            <div class="col-xl-3">
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-1.svg');?>)">
                    <!--begin::Link-->
                    <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <span class="svg-icon svg-icon-3x mb-5">
                            <i class="fa-duotone fa-h1 mt-5 mb-7" style="font-size: 3rem;"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 text-primary fw-bolder mb-2">Nama Grup Soal</span>
                        <span class="text-dark-75 fw-bold fs-5 m-0">Grup Soal 1</span>
                    </div>
                    <!--end::Link-->
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-2.svg');?>)">
                    <!--begin::Link-->
                    <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <span class="svg-icon svg-icon-3x mb-5">
                            <i class="fa-brands fa-stack-overflow mt-5 mb-7" style="font-size: 3rem;"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 text-primary fw-bolder mb-2">Pelajaran</span>
                        <span class="text-dark-75 fw-bold fs-5 m-0">Ilmu Pengetahuan Alam</span>
                    </div>
                    <!--end::Link-->
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-3.svg');?>)">
                    <!--begin::Link-->
                    <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <span class="svg-icon svg-icon-3x mb-5">
                            <i class="fa-duotone fa-head-side-brain mt-5 mb-7" style="font-size: 3rem;"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 text-primary fw-bolder mb-2">Pembuat Grup Soal</span>
                        <span class="text-dark-75 fw-bold fs-5 m-0">Max Smith</span>
                    </div>
                    <!--end::Link-->
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 40% auto; background-image: url(<?= base_url('assets/media/svg/shapes/abstract-4.svg');?>)">
                    <!--begin::Link-->
                    <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                        <span class="svg-icon svg-icon-3x mb-5">
                            <i class="fa-duotone fa-ball-pile mt-5 mb-7" style="font-size: 3rem;"></i>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="fs-4 text-primary fw-bolder mb-2">Jumlah Soal</span>
                        <span class="text-dark-75 fw-bold fs-5 m-0">25 Soal</span>
                    </div>
                    <!--end::Link-->
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-5" id="card">
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title">
                    <a href="#" class="btn btn-sm btn-light">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-arrow-left-long" style="font-size: 1rem;"></i>
                        </span>
                        Kembali</a>
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <div class="d-flex align-items-center position-relative my-1  me-2">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-250px ps-14" placeholder="Pencarian">
                        </div>
                        <button type="button" class="btn btn-sm btn-light-success" data-bs-toggle="modal" data-bs-target="#modalTambahSoal">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            Soal</button>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div> 
            <div class="row">

            </div>                          
        </div>
    </div>
    <!--end::Container-->
</div>

<div class="modal fade" id="modalTambahSoal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Tambah Soal</h2>
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
                    <div class="col-md-12 col-xl-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama Grup Soal</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-h1" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" value="Pelajaran 01" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Mata Pelajaran</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Kelas">
                                    <option></option>
                                    <option value="1">Matematika</option>
                                    <option value="2">Ilmu Pengetahuan Alam</option>
                                    <option value="2">Ilmu Pengetahuan Sosial</option>
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
