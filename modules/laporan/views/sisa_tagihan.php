<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm fadein anim-4">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun Ajaran</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <option value="1">2021/2022</option>
                                <option value="2">2022/2023</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Tingkat</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="true">
                                <option></option>
                                <option value="1">X</option>
                                <option value="2">XI</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Kelas</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <option value="1">XII</option>
                                <option value="2">XI</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-xl-3" style="padding:5px;">
                            <label class="form-label fw-bold">Siswa</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="true">
                                <option></option>
                                <option value="1">aku</option>
                                <option value="2">kamu</option>
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
                                <a class="menu-link px-3"> <i class="fa-duotone fa-file-pdf me-3" style="font-size: 20px;"></i> Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col overflow-auto my-5">
                        <table class="table table-light">
                            <!--begin::Table head-->
                            <thead class=" fs-7 fw-bolder">
                                <!--begin::Table row-->
                                <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                    <th scope="col" class=" min-w-65px bg-danger border border-white ps-3 ">No</th>
                                    <th scope="col" class=" bg-danger border border-white">No Tagihan</th>
                                    <th scope="col" class="min-w-125px bg-danger border border-white">Tanggal Tagihan</th>
                                    <th scope="col" class=" bg-danger border border-white">NIS</th>
                                    <th scope="col" class=" bg-danger border border-white">Nama Siswa</th>
                                    <th scope="col" class=" bg-danger border border-white">Jumlah Tagihan</th>
                                    <th scope="col" class=" bg-danger border border-white">Diskon</th>
                                    <th scope="col" class=" bg-danger border border-white">Terbayar</th>
                                    <th scope="col" class=" bg-danger border border-white pe-3">Sisa Tagihan</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">1</td>
                                    <td class="border border-white">03/1212121</td>
                                    <td class="border border-white">12-12-2022</td>
                                    <td class="border border-white">123013189</td>
                                    <td class="border border-white">Udin</td>
                                    <td class="border border-white">Rp.500.000</td>
                                    <td class="border border-white">Rp.500.000</td>
                                    <td class="border border-white">Rp.500.000</td>
                                    <td class="border border-white pe-3">Rp.500.000</td>
                                </tr>
                                <tr class="align-middle text-center text-dark">
                                    <td colspan="5" class="border border-white ps-3 ">Total</td>
                                    <td class="border border-white">Rp.500.000</td>
                                    <td class="border border-white">Rp.500.000</td>
                                    <td class="border border-white">Rp.500.000</td>
                                    <td class="border border-white">Rp.500.000</td>
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