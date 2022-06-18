<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="box-info">
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-sm btn-light-danger me-2 " id="deleteall" style="display: none;">
                                <span class="svg-icon svg-icon-2 me-0">
                                    <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                </span>
                                Hapus</button>
                        </div>
                    </div>
                    <div class="fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold my-4">
                            <span>Keterangan</span>
                        </label>
                        <!--end::Label-->
                        <!--begin:Options-->
                        <div class="row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                            <div class="col-xl-6 col-lg-12">
                                <!--begin:Option-->
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin:Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label bg-light-lighten">
                                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <i class="fa-duotone fa-h1" style="font-size: 1.8rem;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end:Icon-->
                                        <!--begin:Info-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bolder fs-6">Judul Tugas</span>
                                            <span class="fs-7 text-muted">Membahan Fotosintesis</span>
                                        </span>
                                        <!--end:Info-->
                                    </span>
                                    <!--end:Label-->
                                </label>
                                <!--end::Option-->

                                <!--begin:Option-->
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin:Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <i class="fa-duotone fa-chalkboard-user" style="font-size: 1.8rem;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end:Icon-->
                                        <!--begin:Info-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bolder fs-6">Kelas</span>
                                            <span class="fs-7 text-muted">Kelas Abu Bakar As-Sidiq</span>
                                        </span>
                                        <!--end:Info-->
                                    </span>
                                    <!--end:Label-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <!--begin:Option-->
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin:Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label bg-light-lighten">
                                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <i class="fa-brands fa-stack-overflow" style="font-size: 1.8rem;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end:Icon-->
                                        <!--begin:Info-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bolder fs-6">Mata Pelajaran</span>
                                            <span class="fs-7 text-muted">Matematika</span>
                                        </span>
                                        <!--end:Info-->
                                    </span>
                                    <!--end:Label-->
                                </label>
                                <!--end::Option-->

                                <!--begin:Option-->
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin:Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <i class="fa-duotone fa-calendar" style="font-size: 1.8rem;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end:Icon-->
                                        <!--begin:Info-->
                                        <span class="d-flex flex-column">
                                            <span class="fw-bolder fs-6">Tanggal Tugas</span>
                                            <span class="fs-7 text-muted">2022-06-14 13:00:00</span>
                                        </span>
                                        <!--end:Info-->
                                    </span>
                                    <!--end:Label-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end:Options-->
                    </div>
                </div>
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_tugas_siswa">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_tugas_siswa .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px text-center">Aksi</th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-175px text-center">Nama Siswa</th>
                                <th class="min-w-175px text-center">Tanggal dikumpulkan</th>
                                <th class="min-w-250px text-center">Batas dikumpulkan</th>
                                <th class="min-w-150px text-center">Kelas</th>
                                <th class="min-w-250px text-center">File</th>
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
                                        Max Smith
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        22-04-2022 00:00:00
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        30-04-2022 12:00:00
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        X-IPA-1
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        <a data-bs-toggle="modal" data-bs-target="#modalPreviewTugas" role="button" class="btn btn-light w-50">
                                            <img alt="Logo" src="<?= base_url() ?>assets/img/file.svg" class="h-20px me-3">Tugas
                                        </a>
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

<div class="modal fade" id="modalPreviewTugas" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Lihat Tugas</h2>
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
                    <div class="col-md-12">
                        <div class="wrapper-tugas">
                            <iframe src="<?= base_url('assets/demo_tugas.pdf')?>" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-duotone fa-floppy-disk" style="font-size: 1.3rem;"></i>
                            </span>
                            <!--end::Svg Icon-->Download tugas
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