<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm fadein anim-4">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tahun</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <option value="1">2021</option>
                                <option value="2">2022</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Bulan</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Semua" data-allow-clear="">
                                <option></option>
                                <option value="1">Januari</option>
                                <option value="2">Febuari</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xl-4 align-self-end" style="padding:5px;">
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
                    <!-- <div class="col-12">
                        <div class="export-box d-flex">
                            <a href="" class="me-3">
                                <img src="<?= base_url(); ?>assets/img/xls.png" alt="" width="35">
                            </a>
                            <a href="">
                                <img src="<?= base_url(); ?>assets/img/pdf.png" alt="" width="35">
                            </a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-auto">
                                <p class="m-0 fw-bolder">Tahun</p>
                                <p class="m-0 fw-bolder">Bulan</p>

                            </div>
                            <div class="col-auto">
                                <p class="m-0 fw-bold">:</p>
                                <p class="m-0 fw-bold">:</p>

                            </div>
                            <div class="col-auto">
                                <p class="m-0">2022</p>
                                <p class="m-0">Maret</p>

                            </div>
                        </div>
                    </div> -->
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
                        <div class="row d-flex justify-content-around align-items-center">
                            <div class="col-md-6 col-sm-12 mb-2">
                                <label class="form-label fw-bold">Tahun</label>
                                <div class="position-relative d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar" style="font-size: 1.3rem;"></i>
                                    </span>
                                    <input type="text" class="form-control form-control-solid ps-12" value="2022" readonly />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-2">
                                <label class="form-label fw-bold">Bulan</label>
                                <div class="position-relative d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar" style="font-size: 1.3rem;"></i>
                                    </span>
                                    <input type="text" class="form-control form-control-solid ps-12" value="Maret" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col overflow-auto my-5">
                        <table class="table table-light">
                            <!--begin::Table head-->
                            <thead class=" fs-7 fw-bolder">
                                <!--begin::Table row-->
                                <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                    <th scope="col" rowspan="3" class=" min-w-65px bg-danger border border-white ps-3">No</th>
                                    <th scope="col" rowspan="3" class=" min-w-200px bg-danger border border-white">Nama</th>
                                    <th scope="col" colspan="124" class=" min-w-150px bg-danger border border-white pe-3">Tanggal</th>
                                </tr>
                                <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ps-3">1</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">2</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">3</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">4</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">5</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">6</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">7</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">8</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">9</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">10</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">11</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">12</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">13</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">14</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">15</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">16</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">17</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">18</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">19</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">20</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">21</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">22</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">23</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">24</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">25</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">26</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">27</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">28</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">29</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white ">30</th>
                                    <th scope="col" colspan="4" class=" bg-danger border border-white pe-3">31</th>
                                </tr>
                                <tr class=" text-white text-uppercase gs-0 align-middle text-center">
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ps-3">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">PC</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">H</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">TH</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px ">P</th>
                                    <th scope="col" class=" bg-danger border border-white min-w-65px pe-3">PC</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">1</td>
                                    <td class="border border-white">Admin Sidoarjo</td>
                                    <td class="border border-white">-</td>
                                    <td class="border border-white text-danger">09:00</td>
                                    <td class="border border-white">16:00</td>
                                    <td class="border border-white">-</td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white pe-3"></td>
                                </tr>
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">2</td>
                                    <td class="border border-white">Drs. Hendrawati Kusumaningsih Sagaru Saputri</td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white">07:00</td>
                                    <td class="border border-white">-</td>
                                    <td class="border border-white">-</td>
                                    <td class="border border-white">15:00</td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white pe-3"></td>
                                </tr>
                                <tr class="align-middle text-center text-dark">
                                    <td class="border border-white ps-3">3</td>
                                    <td class="border border-white">Keuangan</td>
                                    <td class="border border-white">-</td>
                                    <td class="border border-white text-danger">10:00</td>
                                    <td class="border border-white">-</td>
                                    <td class="border border-white">14:00</td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white"></td>
                                    <td class="border border-white pe-3"></td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>

                    </div>
                </div>

                <div class="box-info">
                    <h5>Keterangan</h5>
                    <div class="row">
                        <div class="col-auto">
                            <p class="m-0 fw-bolder">H</p>
                            <p class="m-0 fw-bolder">TH</p>
                            <p class="m-0 fw-bolder">P</p>
                            <p class="m-0 fw-bolder">PC</p>
                        </div>
                        <div class="col-auto">
                            <p class="m-0 fw-bold">:</p>
                            <p class="m-0 fw-bold">:</p>
                            <p class="m-0 fw-bold">:</p>
                            <p class="m-0 fw-bold">:</p>
                        </div>
                        <div class="col-auto">
                            <p class="m-0">Hadir</p>
                            <p class="m-0">Terlambat Hadir</p>
                            <p class="m-0">Pulang</p>
                            <p class="m-0">Pulang Cepat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>