<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="container mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input class="form-select form-select-solid form-select-sm" type="text" name="tanggal" value="" />
                        </div>
                        <div class="col-md-4 col-xl-4" style="padding:5px;">
                            <label class="form-label fw-bold">Staf</label>
                            <select class="form-select form-select-solid form-select-sm" data-kt-select2="true" data-placeholder="Pilih" data-allow-clear="">
                                <option></option>
                                <option value="1">Aku</option>
                                <option value="2">kamu</option>
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

    <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container">
                <div class="card shadow-sm" id="card">
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
                                        <a id="btn-export-pdf" class="menu-link px-3"> <i class="fa-duotone fa-file-pdf me-3" style="font-size: 20px;"></i> Download PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive my-5">
                            <table class="table table-bordered b gs-7 gy-4 gx-5 no-footer" style="border:0.5pt solid #C0C0C0;vertical-align:middle;">
                                <thead class="fw-bolder bg-danger text-white">
                                    <!--begin::Table row-->
                                    <tr role="row" style="border:0.5pt solid #C0C0C0;vertical-align:middle;">
                                        <th class="text-center text-uppercase">NO</th>
                                        <th class="text-center text-uppercase">Tanggal</th>
                                        <th class="text-center text-uppercase">Staf</th>
                                        <th class="text-center text-uppercase">Tugas</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-light fw-bold text-uppercase border border-white text-center">1</td>
                                        <td class="bg-light fw-bold text-uppercase border border-white text-center" nowrap>25-04-2022</td>
                                        <td class="bg-light fw-bold text-uppercase border border-white text-center" nowrap>Romadhoni</td>
                                        <td class="bg-light fw-bold text-uppercase border border-white text-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>