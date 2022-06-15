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
                                <th class="min-w-175px text-center">Nama</th>
                                <th class="min-w-175px text-center">Tanggal</th>
                                <th class="min-w-250px text-center">Batas</th>
                                <th class="min-w-150px text-center">Kelas</th>
                                <th class="min-w-200px text-center">Pelajaran</th>
                                <th class="min-w-250px text-center">Guru</th>
                                <th class="min-w-300px text-center">File</th>
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
                                        Admin Sdioarjo
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
                                        Pelajaran 01
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        Drs. Hendrawati Kusumaningsih Sagaru Saputri
                                    </p>
                                </td>
                                <td>
                                    <p class="text-center">
                                        <a href="#" class="btn btn-light w-50">
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