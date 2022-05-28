<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun Ajaran</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">2021/2022</option>
                                <option value="2">2022/2023</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tingkat</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">XII</option>
                                <option value="2">XI</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Kelas</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">XI IPA 1</option>
                                <option value="2">XI IPA 2</option>
                            </select>
                        </div>
                        <div class="col-md-4 offset-md-8 offset-xl-8 d-flex justify-content-end" style="padding:5px;">
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--begin::Card-->
        <div class="card">
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-250px ps-14" placeholder="Pencarian" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-light-danger me-2 " id="deleteall" style="display: none;">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                            </span>
                            Hapus</button>
                        <button type="button" class="btn btn-sm btn-light-success me-2" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 18px;"></i>
                            </span>
                            Siswa</button>

                        <button type="button" class="btn btn-sm btn-light-info me-2" data-bs-toggle="modal" data-bs-target="#modalUnggah">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-upload" style="font-size: 20px;"></i>
                            </span>
                            Unggah</button>
                        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="bi bi-three-dots fs-3"></i>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> <i class="fa-duotone fa-file-excel me-3" style="font-size: 20px;"></i>Download Excel</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"> <i class="fa-duotone fa-file-pdf me-3" style="font-size: 20px;"></i> Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="modal fade" id="modalDetail" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-850px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Detail Siswa</h2>
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
                                    <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-15">
                                        <img src="<?= base_url('assets/media/avatars/150-3.jpg'); ?>" alt="" class="img-responsive rounded-circle">
                                        <span class="d-flex flex-column fw-bolder fs-5 mt-3">
                                            Siswa 1
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-id-card-clip" style="font-size: 1.5rem; color: #009ef7;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">NIS</span>
                                                    <span class="fs-7 text-muted">12345</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>

                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-id-card-clip" style="font-size: 1.5rem; color: #B0DC00;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">NISN</span>
                                                    <span class="fs-7 text-muted">54321</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>

                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-info">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-location-dot" style="font-size: 1.5rem; color: #7239ea;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Alamat</span>
                                                    <span class="fs-7 text-muted">Sidoarjo</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>



                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-danger">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-envelope" style="font-size: 1.5rem; color: #ec3528;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Email</span>
                                                    <span class="fs-7 text-muted">siswa@gmail.com</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>
                                    </div>

                                    <div class="col-4">
                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-person-praying" style="font-size: 1.5rem; color: #009ef7;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Agama</span>
                                                    <span class="fs-7 text-muted">Islam</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>

                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-venus-mars" style="font-size: 1.5rem; color: #B0DC00;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Jenis Kelamin</span>
                                                    <span class="fs-7 text-muted">Laki - Laki</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>

                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-info">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-id-card" style="font-size: 1.5rem; color: #7239ea;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Nama Orang Tua</span>
                                                    <span class="fs-7 text-muted">Bill Gates</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>


                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="symbol-label bg-light-warning">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <i class="fa-duotone fa-location-dot" style="font-size: 1.5rem; color: #ffc700;"></i>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Alamat Orang Tua</span>
                                                    <span class="fs-7 text-muted">Sidoarjo</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>
                                    </div>

                                    <div class="col-4">
                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-success">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-circle-dot" style="font-size: 1.5rem; color: #009ef7;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Status Siswa</span>
                                                    <span class="badge badge-success">Aktif</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>

                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="symbol-label bg-light-warning">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <i class="fa-duotone fa-phone" style="font-size: 1.5rem; color: #B0DC00;"></i>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Telp Siswa</span>
                                                    <span class="fs-7 text-muted">081654321</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>


                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-info">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <i class="fa-duotone fa-phone" style="font-size: 1.5rem; color: #7239ea;"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bolder fs-6">Telp Orang Tua</span>
                                                    <span class="fs-7 text-muted">08123445234</span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>

                <div class="modal fade" id="modalUnggah" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-850px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Upload</h2>
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
                            <div class="modal-body scroll-y mx-10 my-2">
                                <div class="row mb-5">
                                    <div class="col-md-4 col-xl-4" style="padding:5px;">
                                        <label class="form-label fw-bold">Tahun Ajaran</label>
                                        <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                            <option></option>
                                            <option value="1">2021/2022</option>
                                            <option value="2">2022/2023</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-xl-4" style="padding:5px;">
                                        <label class="form-label fw-bold">Tingkat</label>
                                        <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                            <option></option>
                                            <option value="1">XII</option>
                                            <option value="2">XI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-xl-4" style="padding:5px;">
                                        <label class="form-label fw-bold">Kelas</label>
                                        <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                            <option></option>
                                            <option value="1">XI IPA 1</option>
                                            <option value="2">XI IPA 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-around align-items-center">
                                    <div class="col-5">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">File</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="position-relative d-flex align-items-center">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Contoh Format Excel</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="position-relative d-flex align-items-center">
                                                <a href="#" class="btn btn-light w-auto  text-start ps-8">
                                                    <img alt="Logo" src="<?= base_url('assets/img/xls.png') ?>" class="h-20px me-3">Download Excel
                                                </a>
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

                <div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-850px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Tambah Siswa</h2>
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
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Foto Siswa</span>
                                            </label>
                                            <div class="col-sm-10 col-12">
                                                <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url(<?= site_url('assets/img/no-image.jpg') ?>)">
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?= site_url('assets/img/no-image.jpg') ?>)"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Tambah Gambar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="gambar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="foto_remove">
                                                    </label>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Batal">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Kelas</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <div style="width:100vw;">
                                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih">
                                                        <option></option>
                                                        <option value="1">X IPA 1</option>
                                                        <option value="2">XI IPA 1</option>
                                                        <option value="2">XII IPA 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Agama</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <div style="width:100vw;">
                                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Agama">
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

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Jenis Kelamin</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <div style="width:100vw;">
                                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Jenis Kelamin">
                                                        <option></option>
                                                        <option value="1">Laki - laki</option>
                                                        <option value="2">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Aktif</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <div style="width:100vw;">
                                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Status">
                                                        <option></option>
                                                        <option value="1">Aktif</option>
                                                        <option value="2">Tidak Aktif</option>
                                                    </select>
                                                </div>
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
                                                    <i class="fa-duotone fa-id-card" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">NIS</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-id-card-clip" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan nis" />
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
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan alamat" />
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
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan email" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">No. Telp</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-phone" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan nomor telpon" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Kata Sandi Siswa</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan kata sandi" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Konfirmasi Kata Sandi Siswa</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Konfirmasi kata sandi" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Foto Ortu</span>
                                            </label>
                                            <div class="col-sm-10 col-12">
                                                <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url(<?= site_url('assets/img/no-image.jpg') ?>)">
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?= site_url('assets/img/no-image.jpg') ?>)"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Tambah Gambar">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="gambar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="foto_remove">
                                                    </label>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Batal">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Nama Orang Tua</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-id-card" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Alamat Orang Tua</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-location-dot" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan alamat" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">No. Telp Orang Tua</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-phone" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan nomor telpon" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Kata Sandi Orang Tua</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan kata sandi" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Konfirmasi Kata Sandi Orang Tua</span>
                                            </label>
                                            <div class="position-relative d-flex align-items-center">
                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                    <i class="fa-duotone fa-key" style="font-size: 1.3rem;"></i>
                                                </span>
                                                <input class="form-control form-control-solid ps-12" placeholder="Konfirmasi kata sandi" />
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
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_siswa">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_siswa .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-150px text-center">Foto</th>
                                <th class="min-w-250px text-center">Nama</th>
                                <th class="min-w-175px text-center">Kelas</th>
                                <th class="min-w-175px text-center">Jenis Kelamin</th>
                                <th class="min-w-175px text-center">Status</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" id="inputcheckbox" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::User=-->
                                <td class="text-center">
                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="fa-duotone fa-bars fs-4"></i>
                                    </button>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a data-bs-toggle="modal" href="#modalDetail" role="button" class="menu-link px-3">Detail</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Hapus</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center mb-0">1</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td class="text-center mb-0">
                                    <div class="symbol symbol-60px">
                                        <img alt="Logo" src="<?= base_url('assets/media/avatars/150-1.jpg') ?>">
                                    </div>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Admin Sidoarjo
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        X IPA 1
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Perempuan
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        <span class="badge badge-success mx-3 my-2">Aktif</span>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" id="inputcheckbox" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::User=-->
                                <td class="text-center">
                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="fa-duotone fa-bars fs-4"></i>
                                    </button>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a data-bs-toggle="modal" href="#modalDetail" role="button" class="menu-link px-3">Detail</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Hapus</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center mb-0">2</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td class="text-center mb-0">
                                    <div class="symbol symbol-60px">
                                        <img alt="Logo" src="<?= base_url('assets/media/avatars/150-2.jpg') ?>">
                                    </div>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Operator
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        X IPS 1
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Laki - laki
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        <span class="badge badge-danger mx-3 my-2">Tidak Aktif</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

<div class="modal fade" id="detailberitaModal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px modal-dialog-centered">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
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
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-xl-10 pt-5 pb-15">
                <div>
                    <img src="<?= base_url('assets/img/news.jpg') ?>" height="300" alt="" style="width: 100%; border-radius: 10px;">
                    <div class="text-center my-8">
                        <h2 class="mb-3">Ternyata Koran itu adalah sebuah berita</h2>
                    </div>
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">

                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div>
                    <p style="text-indent: 0.3in">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus sunt eaque blanditiis odit voluptas, reprehenderit eveniet obcaecati error, labore sequi doloribus ipsam quos est quo dolores architecto totam dolore beatae?</p>
                    <p style="text-indent: 0.3in">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus sunt eaque blanditiis odit voluptas, reprehenderit eveniet obcaecati error, labore sequi doloribus ipsam quos est quo dolores architecto totam dolore beatae?</p>
                    <p style="text-indent: 0.3in">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus sunt eaque blanditiis odit voluptas, reprehenderit eveniet obcaecati error, labore sequi doloribus ipsam quos est quo dolores architecto totam dolore beatae?</p>
                </div>

                <div class="text-start">
                    <p class="fw-bolder mb-1">Dipublikasikan pada:</p>
                    <p>2020 - 08 - 17</p>
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>