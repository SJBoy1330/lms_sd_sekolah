<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm fadein anim-4">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input class="form-select form-select-solid form-select-sm" type="text" name="tanggal" value="" readonly />
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Guru</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <option value="1">Bejo</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Kelas</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <option value="1">XII</option>
                                <option value="2">XI</option>
                            </select>
                        </div>
                        <div class="col-md-4 offset-md-8 offset-xl-8 d-flex justify-content-end" style="padding:5px;">
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="card shadow-sm fadein-bottom anim-4">
            <div class="card-body">
                <div class="row my-3">
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="bi bi-three-dots fs-3"></i>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"> <i class="fa-duotone fa-file-excel me-3" style="font-size: 20px;"></i>Download Excel</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a id="btn-export-pdf" class="menu-link px-3"> <i class="fa-duotone fa-file-pdf me-3" style="font-size: 20px;"></i> Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col overflow-auto my-5">
                        <table class="table table-light" id="kt_table_customers_payment">
                            <!--begin::Table head-->
                            <thead class=" fs-7 fw-bolder">
                                <!--begin::Table row-->
                                <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                    <th scope="col" rowspan="2" class=" min-w-65px bg-danger border border-white ps-3 ">No</th>
                                    <th scope="col" rowspan="2" class=" min-w-125px bg-danger border border-white">Tanggal</th>
                                    <th scope="col" rowspan="2" class=" min-w-65px bg-danger border border-white">Hari</th>
                                    <th scope="col" rowspan="2" class=" w-auto bg-danger border border-white">Guru</th>
                                    <th scope="col" rowspan="2" class=" min-w-125px bg-danger border border-white">Kelas</th>
                                    <th scope="col" rowspan="2" class=" min-w-125px bg-danger border border-white">Pelajaran</th>
                                    <th scope="col" rowspan="2" class=" min-w-125px bg-danger border border-white">Materi</th>
                                    <th scope="col" rowspan="2" class=" min-w-125px bg-danger border border-white">Kegiatan Guru</th>
                                    <th scope="col" rowspan="2" class=" min-w-125px bg-danger border border-white">Kegiatan Siswa</th>
                                    <th scope="col" rowspan="2" class=" min-w-125px bg-danger border border-white">Kejadian Kelas</th>
                                    <th scope="col" colspan="4" class=" min-w-65px bg-danger border border-white pe-3">Kehadiran</th>
                                </tr>
                                <tr class="text-white text-uppercase gs-0 align-middle text-center">
                                    <th scope="col" class=" min-w-65px bg-danger ps-3">H</th>
                                    <th scope="col" class=" min-w-65px bg-danger border border-white">S</th>
                                    <th scope="col" class=" min-w-65px bg-danger border border-white">I</th>
                                    <th scope="col" class=" min-w-65px bg-danger border border-white pe-3">TH</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">1</td>
                                    <td class="border border-white">24-02-2022</td>
                                    <td class="border border-white">Minggu</td>
                                    <td class="border border-white min-w-300px">Pak Joko</td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white pe-3">0</td>
                                </tr>
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">2</td>
                                    <td class="border border-white">24-02-2022</td>
                                    <td class="border border-white">Minggu</td>
                                    <td class="border border-white min-w-300px">Pak Doni</td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white pe-3">0</td>
                                </tr>
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">3</td>
                                    <td class="border border-white">24-02-2022</td>
                                    <td class="border border-white">Minggu</td>
                                    <td class="border border-white min-w-300px">Pak William</td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white pe-3">0</td>
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