<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <a href="<?= base_url('ujian/detail_paket');?>" class="btn btn-light">
							<i class="bi bi-arrow-left"></i> Kembali
						</a>
                    </div>
                    <!--end::Search-->
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8 shadow-sm" style="background-position: right top; background-size: 40% auto; background-image: url(http://localhost/lms_sd/lms_sd_sekolah/assets/media/svg/shapes/abstract-1.svg)">
                            <!--begin::Link-->
                            <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <span class="svg-icon svg-icon-3x mb-5">
                                    <i class="fa-duotone fa-h1 mt-5 mb-7" style="font-size: 3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 text-primary fw-bolder mb-2">Nama Paket Ujian</span>
                                <span class="text-dark-75 fw-bold fs-5 m-0">Paket Ujian 1</span>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8 shadow-sm" style="background-position: right top; background-size: 40% auto; background-image: url(http://localhost/lms_sd/lms_sd_sekolah/assets/media/svg/shapes/abstract-2.svg)">
                            <!--begin::Link-->
                            <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <span class="svg-icon svg-icon-3x mb-5">
                                    <i class="fa-duotone fa-screen-users mt-5 mb-7" style="font-size: 3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 text-primary fw-bolder mb-2">Nama Kelas</span>
                                <span class="text-dark-75 fw-bold fs-5 m-0">Kelas Abu Bakar</span>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bgi-no-repeat card-xl-stretch mb-xl-8 shadow-sm" style="background-position: right top; background-size: 40% auto; background-image: url(http://localhost/lms_sd/lms_sd_sekolah/assets/media/svg/shapes/abstract-4.svg)">
                            <!--begin::Link-->
                            <div class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 flex-column justfiy-content-start align-items-start text-start w-100 p-10">
                                <span class="svg-icon svg-icon-3x mb-5">
                                    <i class="fa-duotone fa-graduation-cap mt-5 mb-7" style="font-size: 3rem;"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-4 text-primary fw-bolder mb-2">Jumlah Siswa</span>
                                <span class="text-dark-75 fw-bold fs-5 m-0">1.395 Soal</span>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h5>Kelas dan murid terkait</h5>
                    <table class="table table-bordered gs-7 gy-4 gx-7 no-footer">
                        <tbody>
                            <tr style="display:flex; justify-content:start flex-direction: column; flex-wrap: wrap;">
                                <td class="bash">
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-light btn-sm fw-bolder me-2 lihat_kelas" style="min-width:150px; max-width:250px; font-size:13px;">Kelas Abu Bakar <span class="badge badge-circle badge-primary ms-2">10</span></button>
                                        <button type="button" class="btn btn-icon btn-danger text-white image-hover-show me-2 bush">
                                            <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>
                                        </button>
                                    </div>
                                </td>

                                <td class="bash">
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-light btn-sm fw-bolder me-2 lihat_kelas" style="min-width:150px; max-width:250px; font-size:13px;">Kelas Umar Bin Khatab <span class="badge badge-circle badge-primary ms-2">10</span></button>
                                        <button type="button" class="btn btn-icon btn-danger text-white image-hover-show me-2 bush">
                                            <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>
                                        </button>
                                    </div>
                                </td>

                                <td class="bash">
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-light btn-sm fw-bolder me-2 lihat_kelas" style="min-width:150px; max-width:250px; font-size:13px;">Kelas Ustman Bin Affan <span class="badge badge-circle badge-primary ms-2">10</span></button>
                                        <button type="button" class="btn btn-icon btn-danger text-white image-hover-show me-2 bush">
                                            <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
                
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Pilih Kelas</span>
                            </label>
                            <div>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih">
                                    <option></option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-12">
                        <p class="mb-3 fw-bold text-danger" style="font-style: italic;">Centang checkbox untuk siswa yang ingin
                            dipilih</p>
                        <table class="table table-bordered gs-7 gy-4 gx-7 no-footer" style="border:0.5pt solid #C0C0C0;">
                            <thead class="bg-light align-middle">
                                <tr class="fw-bold" style="border:0.5pt solid #C0C0C0;vertical-align:middle;">
                                    <th scope="col" class="w-10px pe-2">
                                        <div id="check_all" class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true">
                                        </div>
                                    </th>
                                    <th scope="col" width="200px" class="text-center">NIS/NISN</th>
                                    <th scope="col">Nama Siswa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="fw-bold" style="border:0.5pt solid #C0C0C0;">
                                    <th scope="row">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input checkboxes" type="checkbox">
                                        </div>
                                    </th>
                                    <td class="text-center">123</td>
                                    <td>Max Smith</td>
                                </tr>

                                <tr class="fw-bold" style="border:0.5pt solid #C0C0C0;">
                                    <th scope="row">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input checkboxes" type="checkbox">
                                        </div>
                                    </th>
                                    <td class="text-center">456</td>
                                    <td>Jhon Doe</td>
                                </tr>

                                <tr class="fw-bold" style="border:0.5pt solid #C0C0C0;">
                                    <th scope="row">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input checkboxes" type="checkbox">
                                        </div>
                                    </th>
                                    <td class="text-center">789</td>
                                    <td>Mark Samuel</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
