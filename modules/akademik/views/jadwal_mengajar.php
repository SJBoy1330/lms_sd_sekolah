<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun Ajaran</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">2021</option>
                                <option value="2">2022</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tingkat</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">X</option>
                                <option value="2">XI</option>
                                <option value="2">XII</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Bulan</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">Januari</option>
                                <option value="2">Febuari</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-xl-12 align-self-end text-end" style="padding:5px;">
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-12">
                        <div class="row d-flex justify-content-around align-items-center mt-8">
                            <div class="col-xl-6 col-md-12">
                                <label class="form-label fw-bold">Tahun Ajaran</label>
                                <input type="text" class="form-control form-control-solid" value="2021 / 2022" readonly>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <label class="form-label fw-bold">Tingkat Kelas</label>
                                <input type="text" class="form-control form-control-solid" value="X" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col overflow-auto my-5">
                        <div class="table-responsive">
                        <table class="table table-light table-bordered gs-7 gy-4 gx-7 no-footer">
                            <!--begin::Table head-->
                            <thead class=" fs-7 fw-bolder">
                                <!--begin::Table row-->
                                <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                    <th class="min-w-100px bg-danger border border-white">Hari</th>
                                    <th class="min-w-50px bg-danger border border-white">Jam</th>
                                    <th class="min-w-50px bg-danger border border-white">Waktu</th>
                                    <th class="min-w-150px bg-danger border border-white">Hell Class</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr class="align-middle text-center text-dark">
                                    <td rowspan="8" class="border border-white">Minggu</td>
                                    <td class="border border-white">1</td>
                                    <td class="border border-white">07:00 - 07:45</td>
                                    <td class="border border-white"><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalTambahJadwal">Tambah Jadwal</button></td>
                                </tr>
                                <tr class="align-middle text-dark">
                                    <td class="border text-center border-white">2</td>
                                    <td class="border text-center border-white">07:00 - 07:45</td>
                                    <td class="border border-white">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center wrapper-jadwal">
                                                <ul class="list-group">
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-brands fa-stack-overflow fs-1 me-3"></i>Pelajaran 01</li>
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-solid fa-chalkboard-user me-3"></i>Sri Handayani S.Pd</li>
                                                </ul>
                                                <button class="btn btn-sm btn-danger btn-hapus-jadwal py-4"><i class="fa-duotone fa-trash fs-3 pe-0"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-middle text-dark">
                                    <td class="border text-center border-white">3</td>
                                    <td class="border text-center border-white">07:00 - 07:45</td>
                                    <td class="border text-center border-white"><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalTambahJadwal">Tambah Jadwal</button></td>
                                </tr>
                                <tr class="align-middle text-dark">
                                    <td class="border text-center border-white">4</td>
                                    <td class="border text-center border-white">07:00 - 07:45</td>
                                    <td class="border border-white">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center wrapper-jadwal">
                                                <ul class="list-group">
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-brands fa-stack-overflow fs-1 me-3"></i>Pelajaran 01</li>
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-solid fa-chalkboard-user me-3"></i>Sri Handayani S.Pd</li>
                                                </ul>
                                                <button class="btn btn-sm btn-danger btn-hapus-jadwal py-4"><i class="fa-duotone fa-trash fs-3 pe-0"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-middle text-dark">
                                    <td class="border text-center border-white">5</td>
                                    <td class="border text-center border-white">07:00 - 07:45</td>
                                    <td class="border text-center border-white"><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalTambahJadwal">Tambah Jadwal</button></td>
                                </tr>
                                <tr class="align-middle text-dark">
                                    <td class="border text-center border-white">6</td>
                                    <td class="border text-center border-white">07:00 - 07:45</td>
                                    <td class="border border-white">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center wrapper-jadwal">
                                                <ul class="list-group">
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-brands fa-stack-overflow fs-1 me-3"></i>Pelajaran 01</li>
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-solid fa-chalkboard-user me-3"></i>Sri Handayani S.Pd</li>
                                                </ul>
                                                <button class="btn btn-sm btn-danger btn-hapus-jadwal py-4"><i class="fa-duotone fa-trash fs-3 pe-0"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-middle text-dark">
                                    <td class="border text-center border-white">7</td>
                                    <td class="border text-center border-white">07:00 - 07:45</td>
                                    <td class="border text-center border-white"><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalTambahJadwal">Tambah Jadwal</button></td>
                                </tr>
                                <tr class="align-middle text-dark">
                                    <td class="border text-center border-white">8</td>
                                    <td class="border text-center border-white">07:00 - 07:45</td>
                                    <td class="border border-white">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center align-items-center wrapper-jadwal">
                                                <ul class="list-group">
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-brands fa-stack-overflow fs-1 me-3"></i>Pelajaran 01</li>
                                                    <li class="list-group-item bg-transparent border-0"><i class="fa-solid fa-chalkboard-user me-3"></i>Sri Handayani S.Pd</li>
                                                </ul>
                                                <button class="btn btn-sm btn-danger btn-hapus-jadwal py-4"><i class="fa-duotone fa-trash fs-3 pe-0"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="modal fade" id="modalTambahJadwal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Tambah Jadwal</h2>
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
            <div class="modal-body scroll-y mx-5 mx-xl-8 mb-7">
                <!--begin::Form-->
                <form id="kt_modal_export_users_form" class="form" action="#">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Mata Pelajaran</label>
                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Pelajaran" data-allow-clear="">
                            <option></option>
                            <option value="1">Pelajaran 01</option>
                            <option value="2">Pelajaran 02</option>
                            <option value="2">Pelajaran 03</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Guru</label>
                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih Guru" data-allow-clear="">
                            <option></option>
                            <option value="1">Admin Sidoarjo</option>
                            <option value="2">Sri Handayani S.Pd</option>
                        </select>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Actions-->
                    <div class="row mb-4">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <i class="fa-duotone fa-floppy-disk" style="font-size: 1.3rem;"></i>
                            </span>
                            <!--end::Svg Icon-->Simpan</button>
                            <!--end::Add user-->
                        </div>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>