<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="filter-title mb-2">Tahun Ajaran</label>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">2021/2022</option>
                                <option value="2">2022/2023</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="filter-title mb-2">Kelas</label>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">XII</option>
                                <option value="2">XI</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="filter-title mb-2">tanggal</label>
                            <input class="form-select form-select-solid" type="text" name="tanggal" value="" />
                        </div>
                        <div class="col-md-4 offset-md-8 offset-xl-8 d-flex justify-content-end" style="padding:5px;">
                            <button type="submit" id="cek_rekap_siswa" name="cek_rekap_siswa" class="btn btn-success btn-sm "><i class="bi bi-arrow-repeat"></i> Tampil</button>
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
                    <div class="col-12 d-flex">
                        <a href="" class="me-3">
                            <img src="<?= base_url(); ?>assets/img/xls.png" alt="" width="35">
                        </a>
                        <a href="">
                            <img src="<?= base_url(); ?>assets/img/pdf.png" alt="" width="35">
                        </a>
                    </div>
                    <div class="col overflow-auto my-5">
                        <table class="table table-light" id="kt_table_customers_payment">
                            <!--begin::Table head-->
                            <thead class=" fs-7 fw-bolder">
                                <!--begin::Table row-->
                                <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                    <th scope="col" class=" min-w-65px bg-primary border border-white ps-3 ">No</th>
                                    <th scope="col" class=" min-w-200px bg-primary border border-white">Nama Siswa</th>
                                    <th scope="col" class=" min-w-150px bg-primary border border-white">
                                        <p class="m-0">1</p>
                                        <p class="m-0">07.00.01</p>
                                    </th>
                                    <th scope="col" class=" min-w-150px bg-primary border border-white">
                                        <p class="m-0">1</p>
                                        <p class="m-0">07.00.01</p>
                                    </th>
                                    <th scope="col" class=" min-w-150px bg-primary border border-white">
                                        <p class="m-0">1</p>
                                        <p class="m-0">07.00.01</p>
                                    </th>
                                    <th scope="col" class=" min-w-150px bg-primary border border-white">
                                        <p class="m-0">1</p>
                                        <p class="m-0">07.00.01</p>
                                    </th>
                                    <th scope="col" class=" min-w-150px bg-primary border border-white">
                                        <p class="m-0">1</p>
                                        <p class="m-0">07.00.01</p>
                                    </th>
                                    <th scope="col" class=" min-w-150px bg-primary border border-white">
                                        <p class="m-0">1</p>
                                        <p class="m-0">07.00.01</p>
                                    </th>
                                    <th scope="col" class=" min-w-100px bg-primary border border-white">Jumlah Mapael</th>
                                    <th scope="col" class=" min-w-100px bg-primary border border-white">Mapel hadir</th>
                                    <th scope="col" class=" min-w-100px bg-primary border border-white pe-3">Persentase Kehadiran</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">1</td>
                                    <td class="border border-white">Siswa</td>
                                    <td class="border border-white"><span class="badge rounded-pill badge-danger">Pelajaran 01</span></td>
                                    <td class="border border-white"><span class="badge rounded-pill badge-danger">Pelajaran 01</span></td>
                                    <td class="border border-white"><span class="badge rounded-pill badge-danger">Pelajaran 01</span></td>
                                    <td class="border border-white"><span class="badge rounded-pill badge-danger">Pelajaran 01</span></td>
                                    <td class="border border-white"><span class="badge rounded-pill badge-danger">Pelajaran 01</span></td>
                                    <td class="border border-white"><span class="badge rounded-pill badge-danger">Pelajaran 01</span></td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white">0</td>
                                    <td class="border border-white pe-3">0%</td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>

                    </div>
                </div>

                <div class="box-info">
                    <h5 class="">Keterangan</h5>

                    <div class="row align-items-center">
                        <div class="mw-175px align-items-center d-flex">
                            <span class="badge badge-circle badge-hijau m-1"></span> <span class="ms-2">Hadir</span>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="mw-175px align-items-center d-flex">
                            <span class="badge badge-circle badge-danger m-1"></span> <span class="ms-2">Tidak Hadir</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>