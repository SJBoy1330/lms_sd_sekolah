<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container mb-4">
        <div class="card shodow-sm mb-4">
            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Pelajaran</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Pelajaran 01</option>
                                    <option value="2">Pelajaran 02</option>
                                    <option value="2">Pelajaran 03</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Bab</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Bab 1 Pelajaran</option>
                                    <option value="2">Bab 2 Pelajaran</option>
                                    <option value="2">Bab 3 Pelajaran</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 align-self-end text-start" style="padding:5px; margin-top:7px;">
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>

    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-0">
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
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-light-danger me-2 " id="deleteall" style="display: none;">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                            </span>
                            Hapus</button>
                        <button type="button" class="btn btn-sm btn-light-success" data-bs-toggle="modal" data-bs-target="#modalTambahMateri">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-plus" style="font-size: 20px;"></i>
                            </span>
                            Materi</button>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_materi">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_materi .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-175px text-center">Tingkat</th>
                                <th class="min-w-250px text-center">Pelajaran</th>
                                <th class="min-w-150px text-center">Bab</th>
                                <th class="min-w-400px text-center">Judul</th>
                                <th class="min-w-250px text-center">Total Dokumen</th>
                                <th class="min-w-250px text-center">Total Video</th>
                                <th class="min-w-300px text-center">Pembuat</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input deletebox" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::User=-->
                                <td class="text-center">
                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="fa-duotone fa-bars fs-4"></i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold fs-7 w-175px py-4" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Edit</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="<?= base_url('akademik/materi_dokumen') ?>" class="menu-link px-3">File Materi Dokumen</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="<?= base_url('akademik/materi_video') ?>" class="menu-link px-3">File Materi Video</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center mb-0">1</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <p class="text-center">
                                        X
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Pelajaran 01
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        Bab 1 Pelajaran 1
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        Materi 2 Lorem ipsum dolor sit amet, consectetur adipiscing
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        10 File
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        5 Video
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        Drs. Hendrawati Kusumaningsih Sagaru Saputri
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

<!-- Modal Tambah Materi -->
<div class="modal fade" id="modalTambahMateri" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Tambah Materi</h2>
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
                    <div class="col-md-4 col-xl-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tingkat</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">X</option>
                                    <option value="2">XI</option>
                                    <option value="2">XII</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Pelajaran</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Ilumu Pengetahuan Alam</option>
                                    <option value="2">Ilmu Pengetahuan Sosial</option>
                                    <option value="2">Matematika</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama Bab</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Bab 1</option>
                                    <option value="2">Bab 2</option>
                                    <option value="2">Bab 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Judul</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-h1" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan judul" />
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

<!-- Modal File Materi Dokumen -->