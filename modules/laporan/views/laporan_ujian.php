<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container mb-4">
        <div class="card shodow-sm mb-4">

            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Mata Pelajaran</label>
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
                            <label class="form-label fw-bold">Status</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">Lulus</option>
                                    <option value="2">Belum Lulus</option>
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
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-sm btn-light-danger me-2 " id="deleteall" style="display: none;">
                            <span class="svg-icon svg-icon-2 me-0">
                                <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                            </span>
                            Hapus</button>
                    </div>
                    <!--end::Toolbar-->
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 DataTable no-footer" id="kt_table_laporan_ujian">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_laporan_ujian .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-100px text-center">No</th>
                                <th class="min-w-175px text-center">Nama Ujian</th>
                                <th class="min-w-250px text-center">Studi Pembelajaran</th>
                                <th class="min-w-175px text-center">Tanggal Ujian</th>
                                <th class="min-w-175px text-center">Waktu Ujian</th>
                                <th class="min-w-175px text-center">Nilai Ujian</th>
                                <th class="min-w-175px text-center">keterangan</th>
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
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center mb-0">1</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <p class="text-center">
                                        Paket Ujian 01
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Matematika
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        10 Agustus 2022
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        30 Menit
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        100
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center text-success">
                                        Lulus
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input deletebox" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td>
                                    <p class="text-center mb-0">2</p>
                                </td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td>
                                    <p class="text-center">
                                        Paket Ujian 02
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        Bahasa Indonesia
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        10 Agustus 2022
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        60 Menit
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center">
                                        50
                                    </p>
                                </td>

                                <td>
                                    <p class="text-center text-danger">
                                        Gagal
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