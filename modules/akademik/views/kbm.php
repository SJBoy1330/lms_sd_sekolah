<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">


    <div class="container mb-4">
        <div class="card shodow-sm mb-4">
            <div class="card-body">
                <form action="">
                    <div class="row">

                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun Ajaran</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">2020/2021</option>
                                    <option value="2">2021/2022</option>
                                    <option value="2">2022/2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Kelas</label>
                            <div>
                                <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Semua">
                                    <option></option>
                                    <option value="1">X IPA 1</option>
                                    <option value="2">XI IPA 1</option>
                                    <option value="2">XII IPA 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input class="form-select form-select-solid form-select-sm" type="text" name="tanggal" value="" />
                        </div>
                        <div class="col-md-12 col-xl-12 align-self-end text-end" style="padding:5px; margin-top:7px;">
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
                    <div class="col overflow-auto my-5">
                        <div class="table-responsive">
                            <table class="table table-light table-bordered gs-7 gy-4 gx-7 no-footer">
                                <!--begin::Table head-->
                                <thead class=" fs-7 fw-bolder">
                                    <!--begin::Table row-->
                                    <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                        <th class="min-w-50px bg-danger border border-white">Jam</th>
                                        <th class="min-w-50px bg-danger border border-white">Waktu</th>
                                        <th class="min-w-225px bg-danger border border-white">Kelas XI IPA 1</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fs-6 fw-bold text-gray-600">
                                    <tr class="align-middle text-center text-dark">
                                        <td class="border border-white">1</td>
                                        <td class="border border-white">07:00 - 07:45</td>
                                        <td class="border border-white bg-light-danger">Tidak ada jadwal</td>
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
                                                    <a data-bs-toggle="modal" data-bs-target="#modalPengaturanKBM" class="btn btn-sm btn-info btn-hapus-jadwal py-4"><i class="fa-duotone fa-gear fs-3 pe-0"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle text-dark">
                                        <td class="border text-center border-white">3</td>
                                        <td class="border text-center border-white">07:00 - 07:45</td>
                                        <td class="border text-center border-white bg-light-danger">Tidak ada jadwal</td>
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
                                                    <a data-bs-toggle="modal" data-bs-target="#modalPengaturanKBM" class="btn btn-sm btn-info btn-hapus-jadwal py-4"><i class="fa-duotone fa-gear fs-3 pe-0"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle text-dark">
                                        <td class="border text-center border-white">5</td>
                                        <td class="border text-center border-white">07:00 - 07:45</td>
                                        <td class="border text-center border-white bg-light-warning">Istirahat</td>
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
                                                    <a data-bs-toggle="modal" data-bs-target="#modalPengaturanKBM" class="btn btn-sm btn-info btn-hapus-jadwal py-4"><i class="fa-duotone fa-gear fs-3 pe-0"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle text-dark">
                                        <td class="border text-center border-white">7</td>
                                        <td class="border text-center border-white">07:00 - 07:45</td>
                                        <td class="border text-center border-white bg-light-danger">Tidak ada jadwal</td>
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
                                                    <a data-bs-toggle="modal" data-bs-target="#modalPengaturanKBM" class="btn btn-sm btn-info btn-hapus-jadwal py-4"><i class="fa-duotone fa-gear fs-3 pe-0"></i></a>
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
<!--end::Content-->

<div class="modal fade" id="modalPengaturanKBM" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-850px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Pengaturan KBM</h2>
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
                    <div class="col-md-6 col-xl-6">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Bab</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Bab">
                                    <option></option>
                                    <option value="1">Bab 1</option>
                                    <option value="2">Bab 2</option>
                                    <option value="2">Bab 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Materi</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Materi">
                                    <option></option>
                                    <option value="1">Materi 1</option>
                                    <option value="2">Materi 2</option>
                                    <option value="2">Materi 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tanggal</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-calendar" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-select form-select-solid form-select-sm ps-12" type="text" name="tanggal" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kelas</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-building-user" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan kelas" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Pelajaran</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-brands fa-stack-overflow" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan pelajaran" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Guru</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-chalkboard-user" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan nama guru" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Link Google Meet</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-link" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan Url google meet" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Link Zoom</span>
                            </label>
                            <div class="position-relative d-flex align-items-center">
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-link" style="font-size: 1.3rem;"></i>
                                </span>
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan Url zoom" />
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